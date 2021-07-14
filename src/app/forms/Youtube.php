<?php
namespace app\forms;

use php\lang\Thread;
use php\framework\Logger;
use php\io\IOException;
use php\io\Stream;
use php\lib\str;
use php\gui\UXDialog;
use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 


class YouTube extends AbstractForm
{

    /**
     * Возвращает ссылку на видео, работает через поток.
     */
    function getYoutubeVideoUrlAsync($url, $highQuality = true, callable $callback) 
    {
        (new Thread(function () use ($url, $highQuality, $callback) {
            
            $result = $this->getYoutubeVideoUrl($url, $highQuality);
            
            uiLater(function () use ($result, $callback) {
                $callback($result);
            });
            
        }))->start(); 
        
            /**
     * Возвращает ссылку на видео.
     */
    function getYoutubeVideoUrl($url, $highQuality = true)
    {
        $parseStr = function ($str) {
            $result = [];
            
            foreach (str::split($str, '&') as $one) {
                list($name, $value) = str::split($one, '=');
                $value = urldecode($value);
                
                $result[$name] = $value;
            }
            
            return $result;
        };
        
        try {
            $videoId = null;
            $url = parse_url($url);
            
            switch ($url['host']) {
                case 'www.youtu.be':
                case 'youtu.be':
                    $videoId = str::sub($url['path'], 1);
                    break;
                    
                case 'www.youtube.com':
                case 'youtube.com':
                    $videoId = $parseStr($url['query'])['v'];
                    break; 
            }
            
            if (!$videoId) {
                return null;
            }
        
            $html = Stream::getContents('http://www.youtube.com/get_video_info?video_id=' . $videoId);
            
            $streams = null;
            
            $tmp = $parseStr($html);
            
            $links = [];
            
            if ($tmp['url_encoded_fmt_stream_map']) {
                $streams = str::split($tmp['url_encoded_fmt_stream_map'], ',');
                
                foreach ($streams as $stream) {
                    $links[] = $parseStr($stream);
                }
                
                $url = null;
                
                foreach ($links as $link) {
                    if (!str::contains($link['type'], 'mp4')) {
                       continue; 
                    }
                    
                    $url = $link['url'];
                    
                    if ($highQuality) {
                        if ($link['quality'] == 'hd720' || $link['quality'] == 'high') {
                            return $url;
                        }
                    } else {
                        if ($link['quality'] == 'medium') {
                            return $url;
                        }
                    }
                }
                
                return $url;
            }
            
            return $links;
        } catch (IOException $e) {
            Logger::error('Error to get youtube link: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
         $this->showPreloader('Идет загрузка... Если загрузка идет долго, перезагрузите приложение.');
         
        $this->getYoutubeVideoUrlAsync($this->edit->text, $this->hdCheck->selected, function ($url) {
            $this->hidePreloader();
            if ($url) { 
                $this->player->open($url);
            } else {
                UXDialog::show('Ошибка загрузки видео, проверьте ссылку.');
            }
        });
        }
}
}