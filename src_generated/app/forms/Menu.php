<?php
namespace app\forms;

use action\Animation;
use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXWindowEvent; 
use action\Media; 


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
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
			app()->hideForm($this->getContextFormName());
		});

        
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
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('system_off');
		app()->hideForm($this->getContextFormName());
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
		});

        
    }

    /**
     * @event click 
     */
    function doClick(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::open('res://.data/audio/Windows Startup.wav', true, 'TenOS');

        
    }

    /**
     * @event Info.click-Left 
     */
    function doInfoClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Time');
		app()->hideForm($this->getContextFormName());
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
		});

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
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('Youtube');
		app()->hideForm($this->getContextFormName());
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
		});

        
    }

    /**
     * @event SetBox.click-Left 
     */
    function doSetBoxClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('SetBox');
		app()->hideForm($this->getContextFormName());
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
		});

        
    }

    /**
     * @event TenMusic.click-Left 
     */
    function doTenMusicClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('TenMusic_Home');
		app()->hideForm($this->getContextFormName());
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
		});

        
    }

    /**
     * @event TenBrowser.click-Left 
     */
    function doTenBrowserClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('TenBrowser');
		app()->hideForm($this->getContextFormName());
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
		});

        
    }

    /**
     * @event TenNotepad.click-Left 
     */
    function doTenNotepadClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('TenNotepad');
		app()->hideForm($this->getContextFormName());
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
		});

        
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('system_off');
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
			app()->hideForm($this->getContextFormName());
		});

        
    }

    /**
     * @event Delete_Settings.click-Left 
     */
    function doDelete_SettingsClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->Settings->hide();
		$this->toast('Плитка скрыта.');

        
    }


    /**
     * @event Delete_Info.click-Left 
     */
    function doDelete_InfoClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->Info->hide();
		$this->toast('Плитка скрыта.');

        
    }

    /**
     * @event Delete_TenCommand.click-Left 
     */
    function doDelete_TenCommandClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->SmartCommand->hide();

        
    }

    /**
     * @event Delete_TenBrowser.click-Left 
     */
    function doDelete_TenBrowserClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->TenBrowser->hide();

        
    }

    /**
     * @event Delete_YouTube.click-Left 
     */
    function doDelete_YouTubeClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->YouTube->hide();

        
    }

    /**
     * @event Delete_SetBox.click-Left 
     */
    function doDelete_SetBoxClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->SetBox->hide();

        
    }

    /**
     * @event Delete_Off.click-Left 
     */
    function doDelete_OffClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка действия скрыта.');
		$this->Off->hide();

        
    }

    /**
     * @event Delete_TenMusic.click-Left 
     */
    function doDelete_TenMusicClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->TenMusic->hide();

        
    }

    /**
     * @event Delete_TenNotepad.click-Left 
     */
    function doDelete_TenNotepadClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->TenNotepad->hide();

        
    }

    /**
     * @event Delete_TenPhotos.click-Left 
     */
    function doDelete_TenPhotosClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->TenPhotos->hide();

        
    }

    /**
     * @event S_Settings.click-Left 
     */
    function doS_SettingsClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->Settings->show();

        
    }


    /**
     * @event S_Info.click-Left 
     */
    function doS_InfoClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->Info->show();

        
    }

    /**
     * @event S_TenCommand.click-Left 
     */
    function doS_TenCommandClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->SmartCommand->show();

        
    }

    /**
     * @event S_TenBrowser.click-Left 
     */
    function doS_TenBrowserClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->TenBrowser->show();

        
    }

    /**
     * @event S_YouTube.click-Left 
     */
    function doS_YouTubeClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->YouTube->show();

        
    }

    /**
     * @event S_SetBox.click-Left 
     */
    function doS_SetBoxClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->SetBox->show();

        
    }

    /**
     * @event S_Off.click-Left 
     */
    function doS_OffClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка действия включена.');
		$this->Off->show();

        
    }

    /**
     * @event S_TenMusic.click-Left 
     */
    function doS_TenMusicClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->TenMusic->show();

        
    }

    /**
     * @event S_TenNotepad.click-Left 
     */
    function doS_TenNotepadClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->TenNotepad->show();

        
    }

    /**
     * @event S_TenPhotos.click-Left 
     */
    function doS_TenPhotosClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->TenPhotos->show();

        
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Включить плитки приложений...');
		$this->ShowerApps->visible = !$this->ShowerApps->visible;

        
    }

    /**
     * @event TenPhotos.click-Left 
     */
    function doTenPhotosClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('TenPhotos');
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
			app()->hideForm($this->getContextFormName());
		});

        
    }

    /**
     * @event vkontakte.click-Left 
     */
    function doVkontakteClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('VK');
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
			app()->hideForm($this->getContextFormName());
		});

        
    }

    /**
     * @event delete_vkontakte.click-Left 
     */
    function doDelete_vkontakteClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка скрыта.');
		$this->vkontakte->hide();

        
    }

    /**
     * @event image15.click-Left 
     */
    function doImage15ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('VK');
		Animation::fadeOut($this->getContextForm(), 200, function () use ($e, $event) {
			app()->hideForm($this->getContextFormName());
		});

        
    }

    /**
     * @event S_VKontakte.click-Left 
     */
    function doS_VKontakteClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->toast('Плитка включена.');
		$this->vkontakte->show();

        
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
