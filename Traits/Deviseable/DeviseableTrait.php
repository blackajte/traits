<?php
/*
 * This file is part of the Blackajte\TraitsBundle\Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Traits\Deviseable;

use Doctrine\ORM\Mapping as ORM;

trait DeviseableTrait
{
    CONST EURO = 1;
    CONST BONUS_PERSO = 2;
    CONST BONUS = 3;
    CONST SURPRISE = 4;
    CONST AUTRE = 6;
    CONST TICKETS_TRADE = 7;
    CONST TICKETS_BUY = 8;
    CONST ANNIVERSAIRE = 9;
    CONST POINT = 70;
    CONST POINT_CONNECT = 71;
    CONST POINT_VOTE = 72;
    CONST VIP1 = 90;
    CONST VIP2 = 91;
    CONST VIP3 = 92;

    CONST $listingDevise = [
        self::EURO => 'money_devise',
        self::BONUS_PERSO => 'bonus_perso',
        self::BONUS => 'bonus',
        self::SURPRISE => 'surprise',
        self::AUTRE => 'other',
        self::TICKETS_TRADE => 'ticket_trade',
        self::TICKETS_BUY => 'ticket_buy',
        self::ANNIVERSAIRE => 'birthday',
        self::POINT => 'point',
        self::POINT_CONNECT => 'point_connect',
        self::POINT_VOTE => 'point_vote',
        self::VIP1 => 'vip_account_1',
        self::VIP2 => 'vip_account_2',
        self::VIP3 => 'vip_account_3',
    ];

    /**
     * @ORM\Column(type="integer")
     */
    protected $devise = null;
    
    
    /**
     * {@inheritDoc}
     */
    public function getDevise(): ?int
    {
        return $this->devise;
    }

    /**
     * {@inheritDoc}
     */
    public function setDevise(?int $devise): self
    {
        $this->devise = $devise;
        return $this;
    }
}
