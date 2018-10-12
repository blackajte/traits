<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Levelable;

use Doctrine\ORM\Mapping as ORM;

trait LevelableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $level = 0;

    /**
     * {@inheritDoc}
     */
    public function getLevel(): ?int
    {
        return (int)$this->level;
    }

    /**
     * {@inheritDoc}
     */
    public function setLevel(?int $level = 0): self
    {
        $this->level = $level;
        return $this;
    }
}
