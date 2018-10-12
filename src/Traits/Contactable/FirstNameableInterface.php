<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Contactable;

interface FirstNameableInterface
{
    /**
     * Get FirstName
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Set FirstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName(?string $firstName);
}
