<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Urlable;

use Doctrine\ORM\Mapping as ORM;

trait LinkableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $link;
    
    /**
     * {@inheritDoc}
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * {@inheritDoc}
     */
    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }
}
