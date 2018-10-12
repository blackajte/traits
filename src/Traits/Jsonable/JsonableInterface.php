<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Jsonable;

interface JsonableInterface
{
    /**
     * Get Json
     *
     * @return string
     */
    public function getJson();

    /**
     * Set Json
     *
     * @param string $Json
     * @return self
     */
    public function setJson(?string $json);
}
