<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Deviseable;

interface DeviseableInterface
{
    /**
     * Get devise
     *
     * @return int
     */
    public function getDevise();

    /**
     * Set devise
     *
     * @param int $devise
     * @return self
     */
    public function setDevise(?int $devise);
}
