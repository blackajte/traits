<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Contactable;

use Doctrine\ORM\Mapping as ORM;

trait FirstNameableTrait
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $firstName;
    
    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }
}
