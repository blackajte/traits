DraftableTrait
================

for adding draft to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    draft:
      type: bool
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Draftable\DraftableInterface;

class MyClass implements DraftableInterface
{
	use \Blackajte\TraitsBundle\Traits\Draftable\DraftableTrait;
}

```

Now you have draft parameter 'bool' in your class
```php

$class = new MyClass();

$class->setDraft($draft);

$class->getDraft();//output $draft bool

```