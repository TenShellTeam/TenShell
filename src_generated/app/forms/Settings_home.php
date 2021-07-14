<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXMouseEvent; 
use action\Animation; 
use action\Media; 


class Settings_home extends AbstractForm
{









    /**
     * @event keyDown-Shift+T 
     */
    function doKeyDownShiftT(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->button5->show();

        
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm($this->getContextFormName());
		app()->showForm('Settings_Personalization');

        
    }

    /**
     * @event labelAlt.click-Left 
     */
    function doLabelAltClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm($this->getContextFormName());
		app()->showForm('Settings_Personalization');

        
    }

    /**
     * @event image6.click-Left 
     */
    function doImage6ClickLeft(UXMouseEvent $event = null)
    {
        app()->hideForm($this->getContextFormName());
        Animation::fadeIn($this->form('Time'), 200, function () use ($event) {
            app()->showForm('Time');
            Animation::fadeIn($this->form('Time'), 200, function () use ($event) {
            });
        });
    }

    /**
     * @event label4.click-Left 
     */
    function doLabel4ClickLeft(UXMouseEvent $event = null)
    {    
                app()->hideForm($this->getContextFormName());
        Animation::fadeIn($this->form('Time'), 200, function () use ($event) {
            app()->showForm('Time');
            Animation::fadeIn($this->form('Time'), 200, function () use ($event) {
            });
        });
    }



    /**
     * @event image8.click-Left 
     */
    function doImage8ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm($this->getContextFormName());
		app()->showForm('Testing_Next');

        
    }

    /**
     * @event label6.click-Left 
     */
    function doLabel6ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm($this->getContextFormName());
		app()->showForm('Testing_Next');

        
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::open('res://.data/audio/Hide.mp3', true, 'TenOS');
		app()->hideForm($this->getContextFormName());

        
    }

    /**
     * @event image10.click-Left 
     */
    function doImage10ClickLeft(UXMouseEvent $event = null)
    {    
        app()->minimizeForm($this->getContextFormName());
    }











}
