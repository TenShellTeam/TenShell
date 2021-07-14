<?php
namespace app\modules;

use php\jsoup\Element;
use php\gui\framework\AbstractModule;
use php\gui\framework\ScriptEvent; 


class TenNotepad extends AbstractModule
{

    /**
     * @event fileChooser.action 
     */
    function doFileChooserAction(ScriptEvent $event = null)
    {    
        Element::loadContentAsync($this->NotepadArea, uiText($this->fileChooser), function () use ($event) {
});

    }

    /**
     * @event fileSaver.action 
     */
    function doFileSaverAction(ScriptEvent $event = null)
    {    
        $this->file->path = uiText($this->fileSaver);
Element::setText($this->file, uiText($this->NotepadArea));

    }

    /**
     * @event file.create 
     */
    function doFileCreate(ScriptEvent $event = null)
    {    
        $this->toast('Файл создан.');
    }

}
