<?php
namespace app\forms;

use app\forms\LockScreen;
use php\io\File;
use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 


class On extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $event = null)
    {    
$this->loadForm('Desktop');//Загрузить рабочий стол
}
