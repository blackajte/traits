<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Ipable;

interface InfoDeviceableInterface
{

    /**
     * Set All InfoDevice
     *
     * @return self
     */
    public function autoInfo();

    /**
     * Get HttpUserAgent
     *
     * @return string
     */
    public function getHttpUserAgent();

    /**
     * Set HttpUserAgent
     *
     * @param string $httpUserAgent
     * @return self
     */
    public function setHttpUserAgent(?string $httpUserAgent);

    /**
     * Get Browser
     *
     * @return string
     */
    public function getBrowser();

    /**
     * Set Browser
     *
     * @param string $browser
     * @return self
     */
    public function setBrowser(string $browser);

    /**
     * Get Os
     *
     * @return string
     */
    public function getOs();

    /**
     * Set Os
     *
     * @param string $os
     * @return self
     */
    public function setOs(string $os);

    /**
     * Get Device
     *
     * @return string
     */
    public function getDevice();

    /**
     * Set Device
     *
     * @param string $device
     * @return self
     */
    public function setDevice(string $device);
}
