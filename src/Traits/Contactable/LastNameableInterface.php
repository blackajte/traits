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

interface LastNameableInterface
{
    /**
     * Get LastName
     *
     * @return string
     */
    public function getLastName();

    /**
     * Set LastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName(?string $lastName);
}
