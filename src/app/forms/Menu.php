<?php
namespace app\forms;

use action\Animation;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXWindowEvent; 


class Menu extends AbstractForm
{







    /**
     * @event Settings.click-Left 
     */
    function doSettingsClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('Settings_home');
            app()->hideForm($this->getContextFormName());
                    Animation::fadeOut($this->getContextForm(), 200, function () use ($event) {
});
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
        
    }

    /**
     * @event SmartCommand.click-Left 
     */
    function doSmartCommandClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenCommand1');
        app()->hideForm('Menu');
        Animation::fadeOut($this->getContextForm(), 200, function () use ($event) {
        });
    }
    

    /**
     * @event Off.click-Left 
     */
    function doOffClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event click 
     */
    function doClick(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Info.click-Left 
     */
    function doInfoClickLeft(UXMouseEvent $event = null)
    {    
        $this->form('MainForm')->Info_bar->show();
            app()->showForm('Time');
                app()->hideForm($this->getContextFormName());
                    Animation::fadeOut($this->getContextForm(), 200, function () use ($event) {
                        });app()->hideForm($this->getContextFormName());
                    Animation::fadeOut($this->getContextForm(), 200, function () use ($event) {
                        });
    }


    /**
     * @event YouTube.click-Left 
     */
    function doYouTubeClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event SetBox.click-Left 
     */
    function doSetBoxClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event TenMusic.click-Left 
     */
    function doTenMusicClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event TenBrowser.click-Left 
     */
    function doTenBrowserClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event TenNotepad.click-Left 
     */
    function doTenNotepadClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_Settings.click-Left 
     */
    function doDelete_SettingsClickLeft(UXMouseEvent $event = null)
    {    
        
    }


    /**
     * @event Delete_Info.click-Left 
     */
    function doDelete_InfoClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_TenCommand.click-Left 
     */
    function doDelete_TenCommandClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_TenBrowser.click-Left 
     */
    function doDelete_TenBrowserClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_YouTube.click-Left 
     */
    function doDelete_YouTubeClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_SetBox.click-Left 
     */
    function doDelete_SetBoxClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_Off.click-Left 
     */
    function doDelete_OffClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_TenMusic.click-Left 
     */
    function doDelete_TenMusicClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_TenNotepad.click-Left 
     */
    function doDelete_TenNotepadClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event Delete_TenPhotos.click-Left 
     */
    function doDelete_TenPhotosClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_Settings.click-Left 
     */
    function doS_SettingsClickLeft(UXMouseEvent $event = null)
    {    
        
    }


    /**
     * @event S_Info.click-Left 
     */
    function doS_InfoClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_TenCommand.click-Left 
     */
    function doS_TenCommandClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_TenBrowser.click-Left 
     */
    function doS_TenBrowserClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_YouTube.click-Left 
     */
    function doS_YouTubeClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_SetBox.click-Left 
     */
    function doS_SetBoxClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_Off.click-Left 
     */
    function doS_OffClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_TenMusic.click-Left 
     */
    function doS_TenMusicClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_TenNotepad.click-Left 
     */
    function doS_TenNotepadClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_TenPhotos.click-Left 
     */
    function doS_TenPhotosClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $event = null)
    {    
        
    }

    /**
     * @event TenPhotos.click-Left 
     */
    function doTenPhotosClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event vkontakte.click-Left 
     */
    function doVkontakteClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event delete_vkontakte.click-Left 
     */
    function doDelete_vkontakteClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image15.click-Left 
     */
    function doImage15ClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event S_VKontakte.click-Left 
     */
    function doS_VKontakteClickLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $event = null)
    {    
        browse('https://vk.me/ten_teamru');
    }

    /**
     * @event TenModules.click-Left 
     */
    function doTenModulesClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenModules');
                app()->hideForm($this->getContextFormName());
                        Animation::fadeOut($this->getContextForm(), 200, function () use ($event) {
                        });

    }

    /**
     * @event TenStarter.click-Left 
     */
    function doTenStarterClickLeft(UXMouseEvent $event = null)
    {    
        app()->showForm('TenStarter');
                 app()->hideForm($this->getContextFormName());
                            Animation::fadeOut($this->getContextForm(), 200, function () use ($event) {
                                    });
    }






























}
