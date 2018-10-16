<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Mediaable;

interface MediaableInterface
{
    /**
     * Get path
     *
     * @return string
     */
    public function getPath();

    /**
     * Set path
     *
     * @param string $path
     * @return self
     */
    public function setPath(?string $path);
}
