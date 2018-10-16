<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Vipable;

use DateTimeInterface;

interface VipableInterface
{
    /**
     * get listing VipType
     *
     * @return array
     */
    public static function getAvailableVipType();
    
    /**
     * Get vipType
     *
     * @return int
     */
    public function getVipType();
    
    /**
     * Set vipType
     *
     * @param int $vipType
     * @return this
     */
    public function setVipType(?int $vipType = 0);

    /**
     * Set vipEndAt
     *
     * @param DateTimeInterface $datetime
     * @return this
     */
    public function setVipEndAt(?DateTimeInterface $datetime = null);

    /**
     * Get vipEndAt
     *
     * @return DateTimeInterface|null
     */
    public function getVipEndAt();

    /**
     * test if vip is already available
     *
     * @return boolean
     */
    public function isVipAvailable();
}
