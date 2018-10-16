<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Booleanable;

use Doctrine\ORM\Mapping as ORM;

trait CheckinableTrait
{
    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    protected $checkin = false;
    
    /**
     * {@inheritDoc}
     */
    public function getCheckin(): ?bool
    {
        return $this->checkin;
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckin(?bool $checkin = false): self
    {
        $this->checkin = $checkin;
        return $this;
    }
}
