<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Nameable;

interface NameableInterface
{
    /**
     * Get Name
     *
     * @return string
     */
    public function getName();

    /**
     * Set Name
     *
     * @param string $name
     * @return self
     */
    public function setName(?string $name);

    /**
     * Set Slug
     *
     * @param string $slug
     * @return self
     */
    public function setSlug(?string $slug);

    /**
     * Get Slug
     *
     * @return string
     */
    public function getSlug();

    /**
     * Slugify text
     *
     * @param string $text
     * @return string
     */
    public static function slugify(?string $text);
    
    /**
     * Convert Name set to valid slug
     * 
     * @return self
     */
    public function convertNameToSlug();
}
