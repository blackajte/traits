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

use Traits\Groupable\LocaleInterface;

interface LocalizeableInterface
{
    /**
     * get localize
     *
     * @param LocaleInterface $locale
     * @return localizedGroups
     */
    public function localize(LocaleInterface $locale);
}
