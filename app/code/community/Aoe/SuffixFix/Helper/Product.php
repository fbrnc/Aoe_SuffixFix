<?php
/**
 * Catalog category helper
 *
 * @author Fabrizio Branca
 */
class Aoe_SuffixFix_Helper_Product extends Mage_Catalog_Helper_Product
{

    /**
     * Retrieve product rewrite sufix for store
     *
     * @param int $storeId
     * @return string
     */
    public function getProductUrlSuffix($storeId = null)
    {
        if (is_null($storeId)) {
            $storeId = Mage::app()->getStore()->getId();
        }

        if (!isset($this->_productUrlSuffix[$storeId])) {
            $suffix = Mage::getStoreConfig(self::XML_PATH_PRODUCT_URL_SUFFIX, $storeId);
            if ($suffix) {
                $suffix =  '.'.ltrim($suffix, '.');
            }
            $this->_productUrlSuffix[$storeId] = $suffix;
        }
        return $this->_productUrlSuffix[$storeId];
    }

}
