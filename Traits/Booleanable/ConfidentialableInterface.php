<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Booleanable;

interface ConfidentialableInterface
{
    /**
     * Get Confidential
     *
     * @return bool
     */
    public function getConfidential();

    /**
     * Set Confidential
     *
     * @param bool $Confidential
     * @return self
     */
    public function setConfidential(?bool $confidential = false);
}
