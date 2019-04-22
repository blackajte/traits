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
use Blackajte\TraitsBundle\Traits\Skuable\SKUableInterface;
use Blackajte\TraitsBundle\Traits\Statusable\StatusableInterface;
use Blackajte\TraitsBundle\Traits\Booleanable\CheckinableInterface;
use Blackajte\TraitsBundle\Traits\Booleanable\ConfidentialableInterface;
use Blackajte\TraitsBundle\Traits\Booleanable\NewsletterableInterface;
use Blackajte\TraitsBundle\Traits\Booleanable\FollowableInterface;
use Blackajte\TraitsBundle\Traits\Dateable\AttributeAtInterface;
use Blackajte\TraitsBundle\Traits\Dateable\BirthdateableInterface;
use Blackajte\TraitsBundle\Traits\Dateable\ConnectableInterface;
use Blackajte\TraitsBundle\Traits\Dateable\DateableInterface;
use Blackajte\TraitsBundle\Traits\Dateable\NextAvailableAtInterface;
use Blackajte\TraitsBundle\Traits\Dateable\OnlineableInterface;
use Blackajte\TraitsBundle\Traits\Dateable\LoginableInterface;
use Blackajte\TraitsBundle\Traits\Dateable\StartEndableInterface;
use Blackajte\TraitsBundle\Traits\Draftable\DraftableInterface;
use Blackajte\TraitsBundle\Traits\Groupable\GroupableInterface;
use Blackajte\TraitsBundle\Traits\Groupable\LocalizeableInterface;
use Blackajte\TraitsBundle\Traits\Labelable\LabelableInterface;
use Blackajte\TraitsBundle\Traits\Levelable\LevelableInterface;
use Blackajte\TraitsBundle\Traits\Nameable\NameableInterface;
use Blackajte\TraitsBundle\Traits\Emailable\EmailableInterface;
use Blackajte\TraitsBundle\Traits\Descripteable\DescripteableInterface;
use Blackajte\TraitsBundle\Traits\Descripteable\DescriptionShortableInterface;
use Blackajte\TraitsBundle\Traits\Descripteable\DescriptionLongableInterface;
use Blackajte\TraitsBundle\Traits\Seoable\SeoableInterface;
use Blackajte\TraitsBundle\Traits\Hitable\ViewableInterface;
use Blackajte\TraitsBundle\Traits\Hitable\InableInterface;
use Blackajte\TraitsBundle\Traits\Hitable\OutableInterface;
use Blackajte\TraitsBundle\Traits\Altable\AltableInterface;
use Blackajte\TraitsBundle\Traits\Countable\CountableInterface;
use Blackajte\TraitsBundle\Traits\Contentable\ContentableInterface;
use Blackajte\TraitsBundle\Traits\Titleable\TitleableInterface;
use Blackajte\TraitsBundle\Traits\Typeable\TypeableInterface;
use Blackajte\TraitsBundle\Traits\Urlable\UrlableInterface;
use Blackajte\TraitsBundle\Traits\Urlable\PathableInterface;
use Blackajte\TraitsBundle\Traits\Urlable\LinkableInterface;
use Blackajte\TraitsBundle\Traits\Urlable\RouteableInterface;
use Blackajte\TraitsBundle\Traits\Valueable\ValueableInterface;
use Blackajte\TraitsBundle\Traits\Contactable\FirstNameableInterface;
use Blackajte\TraitsBundle\Traits\Contactable\SecondFirstNameableInterface;
use Blackajte\TraitsBundle\Traits\Contactable\LastNameableInterface;
use Blackajte\TraitsBundle\Traits\Phoneable\PhoneableInterface;
use Blackajte\TraitsBundle\Traits\Pseudoable\PseudoableInterface;
use Blackajte\TraitsBundle\Traits\Timeable\TimeableInterface;
use Blackajte\TraitsBundle\Traits\Voteable\VoteableInterface;
use Blackajte\TraitsBundle\Traits\Voteable\VoteBonusableInterface;
use Blackajte\TraitsBundle\Traits\Positionable\PositionableInterface;
use Blackajte\TraitsBundle\Traits\Pointable\PointableInterface;
use Blackajte\TraitsBundle\Traits\Bodyable\BodyableInterface;
use Blackajte\TraitsBundle\Traits\Deviseable\DeviseableInterface;
use Blackajte\TraitsBundle\Traits\Deviseable\MontantableInterface;
use Blackajte\TraitsBundle\Traits\Deviseable\ScalableAmountInterface;
use Blackajte\TraitsBundle\Traits\Jsonable\JsonableInterface;
use Blackajte\TraitsBundle\Traits\Imageable\ImageableInterface;
use Blackajte\TraitsBundle\Traits\Imageable\ImageableCollectionInterface;
use Blackajte\TraitsBundle\Traits\Passwordable\PasswordableInterface;
use Blackajte\TraitsBundle\Traits\Paypalable\PaypalableInterface;
use Doctrine\Common\Collections\ArrayCollection;

