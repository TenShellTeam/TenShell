<?php
namespace app\forms;

use action\Element;
use php\gui\UXDialog;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXKeyEvent; 


class Settings_Personalization extends AbstractForm
{

















    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image5.click-Left 
     */
    function doImage5ClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image6.click-Left 
     */
    function doImage6ClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image7.click-Left 
     */
    function doImage7ClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image8.click-Left 
     */
    function doImage8ClickLeft(UXMouseEvent $event = null)
    {    
        UXDialog::show('Нажмите на значок Открыть для появления окна с выбором обоев.');
    }

    /**
     * @event image9.click-Left 
     */
    function doImage9ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('Sets_Themes');
    }




}
