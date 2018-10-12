<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Voteable;

interface VoteBonusableInterface
{
    /**
     * Get VoteBonus
     *
     * @return int
     */
    public function getVoteBonus();

    /**
     * Set VoteBonus
     *
     * @param int $voteBonus
     * @return self
     */
    public function setVoteBonus(?int $voteBonus = 0);

    /**
     * Add VoteBonus
     *
     * @param int $voteBonus
     * @return self
     */
    public function voteBonusAdd(?int $voteBonus = 0);

    /**
     * Take Off VoteBonus
     *
     * @param int $voteBonus
     * @return self
     */
    public function voteBonusTakeOff(?int $voteBonus = 0);
}
