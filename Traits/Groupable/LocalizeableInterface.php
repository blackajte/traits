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

use Blackajte\TraitsBundle\Traits\Groupable\LocaleInterface;
use Blackajte\TraitsBundle\Traits\Groupable\LocalizedGroupableInterface;

interface LocalizeableInterface
{
    /**
     * get localize
     *
     * @param LocaleInterface $locale
     * @return LocalizedGroupableInterface|null
     */
    public function localize(LocaleInterface $locale);
}
