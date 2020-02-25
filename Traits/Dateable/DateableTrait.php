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
use Blackajte\TraitsBundle\Traits\Statusable\StatusableTrait as Status;
use DateTimeInterface;
use DateTime;
use Gedmo\Mapping\Annotation as Gedmo;

trait DateableTrait
{
    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $createdAt;
    
    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $updatedAt;
  
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $deletedAt;

    /**
     * {@inheritDoc}
     */
    public static function isBefore(DateTimeInterface $datetime = null): bool
    {
        $now = new DateTime("NOW");
        if (is_null($datetime)) {
            return false;
        }
        if ($now->format('U') >= $datetime->format('U')) {
            return true;
        }
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public static function isToday(DateTimeInterface $datetime = null): bool
    {
        $startDay = new DateTime("NOW");
        $startDay->setTime(0, 0, 0);
        $endDay = new DateTime("NOW");
        $endDay->setTime(23, 59, 59);

        if (is_null($datetime)) {
            return false;
        }
        if (
            $startDay->format('U') <= $datetime->format('U')
            &&
            $datetime->format('U') <= $endDay->format('U')
        ) {
            return true;
        }
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?DateTimeInterface $datetime = null): self
    {
        $this->createdAt = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * {@inheritDoc}
     */
    public static function convertStringToDatetime($string): ?DateTimeInterface
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $string);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?DateTimeInterface $datetime = null): self
    {
        if ($datetime >= $this->createdAt) {
            $this->updatedAt = $datetime;
            return $this;
        }
        throw new OutOfRangeException("date update not good!");
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isUpdated(): bool
    {
        return DateableTrait::isBefore($this->updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt(?DateTimeInterface $datetime = null): self
    {
        if ($datetime >= $this->createdAt) {
            $this->deletedAt = $datetime;
            return $this;
        }
        throw new OutOfRangeException("date delete not good!");
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt(): ?DateTimeInterface
    {
        return $this->deletedAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isDeleted(): bool
    {
        return DateableTrait::isBefore($this->deletedAt);
    }
}
