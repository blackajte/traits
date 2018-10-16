<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Passwordable;

use Doctrine\ORM\Mapping as ORM;

trait PasswordableTrait
{
    /**
     * @ORM\Column(type="string", length=60)
     */
    protected $password = null;
    
    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(?string $password = null): self
    {
        $this->password = $password;
        return $this;
    }

    public static function crypt(?string $password, array $options): ?string
    {
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public static function generate(int $lenght): ?string
    {
        $caract = "abcdefghijklmnopqrstuvwyxz0123456789@!:;,§/?*µ$=+";
        $chaine = str_shuffle($caract);
        // ensuite on coupe à la longueur voulue avec la fonction substr(), propre à PHP aussi
        $chaine = substr($chaine, 0, $lenght);
        return $chaine;
    }
}
