<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Attributeable;

use Doctrine\ORM\Mapping as ORM;
use Blackajte\TraitsBundle\Traits\Dateable\DateableTrait;
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
    use \Blackajte\TraitsBundle\Traits\Dateable\AttributeAtTrait;
    
    /**
     * {@inheritDoc}
     */
    public function getAttribute(): ?bool
    {
        return $this->attribute;
    }

    /**
     * {@inheritDoc}
     */
    public function setAttribute(?bool $attribute): self
    {
        $this->attribute = $attribute;
        if ($this->attribute === true) {
            $this->setAttributeAt(new DateTime());
        }
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function isAttribute(): bool
    {
        if ($this->getAttribute() == true) {
            return DateableTrait::isBefore($this->getAttributeAt());
        }
        return false;
    }
}
