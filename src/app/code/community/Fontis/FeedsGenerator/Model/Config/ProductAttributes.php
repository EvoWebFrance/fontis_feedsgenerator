<?php
/**
 * Fontis FeedsGenerator Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Fontis
 * @package    Fontis_FeedsGenerator
 * @author     Peter Spiller
 * @copyright  Copyright (c) 2014 Fontis Pty. Ltd. (http://www.fontis.com.au)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * List all available product attributes
 *
 * @category   Fontis
 * @package    Fontis_FeedsGenerator
 */
class Fontis_FeedsGenerator_Model_Config_ProductAttributes
{
    public function toOptionArray()
    {
        $eavConfig = Mage::getModel('eav/config');
        $attributes = $eavConfig->getEntityAttributeCodes('catalog_product');

        $options = array();
        $options[0] = 'No Attribute';

        foreach ($attributes as $code) {
            $attribute = $eavConfig->getAttribute('catalog_product', $code);

            if ($code != '') {
                $options[$code] = $code;
            }
        }

        return $options;
    }
}
