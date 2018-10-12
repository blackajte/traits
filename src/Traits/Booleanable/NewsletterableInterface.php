<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Booleanable;

interface NewsletterableInterface
{
    /**
     * Get Newsletter
     *
     * @return bool
     */
    public function getNewsletter();

    /**
     * Set Newsletter
     *
     * @param bool $Newsletter
     * @return self
     */
    public function setNewsletter(?bool $newsletter = false);
}
