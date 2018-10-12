<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Descripteable;

interface DescriptionLongableInterface
{
    /**
     * Get descriptionLong
     *
     * @return string
     */
    public function getDescriptionLong();

    /**
     * Set descriptionLong
     *
     * @param string $descriptionLong
     * @return self
     */
    public function setDescriptionLong(?string $descriptionLong);
}
