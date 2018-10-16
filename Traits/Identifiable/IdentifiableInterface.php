<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Identifiable;

interface IdentifiableInterface
{
    /**
     * Get Id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set Id
     *
     * @param Integer $id
     * @return self
     */
    public function setId($id);
}
