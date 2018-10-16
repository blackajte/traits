<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Urlable;

interface UrlableInterface
{
    /**
     * Get Url
     *
     * @return string
     */
    public function getUrl();

    /**
     * Set Url
     *
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url);
    
    /**
     * Convert string to Url
     *
     * @param string $path
     * @return string $url
     */    
    public static function urlable(string $path);
}
