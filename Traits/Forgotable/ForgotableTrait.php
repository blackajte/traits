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

use Doctrine\ORM\Mapping as ORM;
use Blackajte\TraitsBundle\Traits\Dateable\DateableTrait;
use DateTime;
use DateTimeInterface;

trait ForgotableTrait
{
    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $forgot;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $forgotAt;
    
    /**
     * {@inheritDoc}
     */
    public function getForgot(): ?string
    {
        return $this->forgot;
    }

    /**
     * {@inheritDoc}
     */
    public function setForgot(string $forgot = null): self
    {
        $this->forgot = null;
        if ($forgot !== null) {
            $this->forgot = $forgot;
            return $this->setForgotAt(new DateTime());
        }
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getForgotAt(): ?DateTimeInterface
    {
        return $this->forgotAt;
    }

    /**
     * {@inheritDoc}
     */
    public function setForgotAt(DateTimeInterface $forgotAt = null): self
    {
        $this->forgotAt = $forgotAt;
        return $this;
    }

    public function isForgot(): ?bool
    {        
        if (!empty($this->forgotAt) && $this->forgotAt instanceof DateTimeInterface) {
            return DateableTrait::isBefore($this->forgotAt);
        }
        return false;
    }
}
