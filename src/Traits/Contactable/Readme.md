FirstNameableTrait
==================

for adding first_name to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    firstName:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Contactable\FirstNameableInterface;

class MyClass implements FirstNameableInterface
{
	use \Traits\Contactable\FirstNameableTrait;
}

```

Now you have first_name parameter 'string' in your class
```php

$class = new MyClass();

$class->setFirstName($firstName);

$class->getFirstName();//output $firstName

```

SecondFirstNameableTrait
==================

for adding secondFirstName to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    secondFirstName:
      type: string
      nullable: true
...........
```

In your Entity
```php
........

use \Traits\Contactable\SecondFirstNameableInterface;

class MyClass implements SecondFirstNameableInterface
{
    use \Traits\Contactable\SecondFirstNameableTrait;
}

```

Now you have secondFirstName parameter 'string' in your class
```php

$class = new MyClass();

$class->setSecondFirstName($secondFirstName);

$class->getSecondFirstName();//output $secondFirstName

```

LastNameableTrait
==================

for adding lastName to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    lastName:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Contactable\LastNameableInterface;

class MyClass implements LastNameableInterface
{
	use \Traits\Contactable\LastNameableTrait;
}

```

Now you have lastName parameter 'string' in your class
```php

$class = new MyClass();

$class->setLastName($lastName);

$class->getLastName();//output $lastName

```