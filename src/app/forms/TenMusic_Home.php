<?php
namespace app\forms;

use php\gui\UXFileChooser;
use action\Media;
use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXWindowEvent; 


class TenMusic_Home extends AbstractForm
{

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $event = null)
    {    
        if ($this->paused) {
            $this->player->play();
        } else {
            $this->player->pause();
        }
        
        $this->paused = !$this->paused;
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
        $this->player->stop();
    }


    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $event = null)
    {    
                        $dialog = new UXFileChooser();
        $dialog->extensionFilters = [
            ['extensions' => ['*.mp3'], 'description' => 'Audio']
        ];
        
        if ($file = $dialog->showOpenDialog()) {
            $this->player->open($file);
        }
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        app()->hideForm($this->getContextFormName());
Media::open('res://.data/audio/Hide.mp3', true, 'TenOS');

    }







    /**
     * @event click 
     */
    function doClick(UXMouseEvent $event = null)
    {    
        Media::open('res://.data/audio/Windows Startup.wav', true, 'TenOS');
    }









    /**
     * @event close 
     */
    function doClose(UXWindowEvent $event = null)
    {
        
        
        // Generated
        Media::pause($this->player);
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $event = null)
    {
        
        
        // Generated
        Media::play($this->player);
    }

    /**
     * @event slider.mouseUp-Left 
     */
    function doSliderMouseUpLeft(UXMouseEvent $event = null)
    {
        $this->player->volume = $this->slider->value;
    }

    /**
     * @event sliderAlt.mouseUp-Left 
     */
    function doSliderAltMouseUpLeft(UXMouseEvent $event = null)
    {    
        $this->player->position = $this->sliderAlt->value;
    }

    /**
     * @event image7.click-Left 
     */
    function doImage7ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenMusic_Settings');
    }







}
