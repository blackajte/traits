<?php
/*
 * This file is part of the Arsenyk\Component\Tests\ package.
 *
 * (c) Arsenyk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Blackajte\TraitsBundle\Tests\Traits;

use Blackajte\TraitsBundle\Tests\TestModel as Model;
use Blackajte\TraitsBundle\Tests\TestModelLocalized as ModelLocalized;
use Blackajte\TraitsBundle\Tests\TestModelLocale as ModelLocale;
use Blackajte\TraitsBundle\Traits\Statusable\StatusableTrait;
use Blackajte\TraitsBundle\Traits\Nameable\NameableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use \InvalidArgumentException;
use OutOfRangeException;
use Exception;

class AllTest extends PHPUnit_Framework_TestCase
{

    public function testPointableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setPoint($y);
        
        $this->assertEquals($y, $model->getPoint());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setPoint((int)$randstring);
        
        $this->assertEquals((int)$randstring, $model->getPoint());

        $y = rand(0, 100);
        $model->addPoint($y);
        
        $this->assertEquals((int)$randstring+$y, $model->getPoint());
        
        $model->removePoint((int)$randstring);
        
        $this->assertEquals($y, $model->getPoint());
    }

    public function testContentableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setContent($y);
        
        $this->assertEquals($y, $model->getContent());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setContent($randstring);
        
        $this->assertEquals($randstring, $model->getContent());
    }

    public function testLevelableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setLevel($y);
        
        $this->assertEquals($y, $model->getLevel());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setLevel((int)$randstring);
        
        $this->assertEquals((int)$randstring, $model->getLevel());
    }

    public function testIdentifiableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setId($y);
        
        $this->assertEquals($y, $model->getId());
    }

    public function testSkuableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();
        $model->setSku($randstring);
        
        $this->assertEquals($randstring, $model->getSku());

        $model->generateSku();
        
        $this->assertNotEquals($randstring, $model->getSku());
    }

    public function testStatusableTrait()
    {
        $online = rand(0, 100);
        $model = new Model();
        $model->setStatus($online);
        
        $this->assertEquals($online, $model->getStatus());
/*
        $randstring = substr(md5(rand()), 0, 7);
        $this->expectException(Exception::class);
        $model->setStatus($randstring);
*/
    }

    public function testDateableTraitCreatedAt()
    {
        $CreatedAt = new DateTime('NOW');
        $model = new Model();

        $model->setCreatedAt($CreatedAt);

        $this->assertEquals($CreatedAt, $model->getCreatedAt());
    }

    public function testDateableTraitUpdatedAt()
    {
        $UpdatedAt = new DateTime('NOW');
        $model = new Model();

        $model->setUpdatedAt($UpdatedAt);

        $this->assertEquals($UpdatedAt, $model->getUpdatedAt());

        $UpdatedAt = new DateTime('NOW - 1day');

        $model->setUpdatedAt($UpdatedAt);

        $this->assertEquals(true, $model->isUpdated());

        $UpdatedAt = new DateTime('NOW + 1day');

        $model->setUpdatedAt($UpdatedAt);

        $this->assertEquals(false, $model->isUpdated());
    }

    public function testDateableTraitUpdatedAtException()
    {
        $CreatedAt = new DateTime('NOW');
        $UpdatedAt = new DateTime('NOW - 1day');
        $model = new Model();
        $model->setCreatedAt($CreatedAt);

        $this->expectException(OutOfRangeException::class);

        $model->setUpdatedAt($UpdatedAt);
    }

    public function testDateableTraitDeletedAt()
    {
        $DeletedAt = new DateTime('NOW');
        $model = new Model();

        $model->setDeletedAt($DeletedAt);

        $this->assertEquals($DeletedAt, $model->getDeletedAt());

        $DeletedAt = new DateTime('NOW - 1day');

        $model->setDeletedAt($DeletedAt);

        $this->assertEquals(true, $model->isDeleted());

        $DeletedAt = new DateTime('NOW + 1day');

        $model->setDeletedAt($DeletedAt);

        $this->assertEquals(false, $model->isDeleted());
    }

    public function testDateableTraitDeletedAtException()
    {
        $CreatedAt = new DateTime('NOW + 1day');
        $DeletedAt = new DateTime('NOW');
        $model = new Model();
        $model->setCreatedAt($CreatedAt);

        $this->expectException(OutOfRangeException::class);

        $model->setDeletedAt($DeletedAt);
    }

    public function testDraftableTrait()
    {
        $draft = rand(0, 1);
        $model = new Model();

        $model->setDraft($draft);

        $this->assertEquals($draft, $model->getDraft());
    }

    public function testMediaableTraitPath()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new ModelLocalized();

        $model->setPath($randstring);

        $this->assertEquals($randstring, $model->getPath());
    }

    public function testOpenGraphableTraitType()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new ModelLocalized();

        $model->setOgType($randstring);

        $this->assertEquals($randstring, $model->getOgType());
    }

    public function testOpenGraphableTraitTitle()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new ModelLocalized();

        $model->setOgTitle($randstring);

        $this->assertEquals($randstring, $model->getOgTitle());
    }

    public function testOpenGraphableTraitDescription()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new ModelLocalized();

        $model->setOgDescription($randstring);

        $this->assertEquals($randstring, $model->getOgDescription());
    }
