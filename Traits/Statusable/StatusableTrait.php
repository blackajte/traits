<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Statusable;

use Doctrine\ORM\Mapping as ORM;
use \InvalidArgumentException;

trait StatusableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $status = 0;

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }
}
