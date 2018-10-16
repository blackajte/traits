<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Timeable;

use Doctrine\ORM\Mapping as ORM;

trait TimeableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $time = 0;

    /**
     * {@inheritDoc}
     */
    public function setTime(?int $time): self
    {
        $this->time = $time;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getTime(): ?int
    {
        return $this->time;
    }
}
