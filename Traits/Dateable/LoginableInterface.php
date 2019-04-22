<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Dateable;

use DateTimeInterface;

interface LoginableInterface
{
    /**
     * get LastLoginAt
     *
     * @return DateTimeInterface
     */
    public function getLastLoginAt();
    
    /**
     * Set LastLoginAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setLastLoginAt(?DateTimeInterface $datetime = null);
}
