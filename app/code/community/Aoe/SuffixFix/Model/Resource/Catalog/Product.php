<?php
/**
 * Sitemap resource product collection model
 */
class Aoe_SuffixFix_Model_Resource_Catalog_Product extends Mage_Sitemap_Model_Resource_Catalog_Product
{
    /**
     * Retrieve entity url
     *
     * @param array $row
     * @param Varien_Object $entity
     * @return string
     */
    protected function _getEntityUrl($row, $entity)
    {
        $suffix = Mage::helper('catalog/product')->getProductUrlSuffix();
        if (!$suffix) {
            return parent::_getEntityUrl($row, $entity);
        }

        if (!empty($row['request_path'])) {
            $url = $row['request_path'];
            // Add suffix if not already present
            if (!preg_match('%\.[^/]+$%', $url)) {
                $url .= $suffix;
            }
        } else {
            // Don't append suffix to default URL paths
            $url = 'catalog/product/view/id/' . $entity->getId();
        }
        return $url;
    }
}
