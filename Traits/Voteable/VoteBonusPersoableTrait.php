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

use Doctrine\ORM\Mapping as ORM;

trait VoteBonusPersoableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $voteBonusPerso = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getVoteBonusPerso(): ?int
    {
        return $this->voteBonusPerso?:0;
    }

    /**
     * {@inheritDoc}
     */
    public function setVoteBonusPerso(?int $voteBonusPerso = 0): self
    {
        $this->voteBonusPerso = $voteBonusPerso;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function voteBonusPersoAdd(?int $voteBonusPerso = 0): self
    {
        $this->voteBonusPerso += $voteBonusPerso;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function voteBonusPersoTakeOff(?int $voteBonusPerso = 0): self
    {
        $this->voteBonusPerso -= $voteBonusPerso;
        return $this;
    }
}
