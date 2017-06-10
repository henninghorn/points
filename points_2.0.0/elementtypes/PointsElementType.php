<?php
/**
 * Points plugin for Craft CMS
 *
 * Points ElementType
 *
 * @author    Jason Mayo
 * @copyright Copyright (c) 2017 Jason Mayo
 * @link      bymayo.co.uk
 * @package   Points
 * @since     2.0.0
 */

namespace Craft;

class PointsElementType extends BaseElementType
{
    /**
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Points');
    }

    /**
     * @return bool
     */
    public function hasContent()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function hasTitles()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function hasStatuses()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isLocalized()
    {
        return false;
    }

    /**
     * @param string|null $context
     * @return array|false
     */
    public function getSources($context = null)
    {
    }

    /**
     * @inheritDoc IElementType::getAvailableActions()
     *
     * @param string|null $source
     *
     * @return array|null
     */
    public function getAvailableActions($source = null)
    {
    }

    /**
     * @param string|null $source
     * @return array
     */
    public function defineTableAttributes($source = null)
    {
    }

    /**
     * @param BaseElementModel $element
     * @param string $attribute
     * @return string
     */
    public function getTableAttributeHtml(BaseElementModel $element, $attribute)
    {
    }

    /**
     * @return array
     */
    public function defineCriteriaAttributes()
    {
    }

    /**
     * @param DbCommand $query
     * @param ElementCriteriaModel $criteria
     * @return mixed
     */
    public function modifyElementsQuery(DbCommand $query, ElementCriteriaModel $criteria)
    {
   }

    /**
     * @param array $row
     * @return array
     */
    public function populateElementModel($row)
    {
    }

    /**
     * @param BaseElementModel $element
     * @return string
     */
    public function getEditorHtml(BaseElementModel $element)
    {
    }
}