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

interface VoteableInterface
{
    /**
     * Get Vote
     *
     * @return int
     */
    public function getVote();

    /**
     * Set Vote
     *
     * @param int $vote
     * @return self
     */
    public function setVote(?int $vote = 0);

    /**
     * Add Vote
     *
     * @param int $vote
     * @return self
     */
    public function voteAdd(?int $vote = 0);

    /**
     * Take Off Vote
     *
     * @param int $vote
     * @return self
     */
    public function voteTakeOff(?int $vote = 0);
}
