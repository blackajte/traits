<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Phoneable;

use Doctrine\ORM\Mapping as ORM;

trait PhoneableTrait
{
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $phone;
    
    /**
     * {@inheritDoc}
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
}
