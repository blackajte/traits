LabelableTrait
==============

for adding label to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    label:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use Traits\Labelable\LabelableInterface;

class MyClass implements LabelableInterface
{
	use \Traits\Labelable\LabelableTrait;
}

```

Now you have label parameter 'string' in your class
```php

$class = new MyClass();

$class->setLabel($label);

$class->getLabel();//output $label

```