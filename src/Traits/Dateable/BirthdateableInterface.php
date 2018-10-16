<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Dateable;

use DateTimeInterface;

interface BirthdateableInterface
{
    /**
     * get Birthdate
     *
     * @return DateTimeInterface
     */
    public function getBirthdate();
    
    /**
     * Set Birthdate
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setBirthdate(?DateTimeInterface $datetime = null);

    /**
     * test if is Birthdate day
     *
     * @return bool
     */
    public function isBirthdate();
}
