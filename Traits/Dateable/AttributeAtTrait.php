<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Dateable;

use Doctrine\ORM\Mapping as ORM;
use OutOfRangeException;
use DateTimeInterface;

trait AttributeAtTrait
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected $attributeAt;

    /**
     * {@inheritDoc}
     */
    public function setAttributeAt(?DateTimeInterface $datetime = null): self
    {
        $this->attributeAt = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getAttributeAt(): ?DateTimeInterface
    {
        return $this->attributeAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isAttributeAt() : bool
    {
        return DateableTrait::isBefore($this->attributeAt);
    }
}
