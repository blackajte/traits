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

use Doctrine\ORM\Mapping as ORM;

trait NameableTrait
{
    /**
     * @ORM\Column(type="string")
     */
    protected $name = null;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $slug = null;
    
    /**
     * {@inheritDoc}
     */
    static public function slugify(?string $text): ?string
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     *
     */
    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }
    /**
     *
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function convertNameToSlug()
    {
        $this->setSlug(NameableTrait::slugify($this->getName()));
        return $this;
    }
}
