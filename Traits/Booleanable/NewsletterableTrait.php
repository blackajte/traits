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

trait NewsletterableTrait
{
    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    protected $newsletter = false;
    
    /**
     * {@inheritDoc}
     */
    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsletter(?bool $newsletter = false): self
    {
        $this->newsletter = $newsletter;
        return $this;
    }
}
