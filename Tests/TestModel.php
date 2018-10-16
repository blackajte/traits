<?php
/*
 * This file is part of the TraitsBundle\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Traits;

use TraitsBundle\Identifiable\IdentifiableInterface;
use TraitsBundle\Skuable\SKUableInterface;
use TraitsBundle\Statusable\StatusableInterface;
use TraitsBundle\Booleanable\CheckinableInterface;
use TraitsBundle\Booleanable\ConfidentialableInterface;
use TraitsBundle\Booleanable\NewsletterableInterface;
use TraitsBundle\Booleanable\FollowableInterface;
use TraitsBundle\Dateable\AttributeAtInterface;
use TraitsBundle\Dateable\BirthdateableInterface;
use TraitsBundle\Dateable\ConnectableInterface;
use TraitsBundle\Dateable\DateableInterface;
use TraitsBundle\Dateable\NextAvailableAtInterface;
use TraitsBundle\Dateable\OnlineableInterface;
use TraitsBundle\Dateable\StartEndableInterface;
use TraitsBundle\Draftable\DraftableInterface;
use TraitsBundle\Groupable\GroupableInterface;
use TraitsBundle\Groupable\LocalizeableInterface;
use TraitsBundle\Labelable\LabelableInterface;
use TraitsBundle\Levelable\LevelableInterface;
use TraitsBundle\Nameable\NameableInterface;
use TraitsBundle\Emailable\EmailableInterface;
use TraitsBundle\Descripteable\DescripteableInterface;
use TraitsBundle\Descripteable\DescriptionShortableInterface;
use TraitsBundle\Descripteable\DescriptionLongableInterface;
use TraitsBundle\Seoable\SeoableInterface;
use TraitsBundle\Hitable\ViewableInterface;
use TraitsBundle\Hitable\InableInterface;
use TraitsBundle\Hitable\OutableInterface;
use TraitsBundle\Altable\AltableInterface;
use TraitsBundle\Countable\CountableInterface;
use TraitsBundle\Contentable\ContentableInterface;
use TraitsBundle\Titleable\TitleableInterface;
use TraitsBundle\Typeable\TypeableInterface;
use TraitsBundle\Urlable\UrlableInterface;
use TraitsBundle\Urlable\PathableInterface;
use TraitsBundle\Urlable\LinkableInterface;
use TraitsBundle\Urlable\RouteableInterface;
use TraitsBundle\Valueable\ValueableInterface;
use TraitsBundle\Contactable\FirstNameableInterface;
use TraitsBundle\Contactable\SecondFirstNameableInterface;
use TraitsBundle\Contactable\LastNameableInterface;
use TraitsBundle\Phoneable\PhoneableInterface;
use TraitsBundle\Pseudoable\PseudoableInterface;
use TraitsBundle\Timeable\TimeableInterface;
use TraitsBundle\Voteable\VoteableInterface;
use TraitsBundle\Voteable\VoteBonusableInterface;
use TraitsBundle\Positionable\PositionableInterface;
use TraitsBundle\Pointable\PointableInterface;
use TraitsBundle\Bodyable\BodyableInterface;
use TraitsBundle\Deviseable\DeviseableInterface;
use TraitsBundle\Deviseable\MontantableInterface;
use TraitsBundle\Deviseable\ScalableAmountInterface;
use TraitsBundle\Jsonable\JsonableInterface;
use TraitsBundle\Imageable\ImageableInterface;
use TraitsBundle\Imageable\ImageableCollectionInterface;
use TraitsBundle\Passwordable\PasswordableInterface;
use TraitsBundle\Paypalable\PaypalableInterface;
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
    use \TraitsBundle\Identifiable\IdentifiableTrait;
    use \TraitsBundle\Skuable\SKUableTrait;
    use \TraitsBundle\Statusable\StatusableTrait;
    use \TraitsBundle\Booleanable\CheckinableTrait;
    use \TraitsBundle\Booleanable\ConfidentialableTrait;
    use \TraitsBundle\Booleanable\NewsletterableTrait;
    use \TraitsBundle\Booleanable\FollowableTrait;
    use \TraitsBundle\Dateable\AttributeAtTrait;
    use \TraitsBundle\Dateable\BirthdateableTrait;
    use \TraitsBundle\Dateable\ConnectableTrait;
    use \TraitsBundle\Dateable\DateableTrait;
    use \TraitsBundle\Dateable\NextAvailableAtTrait;
    use \TraitsBundle\Dateable\OnlineableTrait;
    use \TraitsBundle\Dateable\StartEndableTrait;
    use \TraitsBundle\Draftable\DraftableTrait;
    use \TraitsBundle\Groupable\GroupableTrait;
    use \TraitsBundle\Groupable\LocalizeableTrait;
    use \TraitsBundle\Labelable\LabelableTrait;
    use \TraitsBundle\Levelable\LevelableTrait;
    use \TraitsBundle\Nameable\NameableTrait;
    use \TraitsBundle\Emailable\EmailableTrait;
    use \TraitsBundle\Descripteable\DescripteableTrait;
    use \TraitsBundle\Descripteable\DescriptionShortableTrait;
    use \TraitsBundle\Descripteable\DescriptionLongableTrait;
    use \TraitsBundle\Seoable\SeoableTrait;
    use \TraitsBundle\Hitable\ViewableTrait;
    use \TraitsBundle\Hitable\InableTrait;
    use \TraitsBundle\Hitable\OutableTrait;
    use \TraitsBundle\Altable\AltableTrait;
    use \TraitsBundle\Countable\CountableTrait;
    use \TraitsBundle\Titleable\TitleableTrait;
    use \TraitsBundle\Typeable\TypeableTrait;
    use \TraitsBundle\Urlable\UrlableTrait;
    use \TraitsBundle\Urlable\PathableTrait;
    use \TraitsBundle\Urlable\LinkableTrait;
    use \TraitsBundle\Urlable\RouteableTrait;
    use \TraitsBundle\Valueable\ValueableTrait;
    use \TraitsBundle\Contactable\FirstNameableTrait;
    use \TraitsBundle\Contactable\SecondFirstNameableTrait;
    use \TraitsBundle\Contactable\LastNameableTrait;
    use \TraitsBundle\Phoneable\PhoneableTrait;
    use \TraitsBundle\Pseudoable\PseudoableTrait;
    use \TraitsBundle\Timeable\TimeableTrait;
    use \TraitsBundle\Voteable\VoteableTrait;
    use \TraitsBundle\Voteable\VoteBonusableTrait;
    use \TraitsBundle\Positionable\PositionableTrait;
    use \TraitsBundle\Bodyable\BodyableTrait;
    use \TraitsBundle\Deviseable\DeviseableTrait;
    use \TraitsBundle\Deviseable\MontantableTrait;
    use \TraitsBundle\Deviseable\ScalableAmountTrait;
    use \TraitsBundle\Jsonable\JsonableTrait;
    use \TraitsBundle\Imageable\ImageableTrait;
    use \TraitsBundle\Imageable\ImageableCollectionTrait;
    use \TraitsBundle\Paypalable\PaypalableTrait;
    use \TraitsBundle\Passwordable\PasswordableTrait;
    use \TraitsBundle\Contentable\ContentableTrait;
    use \TraitsBundle\Pointable\PointableTrait;
    
    /**
     * @return void
     */
    public function __construct()
    {
        $this->localizedGroups = new ArrayCollection();
    }
}
