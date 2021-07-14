<?php
namespace app\forms;

use action\Animation;
use php\gui\UXData;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXWindowEvent; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXScrollEvent; 


class MainForm extends AbstractForm
{

    /**
     * @event New_Start.click-Left 
     */
    function doNew_StartClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('Menu');
        Animation::fadeIn($this->form('Menu'), 100, function () use ($event) {
});
    }

    /**
     * @event Info_bar.click-Left 
     */
    function doInfo_barClickLeft(UXMouseEvent $event = null)
    {    
        app()->restoreForm('Time');
    }

    /**
     * @event TenCommand_bar.click-Left 
     */
    function doTenCommand_barClickLeft(UXMouseEvent $event = null)
    {    
        app()->restoreForm('TenCommand1');
    }

    /**
     * @event Settings_home_bar.click-Left 
     */
    function doSettings_home_barClickLeft(UXMouseEvent $event = null)
    {    
        app()->restoreForm('Settings_home');
    }

    /**
     * @event New_Desktop.click-Left 
     */
    function doNew_DesktopClickLeft(UXMouseEvent $event = null)
    {
        
        
        // Generated
        $this->loadForm('Desktop');
    }


    function doClickLeft(UXMouseEvent $event = null)
    {    
        Media::open('res://.data/audio/Windows Startup.wav', true, "TenShell");
    }

           function doShow(UXWindowEvent $event = null)
    
    {{ 
if (uitext(event->data) == 10.12.16)
    $this->data->show();
        }}
        







}
