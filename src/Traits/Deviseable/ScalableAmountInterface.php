<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Deviseable;

interface ScalableAmountInterface
{
    /**
     * is Scalable
     *
     * @return bool
     */
    public function isScalable();

    /**
     * Get Scalable
     *
     * @return bool
     */
    public function getScalable();

    /**
     * Set Scalable
     *
     * @param bool $scalable
     * @return self
     */
    public function setScalable(?bool $scalable);

    /**
     * Get ScalableAmount
     *
     * @return float
     */
    public function getScalableAmount();

    /**
     * Set ScalableAmount
     *
     * @param float $scalableAmount
     * @return self
     */
    public function setScalableAmount(?float $scalableAmount);
}
