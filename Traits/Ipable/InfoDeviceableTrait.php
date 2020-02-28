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
use DeviceDetector\DeviceDetector;
use Exception;
use UserAgentParser\Exception\NoResultFoundException;

trait InfoDeviceableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $httpUserAgent = null;

    /**
     * @var string
     */
    protected $browser;

    /**
     * @var string
     */
    protected $os;

    /**
     * @var string
     */
    protected $device;
    
    /**
     * {@inheritDoc}
     */
    public function autoInfo(): self
    {
        try {
            $provider = new DeviceDetector($this->getHttpUserAgent());
            $provider->parse();
            if ($provider->isBot()) {
                    //@todo need to save info bot
                return $this;
            } 
            $this->setBrowser($provider->getBrandName());
            $this->setOs($provider->getOs());
            $this->setDevice($provider->getDeviceName());
            return $this;
        } catch (Exception $e) {
            $this->setBrowser(array('not found'));
            $this->setOs(array('not found'));
            $this->setDevice(array('not found'));
            return $this;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getHttpUserAgent(): ?string
    {
        return $this->httpUserAgent;
    }

    /**
     * {@inheritDoc}
     */
    public function setHttpUserAgent(?string $httpUserAgent): self
    {
        $this->httpUserAgent = $httpUserAgent;
        $this->autoInfo();
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getBrowser(): ?string
    {
        return $this->browser;
    }

    /**
     * {@inheritDoc}
     */
    public function setBrowser(string $browser): self
    {
        $this->browser = $browser;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getOs(): ?string
    {
        return $this->os;
    }

    /**
     * {@inheritDoc}
     */
    public function setOs(string $os): self
    {
        $this->os = $os;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDevice(): ?string
    {
        return $this->device;
    }

    /**
     * {@inheritDoc}
     */
    public function setDevice(string $device): self
    {
        $this->device = $device;
        return $this;
    }
}
