<?php declare(strict_types=1);
/**
 * @author Areeb Khan
 * @copyright Copyright (c) 2024 Aakhan (https://github.com/khanareeb17)
 * @package Aakhan CheckoutValidations
 */

namespace Aakhan\CheckoutValidations\Plugin;

class LayoutProcessor
{
    /**
     * Contact and Zip Code validations On Checkout Form
     *
     * @param \Magento\Checkout\Block\Checkout\LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array $jsLayout
    ) {
        $steps = &$jsLayout['components']['checkout']['children']['steps']['children'];
        if (isset($steps['billing-step']['children']['payment']['children']['payments-list']['children'])) {
            foreach ($steps['billing-step']['children']['payment']['children']['payments-list']['children'] as $key => $payment) {
                $steps['billing-step']['children']['payment']['children']['payments-list']['children']
                [$key]['children']['form-fields']['children']['telephone']['validation'] =
                [
                    'required-entry' => true,
                    'phoneUS' => true
                ];
                $steps['billing-step']['children']['payment']['children']['payments-list']['children']
                [$key]['children']['form-fields']['children']['postcode']['validation'] =
                [
                    'required-entry' => true,
                    'validate-zip-us' => true
                ];
            }
        }
        if (isset($steps['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children'])) {
            $steps['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children']
            ['telephone']['validation'] =
                [
                    'required-entry' => true,
                    'phoneUS' => true
                ];
            $steps['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children']
            ['postcode']['validation'] =
                [
                    'required-entry' => true,
                    'validate-zip-us' => true
                ];
        }
        return $jsLayout;
    }
}
