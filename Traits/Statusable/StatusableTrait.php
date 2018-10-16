<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Statusable;

use Doctrine\ORM\Mapping as ORM;
use \InvalidArgumentException;

trait StatusableTrait
{
    CONST STATUS_NEW = 0;
    CONST STATUS_OFFLINE = 2;
    CONST STATUS_ONLINE = 5;
    CONST STATUS_NOTCONTROLED = 6;
    CONST STATUS_TWOMONTHNOTCONNECTED = 7;
    CONST STATUS_THREEMONTHNOTCONNECTED = 8;
    CONST STATUS_DELETE = 9;
    CONST STATUS_USERDELETE = 10;
    CONST STATUS_EMAILERROR = 11;

    public static function getAvailableStatus() : ?array
    {
        $return = [
            'STATUS_NEW' => self::STATUS_NEW,
            'STATUS_OFFLINE' => self::STATUS_OFFLINE,
            'STATUS_ONLINE' => self::STATUS_ONLINE,
            'STATUS_NOTCONTROLED' => self::STATUS_NOTCONTROLED,
            'STATUS_TWOMONTHNOTCONNECTED' => self::STATUS_TWOMONTHNOTCONNECTED,
            'STATUS_THREEMONTHNOTCONNECTED' => self::STATUS_THREEMONTHNOTCONNECTED,
            'STATUS_DELETE' => self::STATUS_DELETE,
            'STATUS_USERDELETE' => self::STATUS_USERDELETE,
            'STATUS_EMAILERROR' => self::STATUS_EMAILERROR
        ];
        return $return;
    }

    /**
     * @ORM\Column(type="integer")
     */
    protected $status = 0;

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?int $status): self
    {
        if (in_array($status, $this::getAvailableStatus())) {
            $this->status = $status;
            return $this;
        } else {
            throw new \InvalidArgumentException("Status not available!");
        }
    }
}
