<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 


class TenMovies_Settings extends AbstractForm
{

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        app()->hideForm('TenMovies_Settings');
    }

    /**
     * @event colorPicker.action 
     */
    function doColorPickerAction(UXEvent $event = null)
    {    
        $this->form('TenMovies')->mediaView->backgroundColor = $this->colorPicker->value;
    }

    /**
     * @event labelAlt.click-Left 
     */
    function doLabelAltClickLeft(UXMouseEvent $event = null)
    {
        $this->form('TenMovies')->mediaView->smooth = 'true';
    }

    /**
     * @event label3.click-Left 
     */
    function doLabel3ClickLeft(UXMouseEvent $event = null)
    {    
        $this->form('TenMovies')->mediaView->smooth = 'false';
    }

    /**
     * @event label5.click-Left 
     */
    function doLabel5ClickLeft(UXMouseEvent $event = null)
    {    
        $this->form('TenMovies')->mediaView->proportional = 'true';
    }

    /**
     * @event label4.click-Left 
     */
    function doLabel4ClickLeft(UXMouseEvent $event = null)
    {    
        $this->form('TenMovies')->mediaView->proportional = 'false';
    }


}
