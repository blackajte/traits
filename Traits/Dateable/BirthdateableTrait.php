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

trait BirthdateableTrait
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected $birthdate;

    /**
     * {@inheritDoc}
     */
    public function setBirthdate(?DateTimeInterface $datetime = null): self
    {
        $this->birthdate = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getBirthdate(): ?DateTimeInterface
    {
        return $this->birthdate?:null;
    }

    /**
     * {@inheritDoc}
     */
    public function isBirthdate(): bool
    {
        return DateableTrait::isToday($this->getBirthdate());
    }
}
