<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Imageable;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Blackajte\TraitsBundle\Traits\Imageable\ImageableInterface;
use Blackajte\TraitsBundle\Traits\Imageable\DefaultImage;

trait ImageableCollectionTrait
{
    /**
     * @var string
     */
    protected $images = null;
    /**
     * @var ArrayCollection
     */
    protected $imagesCollections = null;

    /**
     * {@inheritDoc} 
     */
    public function getImagesCollections(): ?ArrayCollection
    {
        if (!($this->imagesCollections instanceof ArrayCollection)) {
            $this->imagesCollections = new ArrayCollection();   
        }
        if (($this->imagesCollections->count() < 1)) {
            if (strlen($this->images) > 0) {
                $exploded = explode(";", $this->images);
                foreach ($exploded as $item) {
                    $image = new DefaultImage($item);
                    $this->imagesCollections->add($image);
                }
            }
        }
        return $this->imagesCollections;
    }

    /**
     * {@inheritDoc} 
     */
    public function getImages($type='string')
    {
        if ($type == "collection") return $this->getImagesCollections();
        if (is_string($this->images)) return $this->images;
        $images = "";
        $collection = $this->getImagesCollections();
        foreach ($collection as $item) {
            $images .= $item->getImage();
            if(next($collection)) {
                $images .= ";";
            }
        }
        $this->images = $images;
        return $images;
    }
    
    /**
     * {@inheritDoc} 
     */
    public function getImagesString()
    {
        if ($this->images instanceof ArrayCollection) {
            $this->imagesCollections = $this->images;
            $return = "";
            $collection = $this->getImagesCollections();
            foreach ($collection as $item) {
                $return .= $item->getImage();
                if(next($collection)) {
                    $return .= ";";
                }
            }
            $this->images = $return;
        }
        return $this->images;
    }

    protected function transformImagesCollection($images)
    {
        $this->imagesCollections = $images;
        $items = "";
        foreach ($this->imagesCollections as $item) {
            if ($items != "") {
                $items .= ";";
            }
            $items .= $item->getImage();
        }
        $this->images = $items;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setImages($images): self
    {
        if ($images instanceof ArrayCollection) {
            return $this->transformImagesCollection($images);
        }
        $this->images = $images;
        $this->imagesCollections = new ArrayCollection();
        if (is_string($images)) {
            $listing = explode(";", $images);
            foreach ($listing as $item) {
                $image = new DefaultImage($item);
                $this->imagesAdd($image);
            }
        }
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function setImagesCollections(ArrayCollection $images): self
    {
        $this->imagesCollections = $images;
        $items = "";
        foreach ($this->imagesCollections as $item) {
            if ($items != "") {
                $items .= ";";
            }
            $items .= $item->getImage();
        }
        $this->images = $items;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function imagesAdd(ImageableInterface $image): self
    {
        if ($this->getImagesCollections()->contains($image) === false) {
            $this->getImagesCollections()->add($image);
        }
        return $this;
    }
    /**
     * {@inheritDoc}
     */
    public function imagesTakeOff(ImageableInterface $image): self
    {
        $this->getImagesCollections()->removeElement($image);
        return $this;
    }
}
