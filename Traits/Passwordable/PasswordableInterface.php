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

interface PasswordableInterface
{
    /**
     * Get Password
     *
     * @return string
     */
    public function getPassword();

    /**
     * Set Password
     *
     * @param string $Password
     * @return self
     */
    public function setPassword(?string $password = null);

    /**
     * Crypt Password
     *
     * @param string $Password
     * @param array $options
     * @return string $password_hash
     */
    public static function crypt(?string $password, array $options);
    
    /**
     * generate Password lenght
     *
     * @param int $lenght
     * @return string $password
     */
    public static function generate(int $lenght): ?string;
}
