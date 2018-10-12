<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Attributeable;

use DateTimeInterface;
use Traits\Dateable\AttributeAtInterface;

interface AttributeableInterface extends AttributeAtInterface
{
    /**
     * Get validate
     *
     * @return int
     */
    public function getAttribute();

    /**
     * Set validate
     *
     * @param int $validate
     * @return self
     */
    public function setAttribute(?int $validate);


    /**
     * Test if attribute and attributeAt before now
     *
     * @return bool
     */
    public function isAttribute();
}
