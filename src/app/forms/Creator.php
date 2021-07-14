<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Creator extends AbstractForm
{

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {
        $instance = $this->create('Creator_Elements.image', null, 50, 50);
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $event = null)
    {    
        $instance = $this->create('Creator_Elements.textArea', null, 50, 50);
    }

}
