<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Phoneable;

interface PhoneableInterface
{
    /**
     * Get Phone
     *
     * @return string
     */
    public function getPhone();

    /**
     * Set Phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone(?string $phone);
}
