<?php
namespace app\forms;

use php\gui\UXFileChooser;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 


class TenMovies extends AbstractForm
{

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $event = null)
    {    
        app()->hideForm('TenMovies');
    }

    /**
     * @event play.action 
     */
    function doPlayAction(UXEvent $event = null)
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
     * @event open.action 
     */
    function doOpenAction(UXEvent $event = null)
    {    
                $dialog = new UXFileChooser();
        $dialog->extensionFilters = [
            ['extensions' => ['*.mp4', '*.flv'], 'description' => 'Video (mp4, flv)']
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
        $this->panel->hide();
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenMovies_Settings');
    }




}
