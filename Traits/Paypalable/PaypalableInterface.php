<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Paypalable;

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
     * @param string $txnId
     * @return self
     */
    public function setTxnId(?string $txnId);

    /**
     * Get Txn Type
     *
     * @return string
     */
    public function getTxnType();

    /**
     * Set Txn Type
     *
     * @param string $txnType
     * @return self
     */
    public function setTxnType(?string $txnType);

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