/*
    public function testOpenGraphableTraitMedia()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $modelMedia = new ModelLocalized();
        $modelMedia->setPath($randstring);
        $modelMediaSecond = new ModelLocalized();
        $modelMediaSecond->setPath($randstring);
        $model = new ModelLocalized();
        $listMedia = new ArrayCollection();

        $listMedia->add($modelMedia);
        $listMedia->add($modelMediaSecond);

        $model->setOgMedias($listMedia);

        $this->assertEquals($modelMedia, $model->getOgMedias()->first());
        $this->assertEquals(true, $model->getOgMedias()->contains($modelMediaSecond));
    }

/*
    public function testOpenGraphableTraitMediaAdd()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $modelMedia = new ModelLocalized();
        $modelMedia->setPath($randstring);
        $model = new ModelLocalized();

        $model->addOgMedia($modelMedia);

        $this->assertEquals($modelMedia, $model->getOgMedias()->first());
        $this->assertEquals(1, $model->getOgMedias()->count());

        $model->addOgMedia($modelMedia);
        $this->assertEquals(1, $model->getOgMedias()->count());
    }

    public function testOpenGraphableTraitMediaRemove()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $modelMedia = new ModelLocalized();
        $modelMedia->setPath($randstring);
        $model = new ModelLocalized();

        $model->addOgMedia($modelMedia);
        $this->assertEquals($modelMedia, $model->getOgMedias()->first());

        $model->removeOgMedia($modelMedia);

        $this->assertEquals(0, $model->getOgMedias()->count());
    }
*/
    public function testNameableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();

        $model->setName($randstring);

        $this->assertEquals($randstring, $model->getName());

        $this->assertEquals(NameableTrait::slugify($randstring), $model->getSlug());

        $model->setName("");
        $this->assertEquals("n-a", $model->getSlug());
    }

    public function testLabelableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();

        $model->setLabel($randstring);

        $this->assertEquals($randstring, $model->getLabel());
    }

    public function testDescripteableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();

        $model->setDescription($randstring);

        $this->assertEquals($randstring, $model->getDescription());
    }

    public function testDescriptionShortableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();

        $model->setDescriptionShort($randstring);

        $this->assertEquals($randstring, $model->getDescriptionShort());
    }

    public function testDescriptionLongableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();

        $model->setDescriptionLong($randstring);

        $this->assertEquals($randstring, $model->getDescriptionLong());
    }

    public function testEmailableTrait()
    {
        $randemail = substr(md5(rand()), 0, 7).'@'.substr(md5(rand()), 0, 7).'.'.substr(md5(rand()), 0, 3);
        $model = new Model();

        $model->setEmail($randemail);

        $this->assertEquals($randemail, $model->getEmail());
    }

    public function testSeoableTrait()
    {
        $model = new Model();

        $randstring = substr(md5(rand()), 0, 7);
        $model->setTitlePage($randstring);
        $this->assertEquals($randstring, $model->getTitlePage());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setDescriptionPage($randstring);
        $this->assertEquals($randstring, $model->getDescriptionPage());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setUrlPage($randstring);
        $this->assertEquals($randstring, $model->getUrlPage());
    }

    public function testGroupableTraitAddRemove()
    {
        $model = new Model();
        $Localized_model = new ModelLocalized();

        $randstring = substr(md5(rand()), 0, 7);
        $Localized_model->setLabel($randstring);
        $model->localizedGroupAdd($Localized_model);

        $this->assertEquals($Localized_model, $model->getLocalizedGroups()->first());

        $model->localizedGroupTakeOff($Localized_model);
        $this->assertEquals(0, $model->getLocalizedGroups()->count());
    }

    public function testGroupableTrait()
    {
        $model = new Model();

        $Localized_model = new ModelLocalized();
        $randstring = substr(md5(rand()), 0, 7);
        $Localized_model->setLabel($randstring);

        $Localized_modelSecond = new ModelLocalized();
        $randstring = substr(md5(rand()), 0, 7);
        $Localized_modelSecond->setLabel($randstring);

        $listLocalized = new ArrayCollection();

        $listLocalized->add($Localized_model);
        $listLocalized->add($Localized_modelSecond);

        $model->setLocalizedGroups($listLocalized);

        $this->assertEquals($Localized_model, $model->getLocalizedGroups()->first());

        $model->localizedGroupTakeOff($Localized_model);
        $this->assertEquals($Localized_modelSecond, $model->getLocalizedGroups()->first());
    }

    public function testLocalizedGroupableTrait()
    {
        $Localized_model = new ModelLocalized();
        $randstring = substr(md5(rand()), 0, 7);
        $Localized_model->setLabel($randstring);

        $this->assertEquals($randstring, $Localized_model->getLabel());
    }
    
    public function testInableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setIn($y);
        
        $this->assertEquals($y, $model->getIn());
    }

    public function testOutableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setOut($y);
        
        $this->assertEquals($y, $model->getOut());
    }

    public function testViewableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setView($y);
        
        $this->assertEquals($y, $model->getView());
    }

    public function testAltableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setAlt($randstring);
        
        $this->assertEquals($randstring, $model->getAlt());
    }

    public function testAttributeAtTrait()
    {
        $attribute_at = new DateTime('NOW');
        $model = new Model();

        $model->setAttributeAt($attribute_at);

        $this->assertEquals($attribute_at, $model->getAttributeAt());

        $attribute_at = new DateTime('NOW + 1day');
        $model = new Model();
        $model->setAttributeAt($attribute_at);

        $this->assertEquals(false, $model->isAttribute());

        $attribute_at = new DateTime('NOW - 1day');
        $model = new Model();
        $model->setAttributeAt($attribute_at);

        $this->assertEquals(true, $model->isAttribute());
    }

    public function testBirthdateableTrait()
    {
        $birhtdate = new DateTime('NOW');
        $model = new Model();

        $model->setBirthdate($birhtdate);

        $this->assertEquals($birhtdate, $model->getBirthdate());
        $this->assertEquals(true, $model->isBirthdate());

        $birhtdate->modify('+ 1day');
        $model->setBirthdate($birhtdate);
        $this->assertEquals(false, $model->isBirthdate());

        $birhtdate->modify('- 2day');
        $model->setBirthdate($birhtdate);

        $this->assertEquals(false, $model->isBirthdate());
    }

    public function testConnectableTrait()
    {
        $connect_at = new DateTime('NOW');
        $model = new Model();

        $model->setConnectAt($connect_at);

        $this->assertEquals($connect_at, $model->getConnectAt());
        $this->assertEquals(true, $model->isConnected());

        $connect_at->modify('+ 1day');
        $model->setConnectAt($connect_at);

        $this->assertEquals(false, $model->isConnected());

        $connect_at->modify('- 2day');
        $model->setConnectAt($connect_at);

        $this->assertEquals(false, $model->isConnected());
    }

    public function testNextAvailableAtTrait()
    {
        $next_available_at = new DateTime('NOW');
        $model = new Model();

        $model->setNextAvailableAt($next_available_at);

        $this->assertEquals($next_available_at, $model->getNextAvailableAt());

        $next_available_at->modify('+ 1day');
        $model->setNextAvailableAt($next_available_at);

        $this->assertEquals(false, $model->isAvailable());

        $next_available_at->modify('- 2day');
        $model->setNextAvailableAt($next_available_at);

        $this->assertEquals(true, $model->isAvailable());
    }

    public function testOnlineableTrait()
    {
        $OnlineAt = new DateTime('NOW');
        $model = new Model();

        $model->setOnlineAt($OnlineAt);

        $this->assertEquals($OnlineAt, $model->getOnlineAt());

        $OnlineAt->modify('+ 1day');
        $model->setOnlineAt($OnlineAt);

        $this->assertEquals(false, $model->isOnline());

        $OnlineAt->modify('- 2day');
        $model->setOnlineAt($OnlineAt);

        $this->assertEquals(true, $model->isOnline());
    }

    public function testStartEndableTrait()
    {
        $StartAt = new DateTime('NOW');
        $model = new Model();

        $model->setStartAt($StartAt);

        $this->assertEquals($StartAt, $model->getStartAt());

        $EndAt = new DateTime('NOW + 1day');
        $model->setEndAt($EndAt);

        $this->assertEquals($EndAt, $model->getEndAt());
        $this->assertEquals(false, $model->isEnd());


        $StartAt = new DateTime('NOW - 1day');
        $EndAt = new DateTime('NOW');
        $model->setStartAt($StartAt);
        $model->setEndAt($EndAt);

        $this->assertEquals(true, $model->isEnd());

        $StartAt = new DateTime('NOW');
        $model->setStartAt($StartAt);
        $EndAt = new DateTime('NOW - 1day');
        $this->expectException('\OutOfRangeException');
        $model->setEndAt($EndAt);
    }

    public function testDateableTrait()
    {
        $this->assertEquals(false, Model::isBefore(null));
        $this->assertEquals(false, Model::isToday(null));
    }

    public function testCountableTrait()
    {
        $y = rand(0, 100);
        $z = rand(0, 100);

        $model = new Model();
        $model->setCount($y);
        
        $this->assertEquals($y, $model->getCount());

        $model->countAdd($z);
        $this->assertEquals(($y+$z), $model->getCount());

        $model->countTakeOff($z);
        $this->assertEquals($y, $model->getCount());
    }

    public function testTitleableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setTitle($randstring);
        
        $this->assertEquals($randstring, $model->getTitle());
    }

    public function testTypeableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setType($randstring);
        
        $this->assertEquals($randstring, $model->getType());
    }

    public function testUrlableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setUrl($randstring);
        
        $this->assertEquals($randstring, $model->getUrl());
    }

    public function testRouteableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setRoute($randstring);
        
        $this->assertEquals($randstring, $model->getRoute());

        $z = rand(0, 100);
        $model->setRoute($z);
        
        $this->assertEquals($z, $model->getRoute());
    }

    public function testPathableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setPath($randstring);
        
        $this->assertEquals($randstring, $model->getPath());
    }

    public function testLinkableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setLink($randstring);
        
        $this->assertEquals($randstring, $model->getLink());
    }

    public function testValueableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setValue($randstring);
        
        $this->assertEquals($randstring, $model->getValue());
    }

    public function testTimeableTrait()
    {
        $time = time();

        $model = new Model();
        $model->setTime($time);
        
        $this->assertEquals($time, $model->getTime());
    }

    public function testPseudoableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setPseudo($randstring);
        
        $this->assertEquals($randstring, $model->getPseudo());
    }

    public function testContactableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $randstring_second = substr(md5(rand()), 0, 7);
        $randstring_last = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setFirstName($randstring);
        $model->setSecondFirstName($randstring_second);
        $model->setLastName($randstring_last);
        
        $this->assertEquals($randstring, $model->getFirstName());
        $this->assertEquals($randstring_second, $model->getSecondFirstName());
        $this->assertEquals($randstring_last, $model->getLastName());
    }

    public function testPhoneableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setPhone($randstring);
        
        $this->assertEquals($randstring, $model->getPhone());
    }

    public function testVoteableTrait()
    {
        $model = new Model();
        $randstring = substr(md5(rand()), 0, 7);
        $model->setVote((int)$randstring);
        $this->assertEquals((int)$randstring, $model->getVote());

        $y = rand(0, 100);

        $model->setVote($y);
        
        $this->assertEquals($y, $model->getVote());

        $model->voteAdd(10);
        $this->assertEquals((10+$y), $model->getVote());

        $model->voteTakeOff(10);
        $this->assertEquals($y, $model->getVote());

        $model->setVoteBonus($y);
        
        $this->assertEquals($y, $model->getVoteBonus());

        $model->voteBonusAdd(10);
        $this->assertEquals((10+$y), $model->getVoteBonus());

        $model->voteBonusTakeOff(10);
        $this->assertEquals($y, $model->getVoteBonus());
    }

    public function testPositionableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setPosition($y);
        
        $this->assertEquals($y, $model->getPosition());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setPosition((int)$randstring);
        $this->assertEquals((int)$randstring, $model->getPosition());
    }

    public function testBodyableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setBody($y);
        
        $this->assertEquals($y, $model->getBody());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setBody($randstring);
        $this->assertEquals($randstring, $model->getBody());
    }

    public function testDevisableTrait()
    {
        $model = new Model();

        $y = rand(0, 100);
        $model->setMontant((float)$y);
        $this->assertEquals((float)$y, $model->getMontant());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setMontant((float)$randstring);
        $this->assertEquals((float)$randstring, $model->getMontant());

        
        $y = rand(0, 100);
        $model->setDevise($y);
        $this->assertEquals($y, $model->getDevise());
/*
        $randstring = substr(md5(rand()), 0, 7);
        $model->setDevise($randstring);
        $this->assertEquals($randstring, $model->getDevise());
*/
    }

    public function testScalableAmountTrait()
    {
        $model = new Model();

        $y = rand(0, 100);
        $model->setScalableAmount((float)$y);
        $this->assertEquals((float)$y, $model->getScalableAmount());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setScalableAmount((float)$randstring);
        $this->assertEquals((float)$randstring, $model->getScalableAmount());

        
        $y = true;
        $model->setScalable($y);
        $this->assertEquals($y, $model->getScalable());
        $this->assertEquals($y, $model->isScalable());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setScalable($randstring);
        $this->assertEquals((bool)$randstring, $model->getScalable());
    }

    public function testJsonableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setJson($y);
        
        $this->assertEquals($y, $model->getJson());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setJson($randstring);
        $this->assertEquals($randstring, $model->getJson());
    }

    public function testImageableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setImage($y);
        
        $this->assertEquals($y, $model->getImage());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setImage($randstring);
        $this->assertEquals($randstring, $model->getImage());
    }

    public function testImageableCollectionTrait()
    {
        $Collection = new ArrayCollection();
        $model = new Model();
        $model->setLabel('Collection');
        
        $this->assertEquals($Collection, $model->getImages('collection'));

        $image = new Model();
        $image->setLabel('test');
        $model->imagesAdd($image);
        $this->assertEquals($image, $model->getImages('collection')->first());

        $model->imagesTakeOff($image);
        $this->assertEquals($Collection, $model->getImages('collection'));

        $Collection->add($image);
        $model->setImages($Collection);
        $this->assertEquals($Collection, $model->getImages('collection'));
    }

    public function testPasswordableTrait()
    {
        $y = rand(0, 100);

        $model = new Model();
        $model->setPassword($y);
        
        $this->assertEquals($y, $model->getPassword());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setPassword($randstring);
        $this->assertEquals($randstring, $model->getPassword());
    }

    public function testPasswordableTraitCrypt()
    {
        $password = "string";
        $options = ['cost' => 12];
        $password2 = Model::crypt($password, $options);
        $this->assertEquals(
            true,
            password_verify($password, $password2)
        );
    }

    public function testCheckinTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();
        $this->assertFalse($model->getCheckin());
        $model->setCheckin((bool)$randstring);
        
        $this->assertEquals((bool)$randstring, $model->getCheckin());

        $model->setCheckin(true);
        
        $this->assertTrue($model->getCheckin());
    }

    public function testFollowTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();
        $this->assertFalse($model->getFollow());
        $model->setFollow((bool)$randstring);
        
        $this->assertEquals((bool)$randstring, $model->getFollow());

        $model->setFollow(true);
        
        $this->assertTrue($model->getFollow());
    }

    public function testConfidentialTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();
        $this->assertFalse($model->getConfidential());
        $model->setConfidential((bool)$randstring);
        
        $this->assertEquals((bool)$randstring, $model->getConfidential());

        $model->setConfidential(true);
        
        $this->assertTrue($model->getConfidential());
    }

    public function testNewsletterTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);
        $model = new Model();
        $this->assertFalse($model->getNewsletter());
        $model->setNewsletter((bool)$randstring);
        
        $this->assertEquals((bool)$randstring, $model->getNewsletter());

        $model->setNewsletter(true);
        
        $this->assertTrue($model->getNewsletter());
    }

    public function testPaypalTrait()
    {
        $TxnId = substr(md5(rand()), 0, 7);
        $TxnType = substr(md5(rand()), 0, 7);
        $PaymentType = substr(md5(rand()), 0, 7);
        $PaymentStatus = substr(md5(rand()), 0, 7);
        $model = new Model();

        $model->setTxnId($TxnId);
        $this->assertEquals($TxnId, $model->getTxnId());

        $model->setTxnType($TxnType);
        $this->assertEquals($TxnType, $model->getTxnType());

        $model->setPaymentType($PaymentType);
        $this->assertEquals($PaymentType, $model->getPaymentType());

        $model->setPaymentStatus($PaymentStatus);
        $this->assertEquals($PaymentStatus, $model->getPaymentStatus());

        $payment_date = new DateTime('NOW');

        $model->setPaymentDate($payment_date);

        $this->assertEquals($payment_date, $model->getPaymentDate());

        $payment_date->modify('+ 1day');
        $model->setPaymentDate($payment_date);

        $this->assertEquals(false, $model->isPayed());

        $payment_date->modify('- 2day');
        $model->setPaymentDate($payment_date);

        $this->assertEquals(true, $model->isPayed());
    }
}
