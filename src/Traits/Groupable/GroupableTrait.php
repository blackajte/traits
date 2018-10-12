<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Groupable;

use Traits\Groupable\LocalizedGroupableInterface;
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
    public function localizedGroupAdd(LocalizedGroupableInterface $LocalizedGroup): self
    {
        if ($this->localizedGroups->contains($LocalizedGroup) === false) {
            $this->localizedGroups->add($LocalizedGroup);
        }
        return $this;
    }
    /**
     * {@inheritDoc}
     */
    public function localizedGroupTakeOff(LocalizedGroupableInterface $LocalizedGroup): self
    {
        $this->localizedGroups->removeElement($LocalizedGroup);
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
