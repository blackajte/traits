<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Emailable;

use Doctrine\ORM\Mapping as ORM;

trait EmailableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $email;
    
    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
}
