<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Typeable;

interface TypeableInterface
{
    /**
     * Get Type
     *
     * @return string
     */
    public function getType();

    /**
     * Set Type
     *
     * @param string $type
     * @return self
     */
    public function setType(?string $type);
}
