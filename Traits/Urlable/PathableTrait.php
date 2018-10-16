<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Urlable;

use Doctrine\ORM\Mapping as ORM;

trait PathableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
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
