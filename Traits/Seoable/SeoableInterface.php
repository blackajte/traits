<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Seoable;

interface SeoableInterface
{
    /**
     * Set title_page
     *
     * @param string $title
     * @return self
     */
    public function setTitlePage(?string $title);

    /**
     * Get title_page
     *
     * @return string
     */
    public function getTitlePage();

    /**
     * Set decription_page
     *
     * @param string $description
     * @return self
     */
    public function setDescriptionPage(?string $description);

    /**
     * Get decription_page
     *
     * @return string $description
     */
    public function getDescriptionPage();

    /**
     * Set url_page
     *
     * @param string $url
     * @return self
     */
    public function setUrlPage(?string $url);

    /**
     * Get url_page
     *
     * @return string
     */
    public function getUrlPage();
}
