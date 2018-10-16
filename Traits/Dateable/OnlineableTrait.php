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

trait OnlineableTrait
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected $onlineAt;

    /**
     * {@inheritDoc}
     */
    public function setOnlineAt(?DateTimeInterface $datetime = null): self
    {
        $this->onlineAt = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getOnlineAt(): ?DateTimeInterface
    {
        return $this->onlineAt;
    }

    /**
     * {@inheritDoc}
     */
    public function isOnline(): bool
    {
        return DateableTrait::isBefore($this->onlineAt);
    }
}
