PointableTrait
=================

for adding id to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    point:
      type: integer
...........
```

In your Entity
```php
........

use \Traits\Pointable\PointableInterface;

class MyClass implements PointableInterface
{
	use \Traits\Pointable\PointableTrait;
}

```

Now you have point parameter 'integer' in your class
```php

$class = new MyClass();

$class->setPoint($point);
$class->addPoint($point);
$class->removePoint($point);

$class->getPoint();//output $point

```