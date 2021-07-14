<?php
namespace app\modules;

use action\Element;
use php\gui\framework\AbstractModule;
use php\gui\framework\ScriptEvent; 


class MainModule extends AbstractModule
{

    /**
     * @event olddesktop.action 
     */
    function doOlddesktopAction(ScriptEvent $event = null)
    {    
                Element::loadContentAsync($this->form('MainForm')->image13, uiText($this->olddesktop), function () use ($event) {
});
    }

    /**
     * @event Desktop.action 
     */
    function doDesktopAction(ScriptEvent $event = null)
    {    
                Element::loadContentAsync($this->form('Desktop')->Walls, uiText($this->Desktop), function () use ($event) {
});
    }

}
