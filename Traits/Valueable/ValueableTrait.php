<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Valueable;

use Doctrine\ORM\Mapping as ORM;

trait ValueableTrait
{
    /**
     * @ORM\Column(type="string", length=1000)
     */
    protected $value;
    
    /**
     * {@inheritDoc}
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }
}
