<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits\Imageable;

use Traits\Imageable\ImageableInterface;

class DefaultImage implements ImageableInterface
{
    use \Traits\Imageable\ImageableTrait;

    public function __construct($image = "/img/design/default-img.gif") {
        $this->setImage($image);
    }
}
