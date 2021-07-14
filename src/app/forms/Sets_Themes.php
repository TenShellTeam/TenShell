<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use action\Element; 
use php\io\Stream; 


class Sets_Themes extends AbstractForm
{

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $event = null)
    {
        $this->showPreloader('Установка темы...');
        Element::loadContentAsync($this->form('MainForm')->image13, 'https://vk.com/photo319714810_456239235', function () use ($event) {
            Element::loadContentAsync($this->form('Menu')->image7, 'https://vk.com/photo319714810_456239235', function () use ($event) {
                Element::loadContentAsync($this->form('Desktop')->Walls, 'https://vk.com/photo319714810_456239235', function () use ($event) {
                });
            });
        });
        $this->hidePreloader();
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $event = null)
    {    
        app()->hideForm('Sets_Themes');
    }
}
