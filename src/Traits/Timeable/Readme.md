TimeableTrait
==============

for adding time to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    time:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Timeable\TimeableInterface;

class MyClass implements TimeableInterface
{
	use \Traits\Timeable\TimeableTrait;
}

```

Now you have time parameter 'integer' in your class
```php

$class = new MyClass();

$class->setTime($time);

$class->getTime();//output $time

```