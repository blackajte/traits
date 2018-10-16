IdentifiableTrait
=================

for adding id to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    id:
      type: integer
      id: true
      generator:
        strategy: identity
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Identifiable\IdentifiableInterface;

class MyClass implements IdentifiableInterface
{
	use \Blackajte\TraitsBundle\Traits\Identifiable\IdentifiableTrait;
}

```

Now you have id parameter 'integer' in your class
```php

$class = new MyClass();

$class->setId($id);

$class->getId();//output $id

```