<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Descripteable;

use Doctrine\ORM\Mapping as ORM;

trait DescriptionShortableTrait
{
    /**
     * @ORM\Column(type="text")
     */
    protected $descriptionShort;
    
    /**
     * {@inheritDoc}
     */
    public function getDescriptionShort(): ?string
    {
        return $this->descriptionShort;
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionShort(?string $descriptionShort): self
    {
        $this->descriptionShort = $descriptionShort;
        return $this;
    }
}
