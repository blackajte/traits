<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Mediaable;

use Doctrine\ORM\Mapping as ORM;

trait MediaableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $path;

    /**
     * {@inheritDoc}
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * {@inheritDoc}
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }
}
