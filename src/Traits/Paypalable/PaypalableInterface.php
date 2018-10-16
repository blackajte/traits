<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Paypalable;

use DateTimeInterface;

interface PaypalableInterface
{
    /**
     * Get Txn Id
     *
     * @return string
     */
    public function getTxnId();

    /**
     * Set Txn Id
     *
     * @param string $txn_id
     * @return self
     */
    public function setTxnId(?string $txn_id);

    /**
     * Get Txn Type
     *
     * @return string
     */
    public function getTxnType();

    /**
     * Set Txn Type
     *
     * @param string $txn_type
     * @return self
     */
    public function setTxnType(?string $txn_type);

    /**
     * Get Payment Date
     *
     * @return DateTimeInterface|null
     */
    public function getPaymentDate();

    /**
     * Set Payment Date
     *
     * @param DateTimeInterface $paymentDate
     * @return self
     */
    public function setPaymentDate(DateTimeInterface $paymentDate = null);

    /**
     * Request If is Payed
     *
     * @return bool
     */
    public function isPayed();

    /**
     * Get Payment Type
     *
     * @return string
     */
    public function getPaymentType();

    /**
     * Set Payment Type
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType(?string $paymentType);

    /**
     * Get Payment Status
     *
     * @return string
     */
    public function getPaymentStatus();

    /**
     * Set Payment Status
     *
     * @param string $paymentStatus
     * @return self
     */
    public function setPaymentStatus(?string $paymentStatus);
}
