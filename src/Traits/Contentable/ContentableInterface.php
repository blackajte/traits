<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Contentable;

interface ContentableInterface
{
    /**
     * Get Content
     *
     * @return string
     */
    public function getContent();

    /**
     * Set Content
     *
     * @param string $content
     * @return self
     */
    public function setContent(?string $content);
}
