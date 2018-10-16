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

trait RouteableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $route;
    
    /**
     * {@inheritDoc}
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }

    /**
     * {@inheritDoc}
     */
    public function setRoute(?string $route): self
    {
        $this->route = $route;
        return $this;
    }
}
