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

interface ConnectableInterface
{
    /**
     * get ConnectAt
     *
     * @return DateTimeInterface
     */
    public function getConnectAt();
    
    /**
     * Set ConnectAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setConnectAt(?DateTimeInterface $datetime = null);

    /**
     * test if is Connect
     *
     * @return bool
     */
    public function isConnected();
}
