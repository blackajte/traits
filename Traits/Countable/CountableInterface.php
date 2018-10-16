<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Countable;

interface CountableInterface
{
    /**
     * Get Count
     *
     * @return integer
     */
    public function getCount();

    /**
     * Set Count
     *
     * @param integer $count
     * @return self
     */
    public function setCount(?int $count);

    /**
     * add Count
     *
     * @param integer $add
     * @return self
     */
    public function countAdd(?int $add = 0);

    /**
     * Take off Count
     *
     * @param integer $remove
     * @return self
     */
    public function countTakeOff(?int $remove = 0);
}
