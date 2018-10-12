<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Urlable;

use Doctrine\ORM\Mapping as ORM;

trait UrlableTrait
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $url;
    
    /**
     * {@inheritDoc}
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public static function urlable(string $path): string
    {
        $path = self::suppr_accents($path);
        return preg_replace('/[^[:alnum:]-._~]/', '', $path);
    }

    public static function suppr_accents($str, $encoding='utf-8'): string
    {
        // transformer les caractères accentués en entités HTML
        $str = htmlentities($str, ENT_NOQUOTES, $encoding);
     
        // remplacer les entités HTML pour avoir juste le premier caractères non accentués
        // Exemple : "&ecute;" => "e", "&Ecute;" => "E", "à" => "a" ...
        $str = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#', '\1', $str);
     
        // Remplacer les ligatures tel que : , Æ ...
        // Exemple "œ" => "oe"
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
        // Supprimer tout le reste
        $str = preg_replace('#&[^;]+;#', '', $str);
     
        return $str;
    }
}
