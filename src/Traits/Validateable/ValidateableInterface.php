<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Validateable;

use DateTimeInterface;

interface ValidateableInterface
{
    /**
     * Get validate
     *
     * @return string
     */
    public function getValidate();

    /**
     * Set validate
     *
     * @param string $validate
     * @return self
     */
    public function setValidate(?string $validate);

    /**
     * Get validateAt
     *
     * @return DateTimeInterface|null
     */
    public function getValidateAt();

    /**
     * Set validateAt
     *
     * @param DateTimeInterface $validateAt
     * @return self
     */
    public function setValidateAt(?DateTimeInterface $validateAt = null);

    /**
     * test if validateAt
     *
     * @return boolean
     */
    public function isValidate();
}
