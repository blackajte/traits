<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Skuable;

interface SKUableInterface
{
    /**
     * Get Sku
     *
     * @return string
     */
    public function getSku();

    /**
     * Set Sku
     *
     * @param string $sku
     * @return self
     */
    public function setSku(?string $sku);

    /**
     * Generate Sku
     *
     * @return self
     */
    public function generateSku();
}
