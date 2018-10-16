<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Deviseable;

interface MontantableInterface
{
    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant();

    /**
     * Set montant
     *
     * @param float $montant
     * @return self
     */
    public function setMontant(?float $montant);
}
