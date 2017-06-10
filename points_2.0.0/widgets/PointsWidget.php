<?php
/**
 * Points plugin for Craft CMS
 *
 * Points Widget
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2017 Jason Mayo
 * @link      bymayo.co.uk
 * @package   Points
 * @since     2.0.0
 */
namespace Craft;
class PointsWidget extends BaseWidget
{
    /**
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Points');
    }
    /**
     * @return mixed
     */
    public function getBodyHtml()
    {
        // Include our Javascript & CSS
        craft()->templates->includeCssResource('points/css/widgets/PointsWidget.css');
        craft()->templates->includeJsResource('points/js/widgets/PointsWidget.js');
        /* -- Variables to pass down to our rendered template */
        $variables = array();
        $variables['settings'] = $this->getSettings();
        return craft()->templates->render('points/widgets/PointsWidget_Body', $variables);
    }
    /**
     * @return int
     */
    public function getColspan()
    {
        return 1;
    }
    /**
     * @return array
     */
    protected function defineSettings()
    {
        return array(
            'someSetting' => array(AttributeType::String, 'label' => 'Some Setting', 'default' => ''),
        );
    }
    /**
     * @return mixed
     */
    public function getSettingsHtml()
    {

/* -- Variables to pass down to our rendered template */

        $variables = array();
        $variables['settings'] = $this->getSettings();
        return craft()->templates->render('points/widgets/PointsWidget_Settings',$variables);
    }

    /**
     * @param mixed $settings  The Widget's settings
     *
     * @return mixed
     */
    public function prepSettings($settings)
    {

/* -- Modify $settings here... */

        return $settings;
    }
}