<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Positionable;

use Doctrine\ORM\Mapping as ORM;

trait PositionableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $position = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
}
