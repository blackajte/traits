<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Deviseable;

use Doctrine\ORM\Mapping as ORM;

trait DeviseableTrait
{
    /**
     * @ORM\Column(type="integer")
     */
    protected $devise = null;
    
    
    /**
     * {@inheritDoc}
     */
    public function getDevise(): ?int
    {
        return $this->devise;
    }

    /**
     * {@inheritDoc}
     */
    public function setDevise(?int $devise): self
    {
        $this->devise = $devise;
        return $this;
    }
}
