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

use Doctrine\ORM\Mapping as ORM;

trait VoteableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $vote = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getVote(): ?int
    {
        return $this->vote;
    }

    /**
     * {@inheritDoc}
     */
    public function setVote(?int $vote = 0): self
    {
        $this->vote = $vote;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function voteAdd(?int $vote = 0): self
    {
        $this->vote += $vote;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function voteTakeOff(?int $vote = 0): self
    {
        $this->vote -= $vote;
        return $this;
    }
}
