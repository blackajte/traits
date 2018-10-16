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

interface PathableInterface
{
    /**
     * Get Path
     *
     * @return string
     */
    public function getPath();

    /**
     * Set Path
     *
     * @param string $path
     * @return self
     */
    public function setPath(?string $path);
}
