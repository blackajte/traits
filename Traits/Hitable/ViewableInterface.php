<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Hitable;

interface ViewableInterface
{
    /**
     * Get View
     *
     * @return int
     */
    public function getView();

    /**
     * Set View
     *
     * @param int $View
     * @return self
     */
    public function setView(?int $View);
}
