<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Altable;

interface AltableInterface
{
    /**
     * Get Alt
     *
     * @return string
     */
    public function getAlt();

    /**
     * Set Alt
     *
     * @param string $alt
     * @return self
     */
    public function setAlt(?string $alt);
}
