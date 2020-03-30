<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Attributeable;

use DateTimeInterface;
use Blackajte\TraitsBundle\Traits\Dateable\AttributeAtInterface;

interface AttributeableInterface extends AttributeAtInterface
{
    /**
     * Get validate
     *
     * @return boolean
     */
    public function getAttribute();

    /**
     * Set validate
     *
     * @param boolean $validate
     * @return self
     */
    public function setAttribute(?bool $validate);


    /**
     * Test if attribute and attributeAt before now
     *
     * @return bool
     */
    public function isAttribute();
}
