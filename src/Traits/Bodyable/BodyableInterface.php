<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Bodyable;

interface BodyableInterface
{
    /**
     * Get Body
     *
     * @return string
     */
    public function getBody();

    /**
     * Set Body
     *
     * @param string $body
     * @return self
     */
    public function setBody(?string $body);
}
