<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 


class Dev_App extends AbstractForm
{

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
        $this->loadForm($this->edit->text);
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $event = null)
    {    
        app()->hideForm($this->edit->text);
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $event = null)
    {    
        app()->showForm($this->edit->text);
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $event = null)
    {    
        app()->ShowNewForm($this->edit->text);
    }

    /**
     * @event button5.action 
     */
    function doButton5Action(UXEvent $event = null)
    {    
        app()->showformandWait($this->edit->text);
    }

    /**
     * @event button6.action 
     */
    function doButton6Action(UXEvent $event = null)
    {    
        app()->minimizeForm($this->edit->text);
    }

    /**
     * @event button7.action 
     */
    function doButton7Action(UXEvent $event = null)
    {    
        app()->restoreForm($this->edit->text);
    }

    /**
     * @event button8.action 
     */
    function doButton8Action(UXEvent $event = null)
    {    
        
    }

}
