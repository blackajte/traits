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

use Doctrine\ORM\Mapping as ORM;
use Blackajte\TraitsBundle\Traits\Dateable\DateableTrait;
use DateTimeInterface;

trait PaypalableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $txn_id;

    /**
     * @ORM\Column(type="string")
     */
    protected $txn_type;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $paymentDate;

    /**
     * @ORM\Column(type="string")
     */
    protected $paymentType;

    /**
     * @ORM\Column(type="string")
     */
    protected $paymentStatus;

    /**
     * {@inheritDoc}
     */
    public function getTxnId(): ?string
    {
        return $this->txn_id;
    }

    /**
     * {@inheritDoc}
     */
    public function setTxnId(?string $txnId): self
    {
        $this->txn_id = $txnId;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getTxnType(): ?string
    {
        return $this->txn_type;
    }

    /**
     * {@inheritDoc}
     */
    public function setTxnType(?string $txnType): self
    {
        $this->txn_type = $txnType;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentDate(): ?DateTimeInterface
    {
        return $this->paymentDate?:null;
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentDate(DateTimeInterface $paymentDate = null): self
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function isPayed(): bool
    {
        return DateableTrait::isBefore($this->getPaymentDate());
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentType(?string $paymentType): self
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentStatus(?string $paymentStatus): self
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
}