class TestModel implements
    IdentifiableInterface,
    SKUableInterface,
    StatusableInterface,
    CheckinableInterface,
    ConfidentialableInterface,
    NewsletterableInterface,
    FollowableInterface,
    AttributeAtInterface,
    BirthdateableInterface,
    ConnectableInterface,
    DateableInterface,
    NextAvailableAtInterface,
    OnlineableInterface,
    LoginableInterface,
    StartEndableInterface,
    DraftableInterface,
    GroupableInterface,
    LabelableInterface,
    LevelableInterface,
    NameableInterface,
    EmailableInterface,
    DescripteableInterface,
    DescriptionShortableInterface,
    DescriptionLongableInterface,
    SeoableInterface,
    ViewableInterface,
    InableInterface,
    OutableInterface,
    AltableInterface,
    CountableInterface,
    TitleableInterface,
    TypeableInterface,
    UrlableInterface,
    PathableInterface,
    LinkableInterface,
    RouteableInterface,
    ValueableInterface,
    PseudoableInterface,
    FirstNameableInterface,
    SecondFirstNameableInterface,
    LastNameableInterface,
    PhoneableInterface,
    TimeableInterface,
    VoteableInterface,
    VoteBonusableInterface,
    PositionableInterface,
    BodyableInterface,
    DeviseableInterface,
    MontantableInterface,
    ScalableAmountInterface,
    JsonableInterface,
    ImageableInterface,
    ImageableCollectionInterface,
    PasswordableInterface,
    PaypalableInterface,
    LocalizeableInterface,
    ContentableInterface,
    PointableInterface
{
    use \Blackajte\TraitsBundle\Traits\Identifiable\IdentifiableTrait;
    use \Blackajte\TraitsBundle\Traits\Skuable\SKUableTrait;
    use \Blackajte\TraitsBundle\Traits\Statusable\StatusableTrait;
    use \Blackajte\TraitsBundle\Traits\Booleanable\CheckinableTrait;
    use \Blackajte\TraitsBundle\Traits\Booleanable\ConfidentialableTrait;
    use \Blackajte\TraitsBundle\Traits\Booleanable\NewsletterableTrait;
    use \Blackajte\TraitsBundle\Traits\Booleanable\FollowableTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\AttributeAtTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\BirthdateableTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\ConnectableTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\DateableTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\NextAvailableAtTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\OnlineableTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\LoginableTrait;
    use \Blackajte\TraitsBundle\Traits\Dateable\StartEndableTrait;
    use \Blackajte\TraitsBundle\Traits\Draftable\DraftableTrait;
    use \Blackajte\TraitsBundle\Traits\Groupable\GroupableTrait;
    use \Blackajte\TraitsBundle\Traits\Groupable\LocalizeableTrait;
    use \Blackajte\TraitsBundle\Traits\Labelable\LabelableTrait;
    use \Blackajte\TraitsBundle\Traits\Levelable\LevelableTrait;
    use \Blackajte\TraitsBundle\Traits\Nameable\NameableTrait;
    use \Blackajte\TraitsBundle\Traits\Emailable\EmailableTrait;
    use \Blackajte\TraitsBundle\Traits\Descripteable\DescripteableTrait;
    use \Blackajte\TraitsBundle\Traits\Descripteable\DescriptionShortableTrait;
    use \Blackajte\TraitsBundle\Traits\Descripteable\DescriptionLongableTrait;
    use \Blackajte\TraitsBundle\Traits\Seoable\SeoableTrait;
    use \Blackajte\TraitsBundle\Traits\Hitable\ViewableTrait;
    use \Blackajte\TraitsBundle\Traits\Hitable\InableTrait;
    use \Blackajte\TraitsBundle\Traits\Hitable\OutableTrait;
    use \Blackajte\TraitsBundle\Traits\Altable\AltableTrait;
    use \Blackajte\TraitsBundle\Traits\Countable\CountableTrait;
    use \Blackajte\TraitsBundle\Traits\Titleable\TitleableTrait;
    use \Blackajte\TraitsBundle\Traits\Typeable\TypeableTrait;
    use \Blackajte\TraitsBundle\Traits\Urlable\UrlableTrait;
    use \Blackajte\TraitsBundle\Traits\Urlable\PathableTrait;
    use \Blackajte\TraitsBundle\Traits\Urlable\LinkableTrait;
    use \Blackajte\TraitsBundle\Traits\Urlable\RouteableTrait;
    use \Blackajte\TraitsBundle\Traits\Valueable\ValueableTrait;
    use \Blackajte\TraitsBundle\Traits\Contactable\FirstNameableTrait;
    use \Blackajte\TraitsBundle\Traits\Contactable\SecondFirstNameableTrait;
    use \Blackajte\TraitsBundle\Traits\Contactable\LastNameableTrait;
    use \Blackajte\TraitsBundle\Traits\Phoneable\PhoneableTrait;
    use \Blackajte\TraitsBundle\Traits\Pseudoable\PseudoableTrait;
    use \Blackajte\TraitsBundle\Traits\Timeable\TimeableTrait;
    use \Blackajte\TraitsBundle\Traits\Voteable\VoteableTrait;
    use \Blackajte\TraitsBundle\Traits\Voteable\VoteBonusableTrait;
    use \Blackajte\TraitsBundle\Traits\Positionable\PositionableTrait;
    use \Blackajte\TraitsBundle\Traits\Bodyable\BodyableTrait;
    use \Blackajte\TraitsBundle\Traits\Deviseable\DeviseableTrait;
    use \Blackajte\TraitsBundle\Traits\Deviseable\MontantableTrait;
    use \Blackajte\TraitsBundle\Traits\Deviseable\ScalableAmountTrait;
    use \Blackajte\TraitsBundle\Traits\Jsonable\JsonableTrait;
    use \Blackajte\TraitsBundle\Traits\Imageable\ImageableTrait;
    use \Blackajte\TraitsBundle\Traits\Imageable\ImageableCollectionTrait;
    use \Blackajte\TraitsBundle\Traits\Paypalable\PaypalableTrait;
    use \Blackajte\TraitsBundle\Traits\Passwordable\PasswordableTrait;
    use \Blackajte\TraitsBundle\Traits\Contentable\ContentableTrait;
    use \Blackajte\TraitsBundle\Traits\Pointable\PointableTrait;
    
    /**
     * @return void
     */
    public function __construct()
    {
        $this->localizedGroups = new ArrayCollection();
    }
}
