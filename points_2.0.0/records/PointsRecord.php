<?php
/**
 * Points plugin for Craft CMS
 *
 * Points Record
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2017 Jason Mayo
 * @link      bymayo.co.uk
 * @package   Points
 * @since     2.0.0
 */

namespace Craft;

class PointsRecord extends BaseRecord
{
    /**
     * @return string
     */
    public function getTableName()
    {
        return 'points';
    }

    /**
     * @access protected
     * @return array
     */
   protected function defineAttributes()
    {
        return array(
            'someField'     => array(AttributeType::String, 'default' => ''),
        );
    }

    /**
     * @return array
     */
    public function defineRelations()
    {
        return array(
        );
    }
}