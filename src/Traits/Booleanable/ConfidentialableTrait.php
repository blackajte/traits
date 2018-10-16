<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Booleanable;

use Doctrine\ORM\Mapping as ORM;

trait ConfidentialableTrait
{
    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    protected $confidential = false;
    
    /**
     * {@inheritDoc}
     */
    public function getConfidential(): ?bool
    {
        return $this->confidential;
    }

    /**
     * {@inheritDoc}
     */
    public function setConfidential(?bool $confidential = false): self
    {
        $this->confidential = $confidential;
        return $this;
    }
}
