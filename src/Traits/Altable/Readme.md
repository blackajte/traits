AltableTrait
==============

for adding alt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    alt:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Traits\Altable\AltableInterface;

class MyClass implements AltableInterface
{
    protected $alt = null;
	use \Traits\Altable\AltableTrait;
}

```

Now you have alt parameter 'string' in your class
```php

$class = new MyClass();

$class->setAlt($alt);

$class->getAlt();//output $alt

```