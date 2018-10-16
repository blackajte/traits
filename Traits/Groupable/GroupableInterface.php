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

interface GroupableInterface
{
    /**
     * add new LocalizedGroup to LocalizedGroups
     *
     * @param LocalizedGroupableInterface $LocalizedGroup
     * @return self
     */
    public function localizedGroupAdd(LocalizedGroupableInterface $LocalizedGroup);

    /**
     * Remove a LocalizedGroup to LocalizedGroups
     *
     * @param LocalizedGroupableInterface $LocalizedGroup
     * @return self
     */
    public function localizedGroupTakeOff(LocalizedGroupableInterface $LocalizedGroup);

    /**
     * get LocalizedGroups
     *
     * @return Collection
     */
    public function getLocalizedGroups();

    /**
     * Set LocalizedGroups
     *
     * @param Collection $localizedGroups
     * @return self
     */
    public function setLocalizedGroups(Collection $localizedGroups);
}
