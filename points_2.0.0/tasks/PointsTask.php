<?php
/**
 * Points plugin for Craft CMS
 *
 * Points Task
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2017 Jason Mayo
 * @link      bymayo.co.uk
 * @package   Points
 * @since     2.0.0
 */

namespace Craft;

class PointsTask extends BaseTask
{
    /**
     * @access protected
     * @return array
     */

    protected function defineSettings()
    {
        return array(
            'someSetting' => AttributeType::String,
        );
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Points Tasks';
    }

    /**
     * @return int
     */
    public function getTotalSteps()
    {
        return 1;
    }

    /**
     * @param int $step
     * @return bool
     */
    public function runStep($step)
    {
        return true;
    }
}
