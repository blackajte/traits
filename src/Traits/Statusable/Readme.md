StatusableTrait
================

for adding status to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    status:
      type: smallint
...........
```

In your Entity
```php
........

use \Traits\Statusable\StatusableInterface;

class MyClass implements StatusableInterface
{
	use \Traits\Statusable\StatusableTrait;
}

```

Now you have status parameter 'smallint' in your class
```php

$class = new MyClass();

$class->setStatus($status);

$class->getStatus();//output $status smalint

```