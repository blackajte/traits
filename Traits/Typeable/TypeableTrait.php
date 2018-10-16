<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Typeable;

use Doctrine\ORM\Mapping as ORM;

trait TypeableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $type;
    
    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * {@inheritDoc}
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
