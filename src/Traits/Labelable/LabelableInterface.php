<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Labelable;

interface LabelableInterface
{
    /**
     * Get Label
     *
     * @return string | null
     */
    public function getLabel();

    /**
     * Set Label
     *
     * @param string $label
     * @return self
     */
    public function setLabel(?string $label);
}
