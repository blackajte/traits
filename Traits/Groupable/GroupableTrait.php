<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Groupable;

use Blackajte\TraitsBundle\Traits\Groupable\LocalizedGroupableInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait GroupableTrait
{
    /**
     * @var Collection
     */
    protected $localizedGroups = null;

    /**
     * {@inheritDoc}
     */
    public function localizedGroupAdd(LocalizedGroupableInterface $localizedGroup): self
    {
        if ($this->localizedGroups->contains($localizedGroup) === false) {
            $this->localizedGroups->add($localizedGroup);
        }
        return $this;
    }
    /**
     * {@inheritDoc}
     */
    public function localizedGroupTakeOff(LocalizedGroupableInterface $localizedGroup): self
    {
        $this->localizedGroups->removeElement($localizedGroup);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalizedGroups(): ?Collection
    {
        return $this->localizedGroups?: new ArrayCollection();
    }
    /**
     * {@inheritDoc}
     */
    public function setLocalizedGroups(Collection $localizedGroups): self
    {
        $this->localizedGroups = $localizedGroups;
        return $this;
    }
}
