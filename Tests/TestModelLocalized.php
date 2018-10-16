<?php
/*
 * This file is part of the TraitsBundle\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Tests;

use Blackajte\TraitsBundle\Traits\Identifiable\IdentifiableInterface;
use Blackajte\TraitsBundle\Traits\Groupable\LocalizedGroupableInterface;
use Blackajte\TraitsBundle\Traits\Mediaable\MediaableInterface;
use Blackajte\TraitsBundle\Traits\OpenGraphable\OpenGraphableInterface;
use Doctrine\Common\Collections\ArrayCollection;

class TestModelLocalized implements IdentifiableInterface,
    LocalizedGroupableInterface,
    OpenGraphableInterface,
    MediaableInterface
{
    use \Blackajte\TraitsBundle\Traits\Identifiable\IdentifiableTrait;
    use \Blackajte\TraitsBundle\Traits\Groupable\LocalizedGroupableTrait;
    use \Blackajte\TraitsBundle\Traits\Mediaable\MediaableTrait;
    use \Blackajte\TraitsBundle\Traits\OpenGraphable\OpenGraphableTrait;
    
    /**
     * @return void
     */
    public function __construct()
    {
        $this->og_medias = new ArrayCollection();
    }
}
