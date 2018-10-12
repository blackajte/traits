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
     * @return array
     */
    public function getBrowser();

    /**
     * Set Browser
     *
     * @param array $browser
     * @return self
     */
    public function setBrowser(array $browser);

    /**
     * Get Os
     *
     * @return array
     */
    public function getOs();

    /**
     * Set Os
     *
     * @param array $os
     * @return self
     */
    public function setOs(array $os);

    /**
     * Get Device
     *
     * @return array
     */
    public function getDevice();

    /**
     * Set Device
     *
     * @param array $device
     * @return self
     */
    public function setDevice(array $device);
}
