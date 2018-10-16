<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Pointable;

interface PointableInterface
{
    /**
     * Get point
     *
     * @return int
     */
    public function getPoint();

    /**
     * Set point
     *
     * @param int $point
     * @return self
     */
    public function setPoint(?int $point);

    /**
     * add point
     *
     * @param int $add
     * @return self
     */
    public function addPoint(?int $add = 0);

    /**
     * remove point
     *
     * @param int $remove
     * @return self
     */
    public function removePoint(?int $remove = 0);
}
