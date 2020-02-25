<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Vipable;

use DateTimeInterface;

interface VipableInterface
{    
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
     * @return self
     */
    public function setVipType(?int $vipType = 0);

    /**
     * Set vipEndAt
     *
     * @param DateTimeInterface $datetime
     * @return self
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
