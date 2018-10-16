InableTrait
==============

for adding in to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    in:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Hitable\InableInterface;

class MyClass implements InableInterface
{
	use \Blackajte\TraitsBundle\Traits\Hitable\InableTrait;
}

```

Now you have in parameter 'integer' in your class
```php

$class = new MyClass();

$class->setIn($in);

$class->getIn();//output $in

```

OutableTrait
==============

for adding out to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    out:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Hitable\OutableInterface;

class MyClass implements OutableInterface
{
	use \Blackajte\TraitsBundle\Traits\Hitable\OutableTrait;
}

```

Now you have out parameter 'integer' in your class
```php

$class = new MyClass();

$class->setOut($out);

$class->getOut();//output $out

```


ViewableTrait
==============

for adding view to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    view:
      type: integer
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Hitable\ViewableInterface;

class MyClass implements ViewableInterface
{
	use \Blackajte\TraitsBundle\Traits\Hitable\ViewableTrait;
}

```

Now you have view parameter 'integer' in your class
```php

$class = new MyClass();

$class->setView($view);

$class->getView();//output $view

```