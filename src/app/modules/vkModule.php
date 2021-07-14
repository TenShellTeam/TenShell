<?php
namespace app\modules;

use php\format\JsonProcessor;
use app\forms\vkCaptcha;
use php\gui\framework\AbstractModule;
use php\gui\UXApplication;
use php\gui\UXDialog;
use php\io\Stream;
use php\lang\Thread;
use php\lib\Str;

class vkModule extends AbstractModule
{
    
public static $log = false; //Логирование запросов в консоль

    //Если есть своё приложение, поменяйте параметры $appID и $appSecret
    private static $appID = 5119526; 
    private static $appSecret = 'QFWVrezg1DAypE6vCqFj';
    
    private static $tokenFile = './token.txt'; //Файл, в котором хранится access_token
    private static $accessToken = false;
    private static $apiVersion = 5.42;

    
    /**
     * Асинхронное выполнение запроса
     *
     * @param $method string - метод VK API https://vk.com/dev/methods
     * @param $params array - массив с параметрами
     * @param $callback callable - функция, которая будет вызвана по окончанию запроса
     * 
     * @example vkModule::Query('users.get', ['fields'=>'photo_100'], function($answer){ });
     **/
    public static function Query($method, $params, $callback)
    {                       
            (new Thread(function() use ($callback, $method, $params){
            try{
                $result = self::sQuery($method, $params);
                UXApplication::runLater(function () use ($callback, $result) {
                    $callback($result);
                    });
                
            }catch(vkException $e){
                UXApplication::runLater(function () use ($e, $callback, $method, $params) {
                    switch($e->getCode()){
                        //api.vk.com недоступен, обычно из-за частых запросов
                        case -2:
                            wait(500);
                            return self::Query($method, $params, $callback);
                        break;    
                        
                        case 5://Просроченный access_token
                        case 10://Ошибка авторизации
                            UXDialog::show('Вам необходимо повторно авторизоваться', 'ERROR');
                            self::logout();
                            self::checkAuth();
                            return self::Query($method, $params, $callback);
                        break;    

                        //Нужно ввести капчу
                        case 14:
                            $result = $e->getData();
                            vkCaptcha::setUrl($result['error']['captcha_img']);
                            app()->showFormAndWait('vkCaptcha');

                            $params['captcha_sid'] = $result['error']['captcha_sid'];
                            $params['captcha_key'] = vkCaptcha::getCode();
                             
                            return self::Query($method, $params, $callback);
                        break;    

                        default:
                            UXDialog::show('Ошибка VK API: '.$e->getMessage().' (code='.$e->getCode().')', 'ERROR');
                    }
                
                    });
            }
        }))->start();
    }
    
    /**
     * Проверяет, авторизован ли текущий пользователь (есть ли сохраненный access_token)
     * + автоматически "подбирает" сохранённый access_token
     *
     * @return bool
     **/     
    public static function isAuth()
    {
        if(file_exists(self::$tokenFile) and $t = file_get_contents(self::$tokenFile) and Str::Length($t) == 85){
            self::$accessToken = $t;
            return true;
        }
        return false;
    }

    /**
     * Будет постоянно предлагать авторизоваться
     **/
    public static function checkAuth(){
        if(!self::isAuth()){
            app()->showFormAndWait('vkAuth');
        }
    }

    public static function logout(){
        self::$accessToken = false;
        unlink(self::$tokenFile);
    }
    
    /*** Getters ***/
    public static function getAppID(){
        return self::$appID;
    }

    public static function getApiVersion(){
        return self::$apiVersion;
    }

    /*** Setters ***/
    public static function setAccessToken($aToken){
        self::$accessToken = $aToken;
        file_put_contents(self::$tokenFile, $aToken);
    }

    /**
     * Синхронный запрос к VK API (в общем потоке)
     * В проекте лучше использовать асинхронные запросы через метод Query
     *
     * @param $method string - метод VK API https://vk.com/dev/methods
     * @param $params array - массив с параметрами
     * @return array - массив с ответом
     *
     * @thrown vkException
     * @example vkModule::sQuery('users.get', ['fields'=>'photo_100']); //return ['response'=>[['id'=> ... , 'photo_100'=> ... ]]];
     **/ 
    public static function sQuery($method, array $params = [])
    {
        $params['v'] = self::$apiVersion;
        
        if(self::$accessToken!==false){
            $params['access_token'] = self::$accessToken;
        }
        
        $url = 'https://api.vk.com/method/'.$method.'?'.http_build_query($params);

        try{
            $content = Stream::getContents($url);
            $json = new JsonProcessor(JsonProcessor::DESERIALIZE_AS_ARRAYS);
            $data = $json->parse($content);
        }
        catch(\php\io\IOException $e){ throw new vkException('Отсутствует интернет-соединение', -1); }
        catch(\php\net\SocketException $e){ throw new vkException('Невозможно подключиться к api.vk.com', -2); }

        if(self::$log)var_dump(['[vk] '.$url=>$data]);
 
        
        if(isset($data['error'])){
            throw new vkException($data['error']['error_msg'], $data['error']['error_code'], $data);
            return false;
        }
        return $data;      
    }
}


class vkException extends \Exception{
    private $data;
    public function getData(){
        return $this->data;
    }
        
    public function __construct($message = null, $code = 0, $data = []){
        $this->data = $data;
        return parent::__construct($message, $code, null);
    }
    
}

if(!function_exists('http_build_query')){
    function http_build_query($a,$b='',$c=0)
     {
            if (!is_array($a)) return false;
            foreach ((array)$a as $k=>$v)
            {
                if ($c)
                {
                    if( is_numeric($k) )
                        $k=$b."[]";
                    else
                        $k=$b."[$k]";
                }
                else
                {   if (is_int($k))
                        $k=$b.$k;
                }

                if (is_array($v)||is_object($v))
                {
                    $r[]=http_build_query($v,$k,1);
                        continue;
                }
                $r[]=urlencode($k)."=".urlencode($v);
            }
            return implode("&",$r);
            }
}
