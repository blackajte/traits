<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Descripteable;

interface DescriptionShortableInterface
{
    /**
     * Get descriptionShort
     *
     * @return string
     */
    public function getDescriptionShort();

    /**
     * Set descriptionShort
     *
     * @param string $descriptionShort
     * @return self
     */
    public function setDescriptionShort(?string $descriptionShort);
}
