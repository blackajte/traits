<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\OpenGraphable;

use Doctrine\ORM\Mapping as ORM;
use Blackajte\TraitsBundle\Traits\Imageable\ImageableInterface;
use Doctrine\Common\Collections\ArrayCollection;

trait OpenGraphableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $ogType;

    /**
     * @ORM\Column(type="string")
     */
    protected $ogTitle;

    /**
     * @ORM\Column(type="text")
     */
    protected $ogDescription;

    /**
     * @ORM\Column(type="string")
     */
    protected $ogMedias;
    
    /**
     * @param ArrayCollection
     */
    protected $ogMediasCollection;

    /**
     * {@inheritDoc}
     */
    public function setOgType(?string $type): self
    {
        $this->ogType = $type;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getOgType(): ?string
    {
        return $this->ogType;
    }

    /**
     * {@inheritDoc}
     */
    public function setOgTitle(?string $title): self
    {
        $this->ogTitle = $title;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getOgTitle(): ?string
    {
        return $this->ogTitle;
    }

    /**
     * {@inheritDoc}
     */
    public function setOgDescription(?string $description): self
    {
        $this->ogDescription = $description;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getOgDescription(): ?string
    {
        return $this->ogDescription;
    }

    /**
     * {@inheritDoc}
     */
    public function addOgMedia(ImageableInterface $Image): self
    {
        if ($this->getOgMediasCollection()->contains($Image) === false) {
            $this->getOgMediasCollection()->add($Image);
        }
        return $this;
    }
    /**
     * {@inheritDoc}
     */
    public function removeOgMedias(ImageableInterface $Image): self
    {
        $this->getOgMediasCollection()->removeElement($Image);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getOgMedias(?string $type = 'string')
    {
        if ($type == 'string') {
            return $this->ogMedias;
        } else {
            return $this->getOgMediasCollection();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function setOgMedias(?string $Images): self
    {
        $this->ogMedias = $Images;
        return $this;
    }

    protected function setOgMediasCollection(ArrayCollection $Images): self
    {
        $this->ogMediasCollection = $Images;
        return $this;
    }

    protected function getOgMediasCollection(): ?arrayCollection
    {
        return $this->ogMediasCollection ?: $this->ogMediasCollection = new ArrayCollection();
    }
    
    protected function transformStringToCollection(): self
    {
        $listing = explode(';', $this->ogMedias);
        foreach ($listing as $item) {
            $Image = new Image();
            $Image->setImage($item);
            $this->getOgMediasCollection()->add($Image);
        }
        return $this;
    }

    protected function transformCollectionToString(): self
    {
        foreach ($this->getOgMediasCollection() as $item) {
            if ($this->ogMedias == '') {
                $this->ogMedias .= $item->getImage();
            } else {
                $this->ogMedias .= ";".$item->getImage();
            }
        }
        return $this;
    }
}
