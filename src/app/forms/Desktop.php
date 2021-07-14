<?php
namespace app\forms;

use app\forms\Menu;
use App;
use action\Animation;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\UXDialog; 
use php\gui\event\UXEvent; 
use php\gui\event\UXWindowEvent; 


class Desktop extends AbstractForm
{

    function doWallsClickLeft(UXMouseEvent $event = null)
    {    

    }
    


    function doUp_BarClickLeft(UXMouseEvent $event = null)
    {
        $this->Menu->visible = !$this->Menu->visible;
    }

    
    function doOffClickLeft(UXMouseEvent $event = null)
    {    

    }

 
    function doFast_settingClickLeft(UXMouseEvent $event = null)
    {    

    }


    function doDown_BarClickLeft(UXMouseEvent $event = null)
    { 

        
    }



    function doFast_BrowserClickLeft(UXMouseEvent $event = null)
    {    

    }












    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        Animation::moveTo($this->notification1, 200, 1368.0, 488.0, function () use ($event) {
            });
                $this->Notification1->hide();
    }




    /**
     * @event image11.click-Left 
     */
    function doImage11ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('Settings_home');
    }

    /**
     * @event image13.click-Left 
     */
    function doImage13ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenCommand1');
    }

    /**
     * @event image12.click-Left 
     */
    function doImage12ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenMusic_Home');
    }

    /**
     * @event image14.click-Left 
     */
    function doImage14ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenBrowser');
    }

    /**
     * @event image15.click-Left 
     */
    function doImage15ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenPhotos');
    }

    /**
     * @event image16.click-Left 
     */
    function doImage16ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenMovies');
    }

    /**
     * @event image17.click-Left 
     */
    function doImage17ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenNotepad');
    }

    /**
     * @event image18.click-Left 
     */
    function doImage18ClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('YouTube');
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $event = null)
    {    
        
    }

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 1000, 600); 
        waitAsync(1000, function () use ($event) {
        app()->shutdown();
        });
    }

    /**
     * @event image13.mouseEnter 
     */
    function doImage13MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image13.mouseExit 
     */
    function doImage13MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event image18.mouseEnter 
     */
    function doImage18MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image18.mouseExit 
     */
    function doImage18MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event image11.mouseEnter 
     */
    function doImage11MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image11.mouseExit 
     */
    function doImage11MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event image12.mouseEnter 
     */
    function doImage12MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image12.mouseExit 
     */
    function doImage12MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event image16.mouseEnter 
     */
    function doImage16MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image16.mouseExit 
     */
    function doImage16MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event image14.mouseEnter 
     */
    function doImage14MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image14.mouseExit 
     */
    function doImage14MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event image15.mouseEnter 
     */
    function doImage15MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image15.mouseExit 
     */
    function doImage15MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event image17.mouseEnter 
     */
    function doImage17MouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event image17.mouseExit 
     */
    function doImage17MouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }

    /**
     * @event imageAlt.mouseEnter 
     */
    function doImageAltMouseEnter(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.2); 
    }

    /**
     * @event imageAlt.mouseExit 
     */
    function doImageAltMouseExit(UXMouseEvent $event = null)
    {    
        Animation::scaleTo($event->sender, 100, 1.0); 
    }






}
