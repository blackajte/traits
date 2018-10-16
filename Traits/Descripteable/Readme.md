DescripteableTrait
==================

for adding description to your class

Example Description
--------------------
in your Entity.orm.yml
```php
...........
fields:
    description:
      type: text
      nullable: true
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Descripteable\DescripteableInterface;

class MyClass implements DescripteableInterface
{
	use \Blackajte\TraitsBundle\Traits\Descripteable\DescripteableTrait;
}

```

Now you have description parameter 'text' in your class
```php

$class = new MyClass();

$class->setDescription($description);

$class->getDescription();//output $description

```

Example DescriptionShort
-------------------------
in your Entity.orm.yml
```php
...........
fields:
    descriptionShort:
      type: text
      nullable: true
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Descripteable\DescriptionShortableInterface;

class MyClass implements DescriptionShortableInterface
{
	use \Blackajte\TraitsBundle\Traits\Descripteable\DescriptionShortableTrait;
}

```

Now you have descriptionShort parameter 'text' in your class
```php

$class = new MyClass();

$class->setDescriptionShort($descriptionShort);

$class->getDescriptionShort();//output $descriptionShort

```

Example DescriptionLong
-------------------------
in your Entity.orm.yml
```php
...........
fields:
    descriptionLong:
      type: text
      nullable: true
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Descripteable\DescriptionLongableInterface;

class MyClass implements DescriptionLongableInterface
{
	use \Blackajte\TraitsBundle\Traits\Descripteable\DescriptionLongableTrait;
}

```

Now you have descriptionLong parameter 'text' in your class
```php

$class = new MyClass();

$class->setDescriptionLong($descriptionLong);

$class->getDescriptionLong();//output $descriptionLong

```