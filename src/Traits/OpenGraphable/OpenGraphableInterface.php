<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\OpenGraphable;

use Traits\Imageable\ImageableInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface OpenGraphableInterface
{
    /**
     * Set og_type
     *
     * @param string $type
     * @return self
     */
    public function setOgType(?string $type);

    /**
     * Get og_type
     *
     * @return string
     */
    public function getOgType();

    /**
     * Set og_title
     *
     * @param string $title
     * @return self
     */
    public function setOgTitle(?string $title);

    /**
     * Get og_title
     *
     * @return string
     */
    public function getOgTitle();

    /**
     * Set og_escription
     *
     * @param Text $description
     * @return self
     */
    public function setOgDescription(?string $description);

    /**
     * Get og_description
     *
     * @return Text
     */
    public function getOgDescription();

    /**
     * Add og_medias
     *
     * @param ImageableInterface $Image
     * @return self
     */
    public function addOgMedia(ImageableInterface $Image);

    /**
     * Remove og_medias
     *
     * @param ImageableInterface $Image
     * @return self
     */
    public function removeOgMedias(ImageableInterface $Image);

    /**
     * Get og_medias
     *
     * @param string $type
     * @return string/ArrayCollection
     */
    public function getOgMedias(?string $type = 'string');

    /**
     * Set og_medias
     *
     * @param string $Images
     * @return this
     */
    public function setOgMedias(?string $Images);
}
