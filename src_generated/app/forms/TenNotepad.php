<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXWindowEvent; 
use action\Element; 
use php\io\Stream; 


class TenNotepad extends AbstractForm
{

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm($this->getContextFormName());

        
    }

    /**
     * @event Open.click-Left 
     */
    function doOpenClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Save.click-Left 
     */
    function doSaveClickLeft(UXMouseEvent $event = null)
    {    
        
    }




}
