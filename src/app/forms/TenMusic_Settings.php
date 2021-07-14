<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 


class TenMusic_Settings extends AbstractForm
{

    /**
     * @event colorPickerAlt.action 
     */
    function doColorPickerAltAction(UXEvent $event = null)
    {    
        $this->form('TenMusic_Home')->rect->fillColor = $this->colorPickerAlt->value;
    }

}
