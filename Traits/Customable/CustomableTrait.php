<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Customable;

use Doctrine\ORM\Mapping as ORM;

trait CustomableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $custom;
        
    /**
     * {@inheritDoc}
     */
    public function getCustom(): ?string
    {
        return $this->custom;
    }

    /**
     * {@inheritDoc}
     */
    public function setCustom(?string $custom): self
    {
        $this->custom = $custom;
        return $this;
    }

}
