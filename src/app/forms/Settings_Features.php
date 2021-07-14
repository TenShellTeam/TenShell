<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Settings_Features extends AbstractForm
{

    /**
     * @event labelAlt.click-Left 
     */
    function doLabelAltClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('Settings_home');
        app()->hideForm('Settings_features');
    }

    /**
     * @event checkbox.click-Left 
     */
    function doCheckboxClickLeft(UXMouseEvent $event = null)
    {    
        
    }

}
