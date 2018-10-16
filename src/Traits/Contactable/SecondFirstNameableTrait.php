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

trait SecondFirstNameableTrait
{
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $secondFirstName;
    
    /**
     * {@inheritDoc}
     */
    public function getSecondFirstName(): ?string
    {
        return $this->secondFirstName;
    }

    /**
     * {@inheritDoc}
     */
    public function setSecondFirstName(?string $secondFirstName): self
    {
        $this->secondFirstName = $secondFirstName;
        return $this;
    }
}
