<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Ipable;

use Doctrine\ORM\Mapping as ORM;
use RangeException;

trait IpableTrait
{
    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $ip = null;
    
    /**
     * {@inheritDoc}
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * {@inheritDoc}
     */
    public function setIp(?string $ip): self
    {
        $explode = explode('.', $ip);
        foreach ($explode as $num) {
            if ((int)$num > 255) {
                throw new RangeException("Ip non valide");
            }
        }
        $this->ip = $ip;
        return $this;
    }
}
