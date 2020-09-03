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
use Blackajte\TraitsBundle\Tests\TestModelImage as ModelImage;
use Blackajte\TraitsBundle\Tests\TestModelLocale as ModelLocale;
use Blackajte\TraitsBundle\Traits\Statusable\StatusableTrait;
use Blackajte\TraitsBundle\Traits\Nameable\NameableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;
use DateInterval;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use \InvalidArgumentException;
use OutOfRangeException;
use RangeException;
use Exception;

class AllTest extends PHPUnit_Framework_TestCase
{

    public function testPointableTrait()
    {
        $initPoint = rand(0, 100);

        $model = new Model();
        $model->setPoint($initPoint);
        
        $this->assertEquals($initPoint, $model->getPoint());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setPoint((int)$randstring);
        
        $this->assertEquals((int)$randstring, $model->getPoint());

        $model->setPoint($initPoint);
        $y = rand(1, 100);
        $model->addPoint($y);
        
        $this->assertEquals((int)$initPoint+$y, $model->getPoint());
        
        $model->removePoint((int)$initPoint);
        
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

    public function testPrePersist()
    {
        $model = new Model();
        $randstring = substr(md5(rand()), 0, 7);
        $model->setName($randstring);
        $model->convertNameToSlug();
        $this->assertEquals(NameableTrait::slugify($randstring), $model->getSlug());

        $dateTime1 = new DateTime();
        $model->setDateOnPrePersist();
        $dateTime2 = new DateTime();

        $this->assertLessThanOrEqual($dateTime2, $model->getCreatedAt());
        $this->assertGreaterThanOrEqual($dateTime1, $model->getUpdatedAt());
    }

    public function testDateableTraitConvertStringToDateTime()
    {
        $createdAt = "2020-01-03 10:20:17";
        $dateTime = new DateTime($createdAt);

        $this->assertEquals($dateTime, Model::convertStringToDatetime($createdAt));
    }

    public function testDateableTraitCreatedAt()
    {
        $createdAt = new DateTime('NOW');
        $model = new Model();

        $model->setCreatedAt($createdAt);

        $this->assertEquals($createdAt, $model->getCreatedAt());
    }

    public function testDateableTraitUpdatedAt()
    {
        $updatedAt = new DateTime('NOW');
        $model = new Model();

        $model->setUpdatedAt($updatedAt);

        $this->assertEquals($updatedAt, $model->getUpdatedAt());

        $updatedAt = new DateTime('NOW - 1day');

        $model->setUpdatedAt($updatedAt);

        $this->assertEquals(true, $model->isUpdated());

        $updatedAt = new DateTime('NOW + 1day');

        $model->setUpdatedAt($updatedAt);

        $this->assertEquals(false, $model->isUpdated());
    }

    public function testDateableTraitUpdatedAtException()
    {
        $createdAt = new DateTime('NOW');
        $updatedAt = new DateTime('NOW - 1day');
        $model = new Model();
        $model->setCreatedAt($createdAt);

        $this->expectException(OutOfRangeException::class);

        $model->setUpdatedAt($updatedAt);
    }

    public function testDateableTraitDeletedAt()
    {
        $deletedAt = new DateTime('NOW');
        $model = new Model();

        $model->setDeletedAt($deletedAt);

        $this->assertEquals($deletedAt, $model->getDeletedAt());

        $deletedAt = new DateTime('NOW - 1day');

        $model->setDeletedAt($deletedAt);

        $this->assertEquals(true, $model->isDeleted());

        $deletedAt = new DateTime('NOW + 1day');

        $model->setDeletedAt($deletedAt);

        $this->assertEquals(false, $model->isDeleted());
    }

    public function testDateableTraitDeletedAtException()
    {
        $createdAt = new DateTime('NOW + 1day');
        $deletedAt = new DateTime('NOW');
        $model = new Model();
        $model->setCreatedAt($createdAt);

        $this->expectException(OutOfRangeException::class);

        $model->setDeletedAt($deletedAt);
    }

    public function testDateableTraitLastLoginAt()
    {
        $lastLoginAt = new DateTime('NOW');
        $model = new Model();

        $model->setLastLoginAt($lastLoginAt);

        $this->assertEquals($lastLoginAt, $model->getLastLoginAt());
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

    public function testOpenGraphableTraitMedia()
    {
        $model = new ModelLocalized();
        $modelMedia = new ModelImage("image1.jpg");
        $modelMediaSecond = new ModelImage("image2.png");
        $modelMediaThird = new ModelImage("image3.jpeg");

        $listMedia = new ArrayCollection();

        $listMedia->add($modelMedia);
        $listMedia->add($modelMediaSecond);

        $model->setOgMedias($listMedia);
        
        $this->assertEquals($modelMedia->getImage(), $model->getOgMedias()->first()->getImage());
        $this->assertTrue($model->getOgMedias()->contains($modelMediaSecond));

        $model->addOgMedia($modelMediaThird);
        $this->assertEquals($modelMediaThird->getImage(), $model->getOgMedias()->last()->getImage());

        $model->removeOgMedia($modelMediaSecond);
        $this->assertEquals("image1.jpg;image3.jpeg", $model->getOgMedias('string'));

        $stringImages = "image2.png;image1.jpg;image3.jpeg";
        $model->setOgMedias($stringImages);
        $this->assertEquals($stringImages, $model->getOgMedias('string'));
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
        $model->convertNameToSlug();

        $this->assertEquals(Model::slugify($randstring), $model->getSlug());

        $model->setName("");
        $model->convertNameToSlug();
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

        $string = "un nombre de mots ou de signes précis ou être";
        $urlString = "unnombredemotsoudesignesprecisouetre";
        $this->assertEquals($urlString, $model::urlable($string));
    }

    public function testGroupableTraitAddRemove()
    {
        $model = new Model();
        $localizedModel = new ModelLocalized();

        $randstring = substr(md5(rand()), 0, 7);
        $localizedModel->setLabel($randstring);
        $model->localizedGroupAdd($localizedModel);

        $this->assertEquals($localizedModel, $model->getLocalizedGroups()->first());

        $model->localizedGroupTakeOff($localizedModel);
        $this->assertEquals(0, $model->getLocalizedGroups()->count());
    }

    public function testGroupableTrait()
    {
        $model = new Model();

        $localizedModel = new ModelLocalized();
        $randstring = substr(md5(rand()), 0, 7);
        $localizedModel->setLabel($randstring);

        $localizedModelSecond = new ModelLocalized();
        $randstring = substr(md5(rand()), 0, 7);
        $localizedModelSecond->setLabel($randstring);

        $listLocalized = new ArrayCollection();

        $listLocalized->add($localizedModel);
        $listLocalized->add($localizedModelSecond);

        $model->setLocalizedGroups($listLocalized);

        $this->assertEquals($localizedModel, $model->getLocalizedGroups()->first());

        $model->localizedGroupTakeOff($localizedModel);
        $this->assertEquals($localizedModelSecond, $model->getLocalizedGroups()->first());
    }

    public function testLocalizedGroupableTrait()
    {
        $localizedModel = new ModelLocalized();
        $randstring = substr(md5(rand()), 0, 7);
        $localizedModel->setLabel($randstring);

        $this->assertEquals($randstring, $localizedModel->getLabel());
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
        $attributeAt = new DateTime('NOW');
        $model = new Model();

        $model->setAttributeAt($attributeAt);

        $this->assertEquals($attributeAt, $model->getAttributeAt());

        $attributeAt = new DateTime('NOW + 1day');
        $model = new Model();
        $model->setAttributeAt($attributeAt);

        $this->assertEquals(false, $model->isAttribute());

        $attributeAt = new DateTime('NOW - 1day');
        $model = new Model();
        $model->setAttributeAt($attributeAt);

        $this->assertTrue($model->isAttributeAt());
    }

    public function testAttributeableTrait()
    {
        $y = true;
        $model = new Model();

        $model->setAttribute($y);

        $this->assertTrue($model->getAttribute());
        $this->assertTrue($model->isAttribute());
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
        $connectAt = new DateTime('NOW');
        $model = new Model();

        $model->setConnectAt($connectAt);

        $this->assertEquals($connectAt, $model->getConnectAt());
        $this->assertEquals(true, $model->isConnected());

        $connectAt->modify('+ 1day');
        $model->setConnectAt($connectAt);

        $this->assertEquals(false, $model->isConnected());

        $connectAt->modify('- 2day');
        $model->setConnectAt($connectAt);

        $this->assertEquals(false, $model->isConnected());
    }

    public function testNextAvailableAtTrait()
    {
        $nextAvailableAt = new DateTime('NOW');
        $model = new Model();

        $model->setNextAvailableAt($nextAvailableAt);

        $this->assertEquals($nextAvailableAt, $model->getNextAvailableAt());

        $nextAvailableAt->modify('+ 1day');
        $model->setNextAvailableAt($nextAvailableAt);

        $this->assertEquals(false, $model->isAvailable());

        $nextAvailableAt->modify('- 2day');
        $model->setNextAvailableAt($nextAvailableAt);

        $this->assertEquals(true, $model->isAvailable());
    }

    public function testOnlineableTrait()
    {
        $onlineAt = new DateTime('NOW');
        $model = new Model();

        $model->setOnlineAt($onlineAt);

        $this->assertEquals($onlineAt, $model->getOnlineAt());

        $onlineAt->modify('+ 1day');
        $model->setOnlineAt($onlineAt);

        $this->assertEquals(false, $model->isOnline());

        $onlineAt->modify('- 2day');
        $model->setOnlineAt($onlineAt);

        $this->assertEquals(true, $model->isOnline());
    }

    public function testStartEndableTrait()
    {
        $startAt = new DateTime('NOW');
        $model = new Model();

        $model->setStartAt($startAt);

        $this->assertEquals($startAt, $model->getStartAt());

        $endAt = new DateTime('NOW + 1day');
        $model->setEndAt($endAt);

        $this->assertEquals($endAt, $model->getEndAt());
        $this->assertEquals(false, $model->isEnd());


        $startAt = new DateTime('NOW - 1day');
        $endAt = new DateTime('NOW');
        $model->setStartAt($startAt);
        $model->setEndAt($endAt);

        $this->assertEquals(true, $model->isEnd());

        $startAt = new DateTime('NOW');
        $model->setStartAt($startAt);
        $endAt = new DateTime('NOW - 1day');
        $this->expectException('\OutOfRangeException');
        $model->setEndAt($endAt);
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
        $randstringSecond = substr(md5(rand()), 0, 7);
        $randstringLast = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setFirstName($randstring);
        $model->setSecondFirstName($randstringSecond);
        $model->setLastName($randstringLast);
        
        $this->assertEquals($randstring, $model->getFirstName());
        $this->assertEquals($randstringSecond, $model->getSecondFirstName());
        $this->assertEquals($randstringLast, $model->getLastName());
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

        $model->setVoteBonusPerso($y);
        
        $this->assertEquals($y, $model->getVoteBonusPerso());

        $model->voteBonusPersoAdd(10);
        $this->assertEquals((10+$y), $model->getVoteBonusPerso());

        $model->voteBonusPersoTakeOff(10);
        $this->assertEquals($y, $model->getVoteBonusPerso());
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

        $model->setScalableAmount(0);
        $this->assertEquals(0, $model->getScalableAmount());
        $this->assertFalse($model->getScalable());

        
        $y = true;
        $model->setScalable($y);
        $this->assertEquals($y, $model->getScalable());
        $this->assertEquals($y, $model->isScalable());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setScalable($randstring);
        $this->assertEquals((bool)$randstring, $model->getScalable());

        $y = '';
        $model->setScalable($y);
        $this->assertFalse($model->getScalable());
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
        $collection = new ArrayCollection();
        $model = new Model();
        $model->setLabel('Collection');
        
        $this->assertEquals($collection, $model->getImages('collection'));

        $image = new Model();
        $image->setLabel('test');
        $model->imagesAdd($image);
        $this->assertEquals($image, $model->getImages('collection')->first());

        $model->imagesTakeOff($image);
        $this->assertEquals($collection, $model->getImages('collection'));

        $collection->add($image);
        $model->setImages($collection);
        $this->assertEquals($collection, $model->getImages('collection'));

        $images = "image1.jpg;image2.png;image3.jpeg";
        $model->setImages($images);
        $this->assertEquals($images, $model->getImagesString());
        $this->assertEquals($images, $model->getImages('string'));

        $collection = new ArrayCollection();
        $image1 = new ModelImage("image1.jpg");
        $image2 = new ModelImage("image2.png");
        $image3 = new ModelImage("image3.jpeg");
        $collection->add($image1);
        $collection->add($image2);
        $collection->add($image3);

        $model->setImagesCollections($collection);
        $this->assertEquals($images, $model->getImages('string'));

        $model->setImages($collection);
        $this->assertEquals($images, $model->getImages('string'));
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

        $lenght = 10;
        $this->assertEquals($lenght, strlen($model::generate($lenght)));
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
        $txnId = substr(md5(rand()), 0, 7);
        $txnType = substr(md5(rand()), 0, 7);
        $paymentType = substr(md5(rand()), 0, 7);
        $paymentStatus = substr(md5(rand()), 0, 7);
        $model = new Model();

        $model->setTxnId($txnId);
        $this->assertEquals($txnId, $model->getTxnId());

        $model->setTxnType($txnType);
        $this->assertEquals($txnType, $model->getTxnType());

        $model->setPaymentType($paymentType);
        $this->assertEquals($paymentType, $model->getPaymentType());

        $model->setPaymentStatus($paymentStatus);
        $this->assertEquals($paymentStatus, $model->getPaymentStatus());

        $paymentDate = new DateTime('NOW');

        $model->setPaymentDate($paymentDate);

        $this->assertEquals($paymentDate, $model->getPaymentDate());

        $paymentDate->modify('+ 1day');
        $model->setPaymentDate($paymentDate);

        $this->assertEquals(false, $model->isPayed());

        $paymentDate->modify('- 2day');
        $model->setPaymentDate($paymentDate);

        $this->assertEquals(true, $model->isPayed());
    }

    public function testCustomableTrait()
    {
        $randstring = substr(md5(rand()), 0, 7);

        $model = new Model();
        $model->setCustom($randstring);
        
        $this->assertEquals($randstring, $model->getCustom());
    }

    public function testForgotableTrait()
    {
        $forgotDate = new DateTime('NOW');

        $model = new Model();
        $model->setForgot();
                
        $this->assertNull($model->getForgot());
        $this->assertNull($model->getForgotAt());
        $this->assertFalse($model->isForgot());

        $randstring = substr(md5(rand()), 0, 7);
        $forgotDate = new DateTime('NOW');

        $model = new Model();
        $model->setForgot($randstring);
                
        $this->assertEquals($randstring, $model->getForgot());
        $this->assertGreaterThan($forgotDate, $model->getForgotAt());
        $this->assertTrue($model->isForgot());
    }

    public function testVipableTrait()
    {
        $model = new Model();
        $model->setVipType();
        
        $this->assertEquals(0, $model->getVipType());
        $this->assertFalse($model->isVipAvailable());

        $y = rand(1, 100);
        $model->setVipType($y);
        
        $this->assertEquals($y, $model->getVipType());
        $this->assertTrue($model->isVipAvailable());

        $now = new DateTime();
        $now->add(new DateInterval('PT1H'));
        $model->setVipEndAt($now);
        
        $this->assertEquals($now, $model->getVipEndAt());
        $this->assertTrue($model->isVipAvailable());

        $now->modify('+ 1day');
        $model->setVipEndAt($now);
        $this->assertTrue($model->isVipAvailable());

        $model->removeVip();
        $this->assertEquals(null, $model->getVipEndAt());
        $this->assertEquals(0, $model->getVipType());
        $this->assertFalse($model->isVipAvailable());

        $y = rand(1, 100);
        $now = new DateTime();
        $now->modify("+1 second");
        $model->setVipEndAt($now);
        $model->setVipType($y);
        sleep(2);
        $this->assertEquals($now, $model->getVipEndAt());
        $this->assertFalse($model->isVipAvailable());
    }

    public function testVipableTraitException()
    {
        $now = new DateTime('NOW');
        $model = new Model();
        $this->expectException(OutOfRangeException::class);

        $model->setVipEndAt($now);
    }

    public function testValidateableTrait()
    {
        $model = new Model();
        $model->setValidate('');
        
        $this->assertEquals('', $model->getValidate());
        $this->assertFalse($model->isValidate());

        $randstring = substr(md5(rand()), 0, 7);
        $model->setValidate($randstring);
        
        $this->assertEquals($randstring, $model->getValidate());
        $this->assertTrue($model->isValidate());

        $now = new DateTime();
        $now->add(new DateInterval('PT1H'));
        $model->setValidateAt($now);
        
        $this->assertEquals($now, $model->getValidateAt());
        $this->assertFalse($model->isValidate());

        $now->modify('- 1day');
        $model->setValidateAt($now);
        $this->assertTrue($model->isValidate());

        $model->setValidateAt();
        $this->assertTrue($model->isValidate());
    }

    public function testIpableTrait()
    {
        $ip = "127.0.0.1";

        $model = new Model();
        $model->setIp($ip);
        $this->assertEquals($ip, $model->getIp());
    }

    public function testIpableTraitException()
    {
        $ip = "127.0.195.268";
        $model = new Model();
        $this->expectException(RangeException::class);

        $model->setIp($ip);
    }

    public function testGeoIpableTrait()
    {
        $ip = "195.154.178.85";

        $model = new Model();
        $model->newIp($ip);
        $this->assertEquals("", $model->getCity());
        $this->assertEquals("FR", $model->getCountry());
        $this->assertEquals("EU", $model->getContinent());

        $city = "Montpellier";
        $country = "France";
        $continent = "Europe";

        $model->setCity($city);
        $model->setCountry($country);
        $model->setContinent($continent);
        $this->assertEquals($city, $model->getCity());
        $this->assertEquals($country, $model->getCountry());
        $this->assertEquals($continent, $model->getContinent());
    }

    public function testInfoDeviceableTrait()
    {
        $httpUserAgent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";

        $model = new Model();
        $model->setHttpUserAgent($httpUserAgent);
        $this->assertEquals($httpUserAgent, $model->getHttpUserAgent());
        $this->assertEquals("Chrome 75.0", $model->getBrowser());
        $this->assertEquals("GNU/Linux", $model->getOs());
        $this->assertEquals("desktop", $model->getDevice());

        $browser = "Chrome";
        $os = "Xubuntu";
        $device = "Mobile";

        $model->setBrowser($browser);
        $model->setOs($os);
        $model->setDevice($device);
        $this->assertEquals($browser, $model->getBrowser());
        $this->assertEquals($os, $model->getOs());
        $this->assertEquals($device, $model->getDevice());
    }

    public function testInfoDeviceableTraitException()
    {
        $httpUserAgent = "tototot";

        $model = new Model();
        $model->setHttpUserAgent($httpUserAgent);
        $this->assertEquals($httpUserAgent, $model->getHttpUserAgent());
        $this->assertEquals("not found", $model->getBrowser());
        $this->assertEquals("not found", $model->getOs());
        $this->assertEquals("not found", $model->getDevice());
    }

    public function testDefaultImage()
    {
        $modelImage = new ModelImage();
        $this->assertEquals("/img/design/default-img.gif", $modelImage->getImage());
    }
}
