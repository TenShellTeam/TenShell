<?php
namespace app\forms;

use action\Media;
use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXMouseEvent; 


class TenCommand1 extends AbstractForm
{

    /**
     * @event editAlt.globalKeyDown-Enter 
     */
    function doEditAltGlobalKeyDownEnter(UXKeyEvent $event = null)
    {    
        {
    if (uiText($this) == '/rule set for tencommand "open new version" false');
        app()->hideForm($this->getContextFormName());
        }
        {
    if (uiText($this->smartcommand_edit) == '/system __ restart');
        $this->loadForm('on_system');
}
{

    if (uiText($this->smartcommand_edit) == '/system __ off');
        $this->loadForm('Off_system');
}
{

    if (uiText($this->smartcommand_edit) == '/system __ open = desktop');
        app()->showNewForm('MainForm');
}
{
  
    if (uiText($this->smartcommand_edit) == '/open desktop $ close = "all" = apps');
        $this->loadForm('MainForm');
}
{

    if (uiText($this->smartcommand_edit) == '/open app info');
        app()->showForm('Time');
}
{

    if (uiText($this->smartcommand_edit) == '/open app help');
        app()->showForm('Helper_app');
}
{

    if (uiText($this->smartcommand_edit) == '/system status dream');
        app()->showFormAndWait('Dream');
}
{

    if (uiText($this->smartcommand_edit) == '/open app "ten.browser"');
        app()->showForm('TenBrowser');
}
{

    if (uiText($this->smartcommand_edit) == '/system __open = app.system.ten.tenbrowser.beta @ app.system.systemui.tenos "app started in .tenapp mode" $ "app __close = %this ->app"');
        app()->showForm('TenBrowser');
}
{

    if (uiText($this->smartcommand_edit) == '/system __open = app.system.ten.tenbrowser.beta @ app.system.systemui.tenos "app started in .tenapp mode" $ "app __close = %this ->app"');
        app()->hideForm($this->getContextFormName());
}
{

    if (uiText($this->smartcommand_edit) == '/open app :"ten.music"');
        app()->showForm('TenMusic');
}
{

    if (uiText($this) == '/open app "ten.notepad"');
        app()->showForm('TenNotepad');
}
{

    if (uiText($this) == '/rule set for tencommand "open new version" false');
        app()->showForm('Windows_Mode');
}
    {
    if (uiText($this->smartcommand_edit) == 'register set desktop == old');
        $this->loadForm('Mainform');
}
{

    if (uiText($this->smartcommand_edit) == 'register set desktop == new');
        $this->loadForm('Desktop');
}
{

    if (uiText($this->smartcommand_edit) == 'register set TenCore == false');
        app()->shutdown();
}
{
    if (uiText($event->sender) == '/easter egg Altyn TenMusic')
        Media::open('res://.data/audio/TATARKA - АЛТЫН __ ALTYN.mp3', true, 'Easter_egg');
}

}

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $event = null)
    {    
        app()->hideForm('TenCommand1');
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $event = null)
    {    
        app()->minimizeForm($this->getContextFormName());
    }


}
