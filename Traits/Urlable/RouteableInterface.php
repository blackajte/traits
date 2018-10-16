<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Urlable;

interface RouteableInterface
{
    /**
     * Get Route
     *
     * @return string
     */
    public function getRoute();

    /**
     * Set Route
     *
     * @param string $route
     * @return self
     */
    public function setRoute(?string $route);
}
