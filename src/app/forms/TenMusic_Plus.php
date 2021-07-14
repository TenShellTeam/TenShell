<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 


class TenMusic_Plus extends AbstractForm
{

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
app()->hideForm($this->getContextFormName());
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $event = null)
    {        
app()->hideForm($this->getContextFormName());
    }

}
