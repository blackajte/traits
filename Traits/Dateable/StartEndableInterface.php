<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Dateable;

use DateTimeInterface;

interface StartEndableInterface
{
    /**
     * Set StartAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setStartAt(?DateTimeInterface $datetime = null);
    
    /**
     * Get StartAt
     *
     * @return DateTimeInterface
     */
    public function getStartAt();

    /**
     * Set EndAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setEndAt(?DateTimeInterface $datetime = null);

    /**
     * Get EndAt
     *
     * @return DateTimeInterface
     */
    public function getEndAt();

    /**
     * test if is end
     *
     * @return bool
     */
    public function isEnd();
}
