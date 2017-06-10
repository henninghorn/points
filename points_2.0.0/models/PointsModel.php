<?php
/**
 * Points plugin for Craft CMS
 *
 * Points Purchasable Model
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2017 Jason Mayo
 * @link      bymayo.co.uk
 * @package   Points
 * @since     2.0.0
 */

namespace Craft;

use Commerce\Interfaces\Purchasable;

class PointsModel extends BaseElementModel implements Purchasable
{
    /**
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'someField'     => array(AttributeType::String, 'default' => 'some value'),
        ));
    }

    /**
     * @return bool
     */
    public function isEditable()
    {
        return true;
    }

    /**
     * @return string|false
     */
    public function getCpEditUrl()
    {
    }

    /**
     * @return int
     */
    public function getPurchasableId()
    {
        return $this->id;
    }

    /*
     * @return array
     */
    public function getSnapshot()
    {
        return array('someField'=>$this->someField);
    }

    /**
     * @return float decimal(14,4)
     */
    public function getPrice()
    {
        // Or return a user enterable Price if applicable.
        return 10.00;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        // Or return a user enterable SKU if applicable.
        return md5(uniqid(mt_rand(), true));
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return " Purchasable";
    }

    /**
     * @return int
     */
    public function getTaxCategoryId()
    {
        // Or return a user selected tax category.
        return craft()->commerce_taxCategories->getDefaultTaxCategoryId();

    }

    /**
     * @param \Craft\Commerce_LineItemModel $lineItem
     *
     * @return mixed
     */
    public function validateLineItem(\Craft\Commerce_LineItemModel $lineItem)
    {
        // In this example no validation errors are addeed to the lineItem.
        return true;
    }

    /**
     * @return bool
     */
    public function hasFreeShipping()
    {
        // Or allow the user to decide this.
        return false;
    }

    /**
     * @return bool
     */
    public function getIsPromotable()
    {
        // Or allow the user to decide this.
        return false;
    }

}