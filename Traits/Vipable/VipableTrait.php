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

use Doctrine\ORM\Mapping as ORM;
use DateTime;
use DateTimeInterface;
use Blackajte\TraitsBundle\Traits\Dateable\DateableTrait;
use InvalidArgumentException;
use OutOfRangeException;

trait VipableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $vipType = 0;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $vipEndAt;
    
    /**
     * {@inheritDoc}
     */
    public function getVipType(): ?int
    {
        return $this->vipType;
    }

    /**
     * {@inheritDoc}
     */
    public function setVipType(?int $vipType = 0): self
    {
        $this->vipType = $vipType;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setVipEndAt(?DateTimeInterface $datetime = null): self
    {
        if ($datetime == null || $datetime >= new DateTime('now')) {
            $this->vipEndAt = $datetime;
            return $this;
        }
        throw new OutOfRangeException("date vipEndAt not good!");
    }

    public function removeVipEndAt(): self
    {
        $this->vipEndAt = null;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getVipEndAt(): ?DateTimeInterface
    {
        return $this->vipEndAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isVipAvailable(): bool
    {
        if ($this->vipType != 0) {
            if (true === DateableTrait::isBefore($this->vipEndAt)) {
                return false;
            }
            return true;
        }
        return false;
    }
}
