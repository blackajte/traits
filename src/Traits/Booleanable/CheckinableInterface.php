<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Booleanable;

interface CheckinableInterface
{
    /**
     * Get Checkin
     *
     * @return bool
     */
    public function getCheckin();

    /**
     * Set Checkin
     *
     * @param bool $Checkin
     * @return self
     */
    public function setCheckin(?bool $checkin = false);
}
