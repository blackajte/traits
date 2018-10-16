NameableTrait
==============

for adding name to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    name:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use Blackajte\TraitsBundle\Traits\Nameable\NameableInterface;

class MyClass implements NameableInterface
{
	use \Blackajte\TraitsBundle\Traits\Nameable\NameableTrait;
}

```

Now you have name parameter 'string' in your class
```php

$class = new MyClass();

$class->setName($name);

$class->getName();//output $name

```