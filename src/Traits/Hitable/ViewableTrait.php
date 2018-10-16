<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Hitable;

use Doctrine\ORM\Mapping as ORM;

trait ViewableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $view = 0;
    
    /**
     * {@inheritDoc}
     */
    public function getView(): ?int
    {
        return $this->view;
    }

    /**
     * {@inheritDoc}
     */
    public function setView(?int $view): self
    {
        $this->view = $view;
        return $this;
    }
}
