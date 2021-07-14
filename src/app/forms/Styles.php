<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 


class Styles extends AbstractForm
{

    /**
     * @event colorPicker.action 
     */
    function doColorPickerAction(UXEvent $event = null)
    {    
        $this->form('Colors')->panel_color->fillColor = $this->colorPicker->value;
    }

    /**
     * @event colorPickerAlt.action 
     */
    function doColorPickerAltAction(UXEvent $event = null)
    {    
        $this->form('Colors')->background_color->fillColor = $this->colorPickerAlt->value;
    }

    /**
     * @event colorPicker3.action 
     */
    function doColorPicker3Action(UXEvent $event = null)
    {    
        $this->form('Colors')->Notification_color->fillColor = $this->colorPicker3->value;
    }

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $event = null)
    {    
        $this->form('TenBrowser')->panel->fillColor = $this->form('Colors')->panel_color->fillColor;
                $this->form('TenBrowser')->background->fillColor = $this->form('Colors')->background_color->fillColor;
        
        $this->form('TenCommand1')->background->fillColor = $this->form('Colors')->background_color->fillColor;
            
        $this->form('Sets_Themes')->background->fillColor = $this->form('Colors')->background_color->fillColor;
                $this->form('Sets_Themes')->panel->fillColor = $this->form('Colors')->panel_color->fillColor;
                
        $this->form('Settings_Features')->panel->fillColor = $this->form('Colors')->panel_color->fillColor;
                $this->form('Settings_Features')->background->fillColor = $this->form('Colors')->background_color->fillColor;
                
        $this->form('Settings_Home')->panel->fillColor = $this->form('Colors')->panel_color->fillColor;
                $this->form('Settings_Home')->background->fillColor = $this->form('Colors')->background_color->fillColor;
                
        $this->form('Settings_Personalization')->panel->fillColor = $this->form('Colors')->panel_color->fillColor;
        $this->form('Settings_Personalization')->panel2->fillColor = $this->form('Colors')->panel_color->fillColor;
                $this->form('Settings_Personalization')->background->fillColor = $this->form('Colors')->background_color->fillColor;
                
                $this->form('Time')->background->fillColor = $this->form('Colors')->background_color->fillColor;
                    $this->form('Time')->panel->fillColor = $this->form('Colors')->panel_color->fillColor;
    }

}
