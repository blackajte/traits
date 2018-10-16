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

use Doctrine\ORM\Mapping as ORM;
use Traits\Dateable\DateableTrait;
use DateTimeInterface;

trait ValidateableTrait
{
    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $validate;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $validateAt;
    
    /**
     * {@inheritDoc}
     */
    public function getValidate(): ?string
    {
        return $this->validate;
    }

    /**
     * {@inheritDoc}
     */
    public function setValidate(?string $validate): self
    {
        if ($validate == 0) {
            $this->validate = null;
        } else {
            $this->validate = $validate;
        }
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getValidateAt(): ?DateTimeInterface
    {
        return $this->validateAt;
    }

    /**
     * {@inheritDoc}
     */
    public function setValidateAt(?DateTimeInterface $validateAt = null): self
    {
        $this->validateAt = $validateAt;
        return $this;
    }

    public function isValidate(): ?bool
    {        
        if (!empty($this->validateAt) && $this->validateAt instanceof DateTimeInterface) {
            return DateableTrait::isBefore($this->validateAt);
        }
        return false;
    }
}
