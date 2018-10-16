<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Countable;

use Doctrine\ORM\Mapping as ORM;

trait CountableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $count = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * {@inheritDoc}
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function countAdd(?int $add = 0): self
    {
        $this->count += $add;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function countTakeOff(?int $remove = 0): self
    {
        $this->count -= $remove;
        return $this;
    }
}
