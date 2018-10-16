<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Labelable;

use Doctrine\ORM\Mapping as ORM;

trait LabelableTrait
{
    /**
     * @ORM\Column(type="string")
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
