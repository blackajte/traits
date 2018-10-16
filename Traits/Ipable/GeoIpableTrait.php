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

use Doctrine\ORM\Mapping as ORM;

trait GeoIpableTrait
{
    /**
     * @var string
     */
    use \Blackajte\TraitsBundle\Traits\Ipable\IpableTrait;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $city;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $country;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $continent;
    

    /**
     * {@inheritDoc}
     */
    public function newIp(?string $ip): self
    {
        $this->setIp($ip);
        $geoPlugin_array = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip));
        if (isset($geoPlugin_array['geoplugin_city'])) {
            $this->setCity($geoPlugin_array['geoplugin_city']);
        }
        if (isset($geoPlugin_array['geoplugin_countryCode'])) {
            $this->setCountry($geoPlugin_array['geoplugin_countryCode']);
        }
        if (isset($geoPlugin_array['geoplugin_continentCode'])) {
            $this->setContinent($geoPlugin_array['geoplugin_continentCode']);
        }
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getContinent(): ?string
    {
        return $this->continent;
    }

    /**
     * {@inheritDoc}
     */
    public function setContinent(?string $continent): self
    {
        $this->continent = $continent;
        return $this;
    }
}
