TypeableTrait
==============

for adding type to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    type:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use Blackajte\TraitsBundle\Traits\Typeable\TypeableInterface;

class MyClass implements TypeableInterface
{
	use \Blackajte\TraitsBundle\Traits\Typeable\TypeableTrait;
}

```

Now you have type parameter 'string' in your class
```php

$class = new MyClass();

$class->setType($type);

$class->getType();//output $type

```