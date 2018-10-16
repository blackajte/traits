ValidateableTrait
===================

for adding validate and validateAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    validate:
      type: string
      nullable: true
    validateAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Traits\Validateable\ValidateableInterface;

class MyClass implements ValidateableInterface
{
	use \Traits\Validateable\ValidateableTrait;
}

```

Now you have validate and validateAt parameter 'string' and 'DateTimeInterface' in your class
```php

$class = new MyClass();

$class->setvalidate($validate);

$class->getvalidate();//output $validate

$class->setvalidateAt($validateAt = new DateTime());

$class->getvalidateAt();//output $validateAt


```

