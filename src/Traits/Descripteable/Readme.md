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

use \Traits\Descripteable\DescripteableInterface;

class MyClass implements DescripteableInterface
{
	use \Traits\Descripteable\DescripteableTrait;
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

use \Traits\Descripteable\DescriptionShortableInterface;

class MyClass implements DescriptionShortableInterface
{
	use \Traits\Descripteable\DescriptionShortableTrait;
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

use \Traits\Descripteable\DescriptionLongableInterface;

class MyClass implements DescriptionLongableInterface
{
	use \Traits\Descripteable\DescriptionLongableTrait;
}

```

Now you have descriptionLong parameter 'text' in your class
```php

$class = new MyClass();

$class->setDescriptionLong($descriptionLong);

$class->getDescriptionLong();//output $descriptionLong

```