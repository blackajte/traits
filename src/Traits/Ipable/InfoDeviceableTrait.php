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

use Doctrine\ORM\Mapping as ORM;
use UserAgentParser\Provider\PiwikDeviceDetector;
use Exception;
use UserAgentParser\Exception\NoResultFoundException;

trait InfoDeviceableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $httpUserAgent = null;
    /**
     * array
     */
    protected $browser;
    /**
     * array
     */
    protected $os;
    /**
     * array
     */
    protected $device;
    
    /**
     * {@inheritDoc}
     */
    public function autoInfo(): self
    {
        try {
            $provider = new PiwikDeviceDetector();
            $info = $provider->parse($this->getHttpUserAgent());
            if (!is_null($info)) {
                if ($info->isBot()) {
                    //TODO
                } else {
                    $this->setBrowser($info->getBrowser()->toArray());
                    $this->setOs($info->getOperatingSystem()->toArray());
                    $this->setDevice($info->getDevice()->toArray());
                }
            }
            return $this;
        } catch (NoResultFoundException $e) {
            $this->setBrowser(array('not found'));
            $this->setOs(array('not found'));
            $this->setDevice(array('not found'));
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
    public function getBrowser(): ?array
    {
        return $this->browser;
    }

    /**
     * {@inheritDoc}
     */
    public function setBrowser(array $browser): self
    {
        $this->browser = $browser;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getOs(): ?array
    {
        return $this->os;
    }

    /**
     * {@inheritDoc}
     */
    public function setOs(array $os): self
    {
        $this->os = $os;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDevice(): ?array
    {
        return $this->device;
    }

    /**
     * {@inheritDoc}
     */
    public function setDevice(array $device): self
    {
        $this->device = $device;
        return $this;
    }
}
