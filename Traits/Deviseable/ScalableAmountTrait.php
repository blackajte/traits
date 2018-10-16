<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Deviseable;

use Doctrine\ORM\Mapping as ORM;

trait ScalableAmountTrait
{
    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    protected $scalable = false;
    /**
     * @ORM\Column(type="float")
     */
    protected $scalableAmount = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getScalable(): bool
    {
        return $this->scalable;
    }

    /**
     * {@inheritDoc}
     */
    public function setScalable(?bool $scalable): self
    {
        $this->scalable = $scalable;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function isScalable(): bool
    {
        return $this->scalable;
    }

    /**
     * {@inheritDoc}
     */
    public function getScalableAmount(): ?float
    {
        return $this->scalableAmount;
    }

    /**
     * {@inheritDoc}
     */
    public function setScalableAmount(?float $scalableAmount): self
    {
        if (!empty($scalableAmount)) {
            $this->setScalable(true);
        } else {
            $this->setScalable(false);
        }
        $this->scalableAmount = $scalableAmount;
        return $this;
    }
}
