<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits;

use \Traits\Identifiable\IdentifiableInterface;
use \Traits\Groupable\LocalizedGroupableInterface;
use \Traits\Mediaable\MediaableInterface;
use \Traits\OpenGraphable\OpenGraphableInterface;
use Doctrine\Common\Collections\ArrayCollection;

class TestModelLocalized implements IdentifiableInterface,
    LocalizedGroupableInterface,
    OpenGraphableInterface,
    MediaableInterface
{
    use \Traits\Identifiable\IdentifiableTrait;
    use \Traits\Groupable\LocalizedGroupableTrait;
    use \Traits\Mediaable\MediaableTrait;
    use \Traits\OpenGraphable\OpenGraphableTrait;
    
    /**
     * @return void
     */
    public function __construct()
    {
        $this->og_medias = new ArrayCollection();
    }
}
