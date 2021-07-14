<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXWindowEvent; 


class Off extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $event = null)
    {    
        app()->shutdown();
    }


}
