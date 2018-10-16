<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Levelable;

interface LevelableInterface
{
    /**
     * Get Level
     *
     * @return int | null
     */
    public function getLevel();

    /**
     * Set Level
     *
     * @param int $level
     * @return self
     */
    public function setLevel(?int $level);
}
