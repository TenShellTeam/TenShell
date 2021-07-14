<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 


class Safe_Menu extends AbstractForm
{

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $event = null)
    {    
        app()->hideForm('Safe_Menu');
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
        $this->loadForm('off');
    }

}
