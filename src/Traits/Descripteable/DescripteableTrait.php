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

trait DescripteableTrait
{
    /**
     * @ORM\Column(type="text")
     */
    protected $description;
    
    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}
