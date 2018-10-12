<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Urlable;

interface LinkableInterface
{
    /**
     * Get Link
     *
     * @return string
     */
    public function getLink();

    /**
     * Set Link
     *
     * @param string $link
     * @return self
     */
    public function setLink(?string $link);
}
