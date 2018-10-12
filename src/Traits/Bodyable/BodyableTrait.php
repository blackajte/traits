<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Bodyable;

use Doctrine\ORM\Mapping as ORM;

trait BodyableTrait
{
    /**
     * @ORM\Column(type="text")
     */
    protected $body = null;
    
    /**
     * {@inheritDoc}
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * {@inheritDoc}
     */
    public function setBody(?string $body): self
    {
        $this->body = $body;
        return $this;
    }
}
