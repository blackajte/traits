<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Booleanable;

interface FollowableInterface
{
    /**
     * Get Follow
     *
     * @return bool
     */
    public function getFollow();

    /**
     * Set Follow
     *
     * @param bool $follow
     * @return self
     */
    public function setFollow(?bool $follow = false);
}
