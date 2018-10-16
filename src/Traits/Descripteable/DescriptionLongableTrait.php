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

trait DescriptionLongableTrait
{
    /**
     * @ORM\Column(type="text")
     */
    protected $descriptionLong;
    
    /**
     * {@inheritDoc}
     */
    public function getDescriptionLong(): ?string
    {
        return $this->descriptionLong;
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionLong(?string $descriptionLong): self
    {
        $this->descriptionLong = $descriptionLong;
        return $this;
    }
}
