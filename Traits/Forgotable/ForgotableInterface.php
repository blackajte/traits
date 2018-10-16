<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Forgotable;

use DateTimeInterface;

interface ForgotableInterface
{
    /**
     * Get forgot
     *
     * @return string
     */
    public function getForgot();

    /**
     * Set forgot
     *
     * @param string $forgot
     * @return self
     */
    public function setForgot(string $forgot = null);

    /**
     * Get ForgotAt
     *
     * @return DateTimeInterface|null
     */
    public function getForgotAt();

    /**
     * Set ForgotAt
     *
     * @param DateTimeInterface $forgotAt
     * @return self
     */
    public function setForgotAt(DateTimeInterface $forgotAt = null);

    /**
     * test if forgotAt
     *
     * @return boolean
     */
    public function isForgot();
}
