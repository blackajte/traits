<?php
/*
 * This file is part of the TraitsBundle\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits;

use \TraitsBundle\Identifiable\IdentifiableInterface;
use \TraitsBundle\Groupable\LocalizedGroupableInterface;
use \TraitsBundle\Mediaable\MediaableInterface;
use \TraitsBundle\OpenGraphable\OpenGraphableInterface;
use Doctrine\Common\Collections\ArrayCollection;

class TestModelLocalized implements IdentifiableInterface,
    LocalizedGroupableInterface,
    OpenGraphableInterface,
    MediaableInterface
{
    use \TraitsBundle\Identifiable\IdentifiableTrait;
    use \TraitsBundle\Groupable\LocalizedGroupableTrait;
    use \TraitsBundle\Mediaable\MediaableTrait;
    use \TraitsBundle\OpenGraphable\OpenGraphableTrait;
    
    /**
     * @return void
     */
    public function __construct()
    {
        $this->og_medias = new ArrayCollection();
    }
}
