<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Contentable;

use Doctrine\ORM\Mapping as ORM;

trait ContentableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $content;
    
    /**
     * {@inheritDoc}
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }
}
