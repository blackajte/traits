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

use OutOfRangeException;
use Blackajte\TraitsBundle\Traits\Statusable\StatusableTrait as Status;
use DateTimeInterface;

interface DateableInterface
{
    /**
     * test if date is before now
     *
     * @return bool
     */
    public static function isBefore(DateTimeInterface $datetime = null);

    /**
     * test if date is Today
     *
     * @return bool
     */
    public static function isToday(DateTimeInterface $datetime = null);

    /**
     * Set CreatedAt
     *
     * @return DateTimeInterface
     */
    public function getCreatedAt();
    
    /**
     * Set CreatedAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setCreatedAt(?DateTimeInterface $datetime = null);

    /**
     * Set UpdatedAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setUpdatedAt(?DateTimeInterface $datetime = null);

    /**
     * Set UpdatedAt
     *
     * @return DateTimeInterface
     */
    public function getUpdatedAt();

    /**
     * test if is Updated
     *
     * @return bool
     */
    public function isUpdated();
    /**
     * Set DeletedAt
     *
     * @param DateTimeInterface $datetime
     * @return self
     */
    public function setDeletedAt(?DateTimeInterface $datetime = null);

    /**
     * Get DeletedAt
     *
     * @return DateTimeInterface
     */
    public function getDeletedAt();

    /**
     * test if is Deleted
     *
     * @return bool
     */
    public function isDeleted();

    /**
     * Convert String To DateTime
     *
     * @param string $string
     * @return DateTimeInterface
     */
    public static function convertStringToDatetime($string);
}
