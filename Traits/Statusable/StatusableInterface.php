<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Statusable;

interface StatusableInterface
{    
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
     * @return self
     */
    public function setStatus(?int $status);
}
