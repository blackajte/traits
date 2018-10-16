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

interface AttributeAtInterface
{
    /**
     * get AttributeAt
     *
     * @return DateTimeInterface
     */
    public function getAttributeAt();
    
    /**
     * Set AttributeAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setAttributeAt(?DateTimeInterface $datetime = null);

    /**
     * test if is Available
     *
     * @return bool
     */
    public function isAttribute();
}
