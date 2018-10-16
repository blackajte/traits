<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Pointable;

use Doctrine\ORM\Mapping as ORM;

trait PointableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $point = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getPoint(): ?int
    {
        return $this->point;
    }

    /**
     * {@inheritDoc}
     */
    public function setPoint(?int $point): self
    {
        $this->point = $point;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function addPoint(?int $add = 0): self
    {
        $this->point += $add;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function removePoint(?int $remove = 0): self
    {
        $this->point -= $remove;
        return $this;
    }
}
