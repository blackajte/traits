<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Imageable;

use Doctrine\Common\Collections\ArrayCollection;
use Traits\Imageable\ImageableInterface;

interface ImageableCollectionInterface
{
    /**
     * Get images
     *
     * @return ArrayCollection
     */
    public function getImagesCollections();

    /**
     * Get images
     *
     * @return string|ArrayCollection
     */
    public function getImages($type="collection");

    /**
     * Get images
     *
     * @return string
     */
    public function getImagesString();

    /**
     * set images
     *
     * @param mixed $images
     * @return self
     */
    public function setImages($images);

    /**
     * Add image to collection
     *
     * @param ImageableInterface $image
     * @return self
     */
    public function imagesAdd(ImageableInterface $image);

    /**
     * Take Off image to collection
     *
     * @param ImageableInterface $image
     * @return self
     */
    public function imagesTakeOff(ImageableInterface $image);

    /**
     * set imagesCollections
     *
     * @param ArrayCollection $images
     * @return self
     */
    public function setImagesCollections(ArrayCollection $images);
}
