<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Confirmation_off extends AbstractForm
{

    /**
     * @event label3.click-Left 
     */
    function doLabel3ClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event label4.click-Left 
     */
    function doLabel4ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('Off');
        app()->hideForm('system_off');
    }

}
