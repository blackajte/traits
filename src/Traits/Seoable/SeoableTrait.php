<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Seoable;

use Doctrine\ORM\Mapping as ORM;

trait SeoableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $titlePage;

    /**
     * @ORM\Column(type="text")
     */
    protected $descriptionPage;

    /**
     * @ORM\Column(type="string")
     */
    protected $urlPage;

    /**
     * {@inheritDoc}
     */
    public function setTitlePage(?string $title): self
    {
        $this->titlePage = $title;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getTitlePage(): ?string
    {
        return $this->titlePage;
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionPage(?string $description): self
    {
        $this->descriptionPage = $description;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionPage(): ?string
    {
        return $this->descriptionPage;
    }

    /**
     * {@inheritDoc}
     */
    public function setUrlPage(?string $url): self
    {
        $this->urlPage = $url;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getUrlPage(): ?string
    {
        return $this->urlPage;
    }
}
