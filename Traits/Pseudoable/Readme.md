PseudoableTrait
==============

for adding pseudo to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    pseudo:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Pseudoable\PseudoableInterface;

class MyClass implements PseudoableInterface
{
	use \Blackajte\TraitsBundle\Traits\Pseudoable\PseudoableTrait;
}

```

Now you have pseudo parameter 'string' in your class
```php

$class = new MyClass();

$class->setPseudo($pseudo);

$class->getPseudo();//output $label

```