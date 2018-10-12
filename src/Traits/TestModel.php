<?php
/*
 * This file is part of the Traits\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits;

use Traits\Identifiable\IdentifiableInterface;
use Traits\Skuable\SKUableInterface;
use Traits\Statusable\StatusableInterface;
use Traits\Booleanable\CheckinableInterface;
use Traits\Booleanable\ConfidentialableInterface;
use Traits\Booleanable\NewsletterableInterface;
use Traits\Booleanable\FollowableInterface;
use Traits\Dateable\AttributeAtInterface;
use Traits\Dateable\BirthdateableInterface;
use Traits\Dateable\ConnectableInterface;
use Traits\Dateable\DateableInterface;
use Traits\Dateable\NextAvailableAtInterface;
use Traits\Dateable\OnlineableInterface;
use Traits\Dateable\StartEndableInterface;
use Traits\Draftable\DraftableInterface;
use Traits\Groupable\GroupableInterface;
use Traits\Groupable\LocalizeableInterface;
use Traits\Labelable\LabelableInterface;
use Traits\Levelable\LevelableInterface;
use Traits\Nameable\NameableInterface;
use Traits\Emailable\EmailableInterface;
use Traits\Descripteable\DescripteableInterface;
use Traits\Descripteable\DescriptionShortableInterface;
use Traits\Descripteable\DescriptionLongableInterface;
use Traits\Seoable\SeoableInterface;
use Traits\Hitable\ViewableInterface;
use Traits\Hitable\InableInterface;
use Traits\Hitable\OutableInterface;
use Traits\Altable\AltableInterface;
use Traits\Countable\CountableInterface;
use Traits\Contentable\ContentableInterface;
use Traits\Titleable\TitleableInterface;
use Traits\Typeable\TypeableInterface;
use Traits\Urlable\UrlableInterface;
use Traits\Urlable\PathableInterface;
use Traits\Urlable\LinkableInterface;
use Traits\Urlable\RouteableInterface;
use Traits\Valueable\ValueableInterface;
use Traits\Contactable\FirstNameableInterface;
use Traits\Contactable\SecondFirstNameableInterface;
use Traits\Contactable\LastNameableInterface;
use Traits\Phoneable\PhoneableInterface;
use Traits\Pseudoable\PseudoableInterface;
use Traits\Timeable\TimeableInterface;
use Traits\Voteable\VoteableInterface;
use Traits\Voteable\VoteBonusableInterface;
use Traits\Positionable\PositionableInterface;
use Traits\Pointable\PointableInterface;
use Traits\Bodyable\BodyableInterface;
use Traits\Deviseable\DeviseableInterface;
use Traits\Deviseable\MontantableInterface;
use Traits\Deviseable\ScalableAmountInterface;
use Traits\Jsonable\JsonableInterface;
use Traits\Imageable\ImageableInterface;
use Traits\Imageable\ImageableCollectionInterface;
use Traits\Passwordable\PasswordableInterface;
use Traits\Paypalable\PaypalableInterface;
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
    use \Traits\Identifiable\IdentifiableTrait;
    use \Traits\Skuable\SKUableTrait;
    use \Traits\Statusable\StatusableTrait;
    use \Traits\Booleanable\CheckinableTrait;
    use \Traits\Booleanable\ConfidentialableTrait;
    use \Traits\Booleanable\NewsletterableTrait;
    use \Traits\Booleanable\FollowableTrait;
    use \Traits\Dateable\AttributeAtTrait;
    use \Traits\Dateable\BirthdateableTrait;
    use \Traits\Dateable\ConnectableTrait;
    use \Traits\Dateable\DateableTrait;
    use \Traits\Dateable\NextAvailableAtTrait;
    use \Traits\Dateable\OnlineableTrait;
    use \Traits\Dateable\StartEndableTrait;
    use \Traits\Draftable\DraftableTrait;
    use \Traits\Groupable\GroupableTrait;
    use \Traits\Groupable\LocalizeableTrait;
    use \Traits\Labelable\LabelableTrait;
    use \Traits\Levelable\LevelableTrait;
    use \Traits\Nameable\NameableTrait;
    use \Traits\Emailable\EmailableTrait;
    use \Traits\Descripteable\DescripteableTrait;
    use \Traits\Descripteable\DescriptionShortableTrait;
    use \Traits\Descripteable\DescriptionLongableTrait;
    use \Traits\Seoable\SeoableTrait;
    use \Traits\Hitable\ViewableTrait;
    use \Traits\Hitable\InableTrait;
    use \Traits\Hitable\OutableTrait;
    use \Traits\Altable\AltableTrait;
    use \Traits\Countable\CountableTrait;
    use \Traits\Titleable\TitleableTrait;
    use \Traits\Typeable\TypeableTrait;
    use \Traits\Urlable\UrlableTrait;
    use \Traits\Urlable\PathableTrait;
    use \Traits\Urlable\LinkableTrait;
    use \Traits\Urlable\RouteableTrait;
    use \Traits\Valueable\ValueableTrait;
    use \Traits\Contactable\FirstNameableTrait;
    use \Traits\Contactable\SecondFirstNameableTrait;
    use \Traits\Contactable\LastNameableTrait;
    use \Traits\Phoneable\PhoneableTrait;
    use \Traits\Pseudoable\PseudoableTrait;
    use \Traits\Timeable\TimeableTrait;
    use \Traits\Voteable\VoteableTrait;
    use \Traits\Voteable\VoteBonusableTrait;
    use \Traits\Positionable\PositionableTrait;
    use \Traits\Bodyable\BodyableTrait;
    use \Traits\Deviseable\DeviseableTrait;
    use \Traits\Deviseable\MontantableTrait;
    use \Traits\Deviseable\ScalableAmountTrait;
    use \Traits\Jsonable\JsonableTrait;
    use \Traits\Imageable\ImageableTrait;
    use \Traits\Imageable\ImageableCollectionTrait;
    use \Traits\Paypalable\PaypalableTrait;
    use \Traits\Passwordable\PasswordableTrait;
    use \Traits\Contentable\ContentableTrait;
    use \Traits\Pointable\PointableTrait;
    
    /**
     * @return void
     */
    public function __construct()
    {
        $this->localizedGroups = new ArrayCollection();
    }
}
