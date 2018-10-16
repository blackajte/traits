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

interface OutableInterface
{
    /**
     * Get Out
     *
     * @return int
     */
    public function getOut();

    /**
     * Set Out
     *
     * @param int $out
     * @return self
     */
    public function setOut(?int $out);
}
