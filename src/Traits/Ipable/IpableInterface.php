<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Ipable;

interface IpableInterface
{
    /**
     * Get Ip
     *
     * @return string
     */
    public function getIp();

    /**
     * Set Ip
     *
     * @param string $Ip
     * @return self
     */
    public function setIp(?string $ip);
}
