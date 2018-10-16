<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Deviseable;

use Doctrine\ORM\Mapping as ORM;

trait MontantableTrait
{
    /**
     * @ORM\Column(type="float")
     */
    protected $montant = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getMontant(): float
    {
        return $this->montant;
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant(?float $montant): self
    {
        $this->montant = $montant;
        return $this;
    }
}
