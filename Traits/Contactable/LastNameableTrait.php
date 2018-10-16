<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Contactable;

use Doctrine\ORM\Mapping as ORM;

trait LastNameableTrait
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $lastName ;
    
    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }
}
