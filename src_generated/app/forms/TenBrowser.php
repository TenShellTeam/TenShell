<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXKeyEvent; 
use action\Element; 
use php\io\Stream; 
use action\Media; 


class TenBrowser extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContent($this->home_page, 'https://pbs.twimg.com/profile_images/582247408077303808/cxdZtiup_400x400.png');
		Element::loadContent($this->buttonsearch, 'https://pp.vk.me/c636118/v636118810/35a15/bpROGkjMwlU.jpg');
		Element::loadContent($this->vkicon, 'https://pp.vk.me/c636118/v636118810/35a0e/uaTgmNncvhg.jpg');

        
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm($this->getContextFormName());
		Media::open('res://.data/audio/Hide.mp3', true, 'TenOS');

        
    }

    /**
     * @event labelAlt.click-Left 
     */
    function doLabelAltClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContentAsync($this->browser, 'http://yandex.ru', function () use ($e, $event) {
		});

        
    }

    /**
     * @event home_page.click-Left 
     */
    function doHome_pageClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContentAsync($this->browser, 'http://yandex.ru', function () use ($e, $event) {
		});

        
    }

    /**
     * @event vkicon.click-Left 
     */
    function doVkiconClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContentAsync($this->browser, 'http://vk.com', function () use ($e, $event) {
		});

        
    }


    /**
     * @event buttonsearch.action 
     */
    function doButtonsearchAction(UXEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContentAsync($this->browser, uiText($this->edit), function () use ($e, $event) {
		});

        
    }

    /**
     * @event edit.keyDown-Enter 
     */
    function doEditKeyDownEnter(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContentAsync($this->browser, uiText($this->edit), function () use ($e, $event) {
		});

        
    }

    /**
     * @event label4.click-Left 
     */
    function doLabel4ClickLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::loadContentAsync($this->browser, 'http://vk.com', function () use ($e, $event) {
		});

        
    }

}
