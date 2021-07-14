<?php
namespace app\forms;

use php\jsoup\Element;
use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 


class TenPhotos extends AbstractForm
{


    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $event = null)
    {    
        app()->hideForm($this->getContextFormName());
    }

}
