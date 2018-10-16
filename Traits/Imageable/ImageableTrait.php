<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Imageable;

use Doctrine\ORM\Mapping as ORM;

trait ImageableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $image;

    /**
     * {@inheritDoc} 
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }
}
