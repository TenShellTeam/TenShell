<?php
namespace app\modules;

use php\gui\framework\AbstractModule;
use php\gui\framework\ScriptEvent; 
use action\Element; 
use php\io\Stream; 


class TenPhotos extends AbstractModule
{

    /**
     * @event fileChooser.action 
     */
    function doFileChooserAction(ScriptEvent $event = null)
    {
        Element::loadContentAsync($this->Photo, uiText($event->sender), function () use ($event) {
        });
    }

}
