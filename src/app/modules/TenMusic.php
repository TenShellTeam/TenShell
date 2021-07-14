<?php
namespace app\modules;

use php\gui\framework\AbstractModule;
use php\gui\framework\ScriptEvent; 


class TenMusic extends AbstractModule
{

    /**
     * @event player.play 
     */
    function doPlayerPlay(ScriptEvent $event = null)
    {    
        $this->sliderAlt->value = $this->player->position;
    }



}
