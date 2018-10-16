<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Timeable;

use \OutOfRangeException;

interface TimeableInterface
{
    /**
     * get Time
     *
     * @return int
     */
    public function getTime();
    
    /**
     * Set Time
     *
     * @param int $time
     * @return self
     */
    public function setTime(?int $time);
}
