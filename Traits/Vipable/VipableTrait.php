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
    CONST VIP_NO = 0;
    CONST VIP_1 = 1;
    CONST VIP_2 = 2;
    CONST VIP_3 = 3;

    public static function getAvailableVipType() : ?array
    {
        $return = [
            'VIP_NO' => self::VIP_NO,
            'VIP_1'  => self::VIP_1,
            'VIP_2'  => self::VIP_2,
            'VIP_3'  => self::VIP_3
        ];
        return $return;
    }

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
        if (in_array($vipType, $this::getAvailableVipType())) {
            $this->vipType = $vipType;
            return $this;
        } else {
            throw new InvalidArgumentException("VipType not available!");
        }
    }

    /**
     * {@inheritDoc}
     */
    public function setVipEndAt(?DateTimeInterface $datetime = null): self
    {
        if ($datetime == null || $datetime >= new DateTime('now')) {
            $this->vipEndAt = $datetime;
            return $this;
        } else {
            throw new OutOfRangeException("date vipEndAt not good!");
        }
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
        } else {
            return false;
        }
    }
}
