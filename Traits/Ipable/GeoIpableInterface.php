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

interface GeoIpableInterface
{

    /**
     * New Ip
     *
     * @param string $Ip
     * @return self
     */
    public function newIp(?string $ip);

    /**
     * Get City
     *
     * @return string
     */
    public function getCity();

    /**
     * Set City
     *
     * @param string $city
     * @return self
     */
    public function setCity(?string $city);

    /**
     * Get Country
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set Country
     *
     * @param string $country
     * @return self
     */
    public function setCountry(?string $country);

    /**
     * Get Continent
     *
     * @return string
     */
    public function getContinent();
   
    /**
     * Set Continent
     *
     * @param string $continent
     * @return self
     */
    public function setContinent(?string $continent);
}
