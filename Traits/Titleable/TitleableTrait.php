<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Titleable;

use Doctrine\ORM\Mapping as ORM;

trait TitleableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $title;
    
    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
