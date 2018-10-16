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

interface PseudoableInterface
{
    /**
     * Get Pseudo
     *
     * @return string
     */
    public function getPseudo();

    /**
     * Set Pseudo
     *
     * @param string $pseudo
     * @return self
     */
    public function setPseudo(?string $pseudo);
}
