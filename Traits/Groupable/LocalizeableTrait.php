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

use Doctrine\ORM\Mapping as ORM;
use Blackajte\TraitsBundle\Traits\Groupable\LocaleInterface;
use Doctrine\Common\Collections\ArrayCollection;

trait LocalizeableTrait
{
    /**
     * get localize
     *
     * @param LocaleInterface $locale
     * @return localizedGroups
     */
    public function localize(LocaleInterface $locale)
    {
        foreach ($this->getLocalizedGroups() as $l10nGroup) {
            if ($locale->getId() == $l10nGroup->getLocale()->getId()) {
                return $l10nGroup;
            }
        }

        return null;
    }
}
