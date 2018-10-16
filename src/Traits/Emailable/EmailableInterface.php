<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Emailable;

interface EmailableInterface
{
    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set Email
     *
     * @param string $email
     * @return self
     */
    public function setEmail(?string $email);
}
