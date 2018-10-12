ValueableTrait
==============

for adding value;  to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    value:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use Traits\Valueable\ValueableInterface;

class MyClass implements ValueableInterface
{
	use \Traits\Valueable\ValueableTrait;
}

```

Now you have value;  parameter 'string' in your class
```php

$class = new MyClass();

$class->setValue($value; );

$class->getValue();//output $value; 

```