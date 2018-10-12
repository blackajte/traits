<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Skuable;

use Doctrine\ORM\Mapping as ORM;

trait SKUableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $sku;

    /**
     * {@inheritDoc}
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * {@inheritDoc}
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function generateSku(): self
    {
        $this->sku = uniqid();
        return $this;
    }
}
