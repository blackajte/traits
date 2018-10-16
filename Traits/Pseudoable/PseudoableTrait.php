<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Pseudoable;

use Doctrine\ORM\Mapping as ORM;

trait PseudoableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $pseudo;
    
    /**
     * {@inheritDoc}
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * {@inheritDoc}
     */
    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;
        return $this;
    }
}
