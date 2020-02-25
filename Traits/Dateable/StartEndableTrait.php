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

trait StartEndableTrait
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected $startAt;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $endAt;

    /**
     * {@inheritDoc}
     */
    public function setStartAt(?DateTimeInterface $datetime = null): self
    {
        $this->startAt = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getStartAt(): ?DateTimeInterface
    {
        return $this->startAt;
    }

    /**
     * {@inheritDoc}
     */
    public function setEndAt(?DateTimeInterface $datetime = null): self
    {
        if ($datetime >= $this->startAt) {
            $this->endAt = $datetime;
            return $this;
        }
        throw new OutOfRangeException("date end not good!");
    }

    /**
     * {@inheritDoc}
     */
    public function getEndAt(): ?DateTimeInterface
    {
        return $this->endAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isEnd(): bool
    {
        return DateableTrait::isBefore($this->endAt);
    }
}
