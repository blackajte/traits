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

trait VoteBonusableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $voteBonus = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getVoteBonus(): ?int
    {
        return $this->voteBonus?:0;
    }

    /**
     * {@inheritDoc}
     */
    public function setVoteBonus(?int $voteBonus = 0): self
    {
        $this->voteBonus = $voteBonus;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function voteBonusAdd(?int $voteBonus = 0): self
    {
        $this->voteBonus += $voteBonus;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function voteBonusTakeOff(?int $voteBonus = 0): self
    {
        $this->voteBonus -= $voteBonus;
        return $this;
    }
}
