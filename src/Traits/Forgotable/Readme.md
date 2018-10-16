ForgotableTrait
===================

for adding forgot and forgotAt to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    forgot:
      type: string
      nullable: true
    forgotAt:
      type: datetime
      nullable: true
...........
```

In your Entity
```php
........

use \Traits\Forgotable\ForgotableInterface;

class MyClass implements ForgotableInterface
{
	use \Traits\Forgotable\ForgotableTrait;
}

```

Now you have forgot and forgotAt parameter 'string' and 'DateTimeInterface' in your class
```php

$class = new MyClass();

$class->setForgot($forgot);

$class->getForgot();//output $forgot

$class->setForgotAt($forgotAt = new DateTime());

$class->getForgotAt();//output $forgotAt


```

