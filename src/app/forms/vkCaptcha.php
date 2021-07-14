<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXWindowEvent; 
use action\Element; 
use php\io\Stream; 


class vkCaptcha extends AbstractForm
{

    /**
     * @event button.click 
     **/
    function doButtonClick(UXMouseEvent $event = null)
    {    
        self::$captchaCode = $this->captchaText->text;
        app()->hideForm('vkCaptcha');
    }

    /**
     * @event show 
     **/
    function doShow(UXWindowEvent $event = null)
    {
        $this->showPreloader('Загрузка капчи');
        $this->captchaText->text = '';
        Element::loadContentAsync($this->captcha, self::$captchaUrl, function () use ($event) {
            $this->hidePreloader();
        });
    }
    
    private static $captchaUrl;
    private static $captchaCode;

    public static function setUrl($url){
        self::$captchaUrl = $url;
    }

    public static function getCode(){
        return self::$captchaCode;
    }
}
