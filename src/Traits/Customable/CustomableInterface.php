<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Customable;

interface CustomableInterface
{
    /**
     * Get Custom
     *
     * @return string
     */
    public function getCustom();

    /**
     * Set Custom
     *
     * @param string $name
     * @return self
     */
    public function setCustom(?string $name);
}
