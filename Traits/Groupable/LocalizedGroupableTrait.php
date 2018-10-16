<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Groupable;

use Doctrine\ORM\Mapping as ORM;

trait LocalizedGroupableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $label;

    
    /**
     * {@inheritDoc}
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
}
