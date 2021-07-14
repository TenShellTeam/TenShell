<?php
namespace app\forms;

use app\forms\TenBrowser;
use action\Animation;
use app\forms\buy_101;
use app\forms\Settings_home;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXEvent; 
use action\Element; 
use php\io\Stream; 


class Time extends AbstractForm
{

    /**
     * @event show 
     **/
    function doShow(UXWindowEvent $event = null)
    {
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->form('MainForm')->Info_bar->show();

    $this->form('MainForm')->Info_bar->show();
    }










    /**
     * @event close 
     */
    function doClose(UXWindowEvent $event = null)
    {    
        $this->form('MainForm')->Info_bar->hide();
    }

    /**
     * @event button.mouseEnter 
     */
    function doButtonMouseEnter(UXMouseEvent $event = null)
    {    
          Animation::scaleTo($this->button, 100, 1.2); 
    }

    /**
     * @event button.mouseExit 
     */
    function doButtonMouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($this->button, 100, 1.0);
    }

    /**
     * @event rect3.click-Left 
     */
    function doRect3ClickLeft(UXMouseEvent $event = null)
    {    
Animation::fadeOut($this->getContextForm(), 500, function () use ($event) {
    app()->hideForm($this->getContextFormName());
});
    }

    /**
     * @event rect4.click-Left 
     */
    function doRect4ClickLeft(UXMouseEvent $event = null)
    {
        Animation::displace($this->getContextForm(), 100, 100.0, 100.0, function () use ($event) {
            app()->minimizeForm($this->getContextFormName());
        });
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
        Animation::scaleTo($this->button, 400, 50); 
        waitAsync(400, function () use ($event) {
        app()->minimizeForm('Time');
});
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $event = null)
    {    
        app()->showForm('Dev_app');
    }

    /**
     * @event buttonAlt.mouseEnter 
     */
    function doButtonAltMouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event buttonAlt.mouseExit 
     */
    function doButtonAltMouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }
    
    
    
    
    
}
