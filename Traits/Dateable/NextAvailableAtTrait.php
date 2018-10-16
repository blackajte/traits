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

trait NextAvailableAtTrait
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected $nextAvailableAt;

    /**
     * {@inheritDoc}
     */
    public function setNextAvailableAt(?DateTimeInterface $datetime = null): self
    {
        $this->nextAvailableAt = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getNextAvailableAt(): ?DateTimeInterface
    {
        return $this->nextAvailableAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isAvailable(): bool
    {
        return DateableTrait::isBefore($this->nextAvailableAt);
    }
}
