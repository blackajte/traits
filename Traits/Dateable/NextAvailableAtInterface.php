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

interface NextAvailableAtInterface
{
    /**
     * get NextAvailableAt
     *
     * @return DateTimeInterface
     */
    public function getNextAvailableAt();
    
    /**
     * Set NextAvailableAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setNextAvailableAt(?DateTimeInterface $datetime = null);

    /**
     * test if is Available
     *
     * @return bool
     */
    public function isAvailable();
}
