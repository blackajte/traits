<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Dateable;

use DateTimeInterface;

interface OnlineableInterface
{
    /**
     * get OnlineAt
     *
     * @return DateTimeInterface
     */
    public function getOnlineAt();
    
    /**
     * Set OnlineAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setOnlineAt(?DateTimeInterface $datetime = null);

    /**
     * test if is Online
     *
     * @return bool
     */
    public function isOnline();
}
