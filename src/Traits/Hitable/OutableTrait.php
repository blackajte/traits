<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Hitable;

use Doctrine\ORM\Mapping as ORM;

trait OutableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $out = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getOut(): ?int
    {
        return $this->out;
    }

    /**
     * {@inheritDoc}
     */
    public function setOut(?int $out): self
    {
        $this->out = $out;
        return $this;
    }
}
