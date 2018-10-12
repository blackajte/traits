<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Valueable;

interface ValueableInterface
{
    /**
     * Get Value
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set Value
     *
     * @param mixed $value
     * @return self
     */
    public function setValue($value);
}
