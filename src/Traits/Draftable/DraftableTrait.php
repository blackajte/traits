<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Draftable;

use Doctrine\ORM\Mapping as ORM;

trait DraftableTrait
{
    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    protected $draft = false;

    /**
     * {@inheritDoc}
     */
    public function getDraft(): ?bool
    {
        return $this->draft;
    }

    /**
     * {@inheritDoc}
     */
    public function setDraft(?bool $draft = false): self
    {
        $this->draft = $draft;
        return $this;
    }
}
