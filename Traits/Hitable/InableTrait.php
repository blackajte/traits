<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Hitable;

use Doctrine\ORM\Mapping as ORM;

trait InableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $in = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getIn(): ?int
    {
        return $this->in;
    }

    /**
     * {@inheritDoc}
     */
    public function setIn(?int $in): self
    {
        $this->in = $in;
        return $this;
    }
}
