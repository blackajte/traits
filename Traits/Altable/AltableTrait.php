<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Altable;

use Doctrine\ORM\Mapping as ORM;

trait AltableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $alt = null;
    
    /**
     * {@inheritDoc}
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    /**
     * {@inheritDoc}
     */
    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }
}
