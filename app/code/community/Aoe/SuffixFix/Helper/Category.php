<?php
/**
 * Catalog category helper
 *
 * @author Fabrizio Branca
 */
class Aoe_SuffixFix_Helper_Category extends Mage_Catalog_Helper_Category
{

    /**
     * Retrieve category rewrite sufix for store
     *
     * @param int $storeId
     * @return string
     */
    public function getCategoryUrlSuffix($storeId = null)
    {
        if (is_null($storeId)) {
            $storeId = Mage::app()->getStore()->getId();
        }

        if (!isset($this->_categoryUrlSuffix[$storeId])) {
            $suffix = Mage::getStoreConfig(self::XML_PATH_CATEGORY_URL_SUFFIX, $storeId);
            if ($suffix) {
                $suffix =  '.'.ltrim($suffix, '.');
            }
            $this->_categoryUrlSuffix[$storeId] = $suffix;
        }
        return $this->_categoryUrlSuffix[$storeId];
    }

}
