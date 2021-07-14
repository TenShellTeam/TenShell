<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use action\Media; 


class TenMusic extends AbstractForm
{

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm($this->getContextFormName());
		Media::open('res://.data/audio/Hide.mp3', true, 'TenOS');

        
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('TenMusic_Home');
		app()->hideForm($this->getContextFormName());

        
    }

    /**
     * @event click 
     */
    function doClick(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::open('res://.data/audio/Windows Startup.wav', true, 'TenOS');

        
    }

}
