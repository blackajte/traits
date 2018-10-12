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

trait FollowableTrait
{
    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    protected $follow = false;
    
    /**
     * {@inheritDoc}
     */
    public function getFollow(): ?bool
    {
        return $this->follow;
    }

    /**
     * {@inheritDoc}
     */
    public function setFollow(?bool $follow = false): self
    {
        $this->follow = $follow;
        return $this;
    }
}
