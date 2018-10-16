CheckinableTrait
=================

for adding checkin to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    checkin:
      type: boolean
      nullable=true
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Booleanable\CheckinableInterface;

class MyClass implements CheckinableInterface
{
	use \Blackajte\TraitsBundle\Traits\Booleanable\CheckinableTrait;
}

```

Now you have checkin parameter 'boolean' in your class
```php

$class = new MyClass();

$class->setCheckin($checkin);

$class->getCheckin();//output $checkin

```

ConfidentialableTrait
======================

for adding confidential to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    confidential:
      type: boolean
      nullable: true
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Booleanable\ConfidentialableInterface;

class MyClass implements ConfidentialableInterface
{
	use \Blackajte\TraitsBundle\Traits\Booleanable\ConfidentialableTrait;
}

```

Now you have confidential parameter 'bool' in your class
```php

$class = new MyClass();

$class->setConfidential($confidential);

$class->getConfidential();//output $confidential

```