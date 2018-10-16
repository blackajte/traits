BirthdateableTrait
===================

for adding birthdate to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    birthdate:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Arsenyk\ComponentBundle\Model\Dateable\BirthdateableInterface;

class MyClass implements BirthdateableInterface
{
  use \Arsenyk\ComponentBundle\Model\Dateable\BirthdateableTrait;
}

```

Now you have birthdate parameter 'DateTime' in your class
```php

$class = new MyClass();

$class->setBirthdate(new \DateTime('now'));

$class->getBirthdate();//output \DateTime('now')
$class->isBirthdate();//output bool



ConnectableTrait
================

for adding connectAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    connectAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Arsenyk\ComponentBundle\Model\Dateable\ConnectableInterface;

class MyClass implements ConnectableInterface
{
  use \Arsenyk\ComponentBundle\Model\Dateable\ConnectableTrait;
}

```

Now you have connectAt parameter 'DateTime' in your class
```php

$class = new MyClass();

$class->setConnectAt(new \DateTime('now'));

$class->getConnectAt();//output \DateTime('now')
$class->isConnected();//output bool



DateableTrait
================

for adding CreatedAt, UpdatedAt, DeletedAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    createdAt:
      type: datetime
      nullable: false
    updatedAt:
      type: datetime
      nullable: true
    deletedAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Arsenyk\ComponentBundle\Model\Dateable\DateableInterface;

class MyClass implements DateableInterface
{
  use \Arsenyk\ComponentBundle\Model\Dateable\DateableTrait;
}

```

Now you have CreatedAt, UpdatedAt, DeletedAt parameter 'DateTime' in your class
```php

$class = new MyClass();

$class->setCreatedAt(new \DateTime('now'));

$class->getCreatedAt();//output \DateTime('now')


$class->setUpdatedAt(new \DateTime('now'));

$class->getUpdatedAt();//output \DateTime('now')


$class->setDeletedAt(new \DateTime('now'));

$class->getDeletedAt();//output \DateTime('now')

```

If UpdatedAt is < CreatedAt return \OutOfRangeException
If DeletedAt is < CreatedAt return \OutOfRangeException



NextAvailableAtTrait
=====================

for adding nextAvailableAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    nextAvailableAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Arsenyk\ComponentBundle\Model\Dateable\NextAvailableAtInterface;

class MyClass implements NextAvailableAtInterface
{
  use \Arsenyk\ComponentBundle\Model\Dateable\NextAvailableAtTrait;
}

```

Now you have nextAvailableAt parameter 'DateTime' in your class
```php

$class = new MyClass();

$class->setNextAvailableAt(new \DateTime('now'));

$class->getNextAvailableAt();//output \DateTime('now')
$class->isAvailable();//output bool



OnlineableTrait
================

for adding OnlineAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    onlineAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Arsenyk\ComponentBundle\Model\Dateable\OnlineableInterface;

class MyClass implements OnlineableInterface
{
  use \Arsenyk\ComponentBundle\Model\Dateable\OnlineableTrait;
}

```

Now you have OnlineAt parameter 'DateTime' in your class
```php

$class = new MyClass();

$class->setOnlineAt(new \DateTime('now'));

$class->getOnlineAt();//output \DateTime('now')
$class->isOnline();//output \DateTime('now')


StartEndableTrait
================

for adding startAt, endAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    startAt:
      type: datetime
      nullable: true
    endAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Arsenyk\ComponentBundle\Model\Dateable\StartEndableInterface;

class MyClass implements StartEndableInterface
{
  use \Arsenyk\ComponentBundle\Model\Dateable\StartEndableTrait;
}

```

Now you have startAt and endAt parameter 'DateTime' in your class
```php

$class = new MyClass();

$class->setStartAt(new \DateTime('now'));
$class->setEndAt(new \DateTime('now'));

$class->getStartAt();//output \DateTime('now')
$class->getEndAt();//output \DateTime('now')