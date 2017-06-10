<?php
/**
 * Points plugin for Craft CMS
 *
 * Points Controller
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2017 Jason Mayo
 * @link      bymayo.co.uk
 * @package   Points
 * @since     2.0.0
 */

namespace Craft;

class PointsController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = array('actionIndex',
        );

    /**
     */
    public function actionIndex()
    {
    }
}