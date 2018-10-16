<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Jsonable;

use Doctrine\ORM\Mapping as ORM;

trait JsonableTrait
{
    /**
     * @ORM\Column(type="text")
     */
    protected $json = null;
    
    /**
     * {@inheritDoc}
     */
    public function getJson(): ?string
    {
        return $this->json;
    }

    /**
     * {@inheritDoc}
     */
    public function setJson(?string $json): self
    {
        $this->json = $json;
        return $this;
    }
}
