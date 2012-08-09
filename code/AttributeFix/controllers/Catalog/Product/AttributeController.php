<?php

require_once 'Mage/Adminhtml/controllers/Catalog/Product/AttributeController.php';
class CGD_AttributeFix_Catalog_Product_AttributeController extends Mage_Adminhtml_Catalog_Product_AttributeController
{

    /**
     * Filter post data
     *
     * @param array $data
     * @return array
     */
    protected function _filterPostData($data)
    {
        if ($data) {
            /** @var $helperCatalog Mage_Catalog_Helper_Data */
            $helperCatalog = Mage::helper('catalog');
            //labels
            foreach ($data['frontend_label'] as & $value) {
                if ($value) {
                    $value = $helperCatalog->escapeHtml($value);
                }
            }
            //options
            if (!empty($data['option']['value'])) {
                foreach ($data['option']['value'] as &$options) {
                    foreach ($options as &$label) {
                        $label = $helperCatalog->stripTags($label);
                    }
                }
            }
            //default value
            if (!empty($data['default_value'])) {
                $data['default_value'] = $helperCatalog->escapeHtml($data['default_value']);
            }
            if (!empty($data['default_value_text'])) {
                $data['default_value_text'] = $helperCatalog->escapeHtml($data['default_value_text']);
            }
            if (!empty($data['default_value_textarea'])) {
                $data['default_value_textarea'] = $helperCatalog->escapeHtml($data['default_value_textarea']);
            }
        }
        return $data;
    }
}
