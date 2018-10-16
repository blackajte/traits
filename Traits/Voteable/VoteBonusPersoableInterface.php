<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Voteable;

interface VoteBonusPersoableInterface
{
    /**
     * Get VoteBonusPerso
     *
     * @return int
     */
    public function getVoteBonusPerso();

    /**
     * Set VoteBonusPerso
     *
     * @param int $voteBonusPerso
     * @return self
     */
    public function setVoteBonusPerso(?int $voteBonusPerso = 0);

    /**
     * Add VoteBonusPerso
     *
     * @param int $voteBonusPerso
     * @return self
     */
    public function voteBonusPersoAdd(?int $voteBonusPerso = 0);

    /**
     * Take Off VoteBonusPerso
     *
     * @param int $voteBonusPerso
     * @return self
     */
    public function voteBonusPersoTakeOff(?int $voteBonusPerso = 0);
}
