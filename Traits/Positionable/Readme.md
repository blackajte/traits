PositionableTrait
=================

for adding id to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    position:
      type: integer
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Positionable\PositionableInterface;

class MyClass implements PositionableInterface
{
	use \Blackajte\TraitsBundle\Traits\Positionable\PositionableTrait;
}

```

Now you have position parameter 'integer' in your class
```php

$class = new MyClass();

$class->setPosition($position);

$class->getPosition();//output $position

```