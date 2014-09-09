<?php
/**
 * Catalog Helper
 *
 * @category    Enterprise
 * @package     Enterprise_Catalog
 * @author Fabrizio Branca
 * @since 2013-05-01
 */
class Aoe_SuffixFix_Helper_EnterpriseCatalogHelperData extends Enterprise_Catalog_Helper_Data
{

    /**
     * Retrieve category request path
     *
     * @param string $requestPath
     * @param int $storeId
     * @return string
     */
    public function getCategoryRequestPath($requestPath, $storeId)
    {
        if (empty($requestPath)) {
            return '';
        }
        /** @var $helper Mage_Catalog_Helper_Category */
        $helper    = $this->_factory->getHelper('catalog/category');
        $urlSuffix = $helper->getCategoryUrlSuffix($storeId);
        if ($urlSuffix) {
            // $requestPath .= '.' . $urlSuffix;
            $requestPath .= $urlSuffix;
        }
        return $requestPath;
    }

    /**
     * Retrieve product request path
     *
     * @param string $requestPath
     * @param int $storeId
     * @param null $categoryId
     * @return string
     */
    public function getProductRequestPath($requestPath, $storeId, $categoryId = null)
    {
        if (empty($requestPath)) {
            return '';
        }
        /** @var $helper Mage_Catalog_Helper_Product */
        $helper    = $this->_factory->getHelper('catalog/product');
        $urlSuffix = $helper->getProductUrlSuffix($storeId);
        if ($urlSuffix) {
            // $requestPath .= '.' . $urlSuffix;
            $requestPath .= $urlSuffix;
        }
        return $requestPath;
    }
}
