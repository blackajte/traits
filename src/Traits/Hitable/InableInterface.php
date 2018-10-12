<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Hitable;

interface InableInterface
{
    /**
     * Get In
     *
     * @return int
     */
    public function getIn();

    /**
     * Set In
     *
     * @param int $in
     * @return self
     */
    public function setIn(?int $in);
}
