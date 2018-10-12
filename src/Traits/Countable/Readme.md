CountableTrait
==============

for adding count to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    count:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Countable\CountableInterface;

class MyClass implements CountableInterface
{
	use \Traits\Countable\CountableTrait;
}

```

Now you have count parameter 'integer' in your class
```php

$class = new MyClass();

$class->setCount($count);

$class->getCount();//output $count

```