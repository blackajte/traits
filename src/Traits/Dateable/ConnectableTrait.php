<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Dateable;

use Doctrine\ORM\Mapping as ORM;
use OutOfRangeException;
use DateTimeInterface;

trait ConnectableTrait
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected $connectAt;

    /**
     * {@inheritDoc}
     */
    public function setConnectAt(?DateTimeInterface $datetime = null): self
    {
        $this->connectAt = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getConnectAt(): ?DateTimeInterface
    {
        return $this->connectAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isConnected(): bool
    {
        return DateableTrait::isToday($this->connectAt);
    }
}
