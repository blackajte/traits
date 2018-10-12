<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Statusable;

interface StatusableInterface
{
    /**
     * get listing Status
     *
     * @return array
     */
    public static function getAvailableStatus();
    
    /**
     * Get Status
     *
     * @return int
     */
    public function getStatus();
    
    /**
     * Set Status
     *
     * @param int $status
     * @return this
     */
    public function setStatus(?int $status);
}
