<?php
/**
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

trait LoginableTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $lastLoginAt;

    /**
     * {@inheritDoc}
     */
    public function setLastLoginAt(?DateTimeInterface $datetime = null): self
    {
        $this->lastLoginAt = $datetime;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getLastLoginAt(): ?DateTimeInterface
    {
        return $this->lastLoginAt;
    }
}
