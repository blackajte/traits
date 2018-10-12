<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Attributeable;

use Doctrine\ORM\Mapping as ORM;
use Traits\Dateable\DateableTrait;
use DateTimeInterface;
use DateTime;

trait AttributeableTrait
{
    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    protected $attribute;
    /**
     * @var string
     */
    use \Traits\Dateable\AttributeAtTrait;
    
    /**
     * {@inheritDoc}
     */
    public function getAttribute(): ?int
    {
        return $this->attribute;
    }

    /**
     * {@inheritDoc}
     */
    public function setAttribute(?int $attribute): self
    {
        $this->attribute = $attribute;
        if ($this->attribute == 1) {
            $this->setAttributeAt(new DateTime());
        }
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function isAttribute(): bool
    {
        if ($this->getAttribute() == 1) {
            return DateableTrait::isBefore($this->getAttributeAt());
        }
        return false;
    }
}
