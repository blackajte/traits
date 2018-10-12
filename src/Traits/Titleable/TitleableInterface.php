<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Titleable;

interface TitleableInterface
{
    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set Title
     *
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title);
}
