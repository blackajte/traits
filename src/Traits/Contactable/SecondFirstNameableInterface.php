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

interface SecondFirstNameableInterface
{
    /**
     * Get SecondFirstName
     *
     * @return string
     */
    public function getSecondFirstName();

    /**
     * Set SecondFirstName
     *
     * @param string $secondFirstName
     * @return self
     */
    public function setSecondFirstName(?string $secondFirstName);
}
