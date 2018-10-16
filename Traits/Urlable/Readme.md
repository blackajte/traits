UrlableTrait
=================

for adding url to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    url:
      type: string
      length: 255
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Urlable\UrlableInterface;

class MyClass implements UrlableInterface
{
	use \Blackajte\TraitsBundle\Traits\Urlable\UrlableTrait;
}

```

Now you have url parameter 'string' in your class
```php

$class = new MyClass();

$class->setUrl($url);

$class->getUrl();//output $url

```

RouteableTrait
=================

for adding route to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    route:
      type: string
      length: 255
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Urlable\RouteableInterface;

class MyClass implements RouteableInterface
{
  use \Blackajte\TraitsBundle\Traits\Urlable\RouteableTrait;
}

```

Now you have Route parameter 'string' in your class
```php

$class = new MyClass();

$class->setRoute($route);

$class->getRoute();//output $route

```


PathableTrait
=================

for adding path to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    path:
      type: string
      length: 255
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Urlable\PathableInterface;

class MyClass implements PathableInterface
{
	use \Blackajte\TraitsBundle\Traits\Urlable\PathableTrait;
}

```

Now you have path parameter 'string' in your class
```php

$class = new MyClass();

$class->setPath($path);

$class->getPath();//output $path

```


LinkableTrait
=================

for adding link to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    link:
      type: string
      length: 255
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Urlable\LinkableInterface;

class MyClass implements LinkableInterface
{
	use \Blackajte\TraitsBundle\Traits\Urlable\LinkableTrait;
}

```

Now you have link parameter 'string' in your class
```php

$class = new MyClass();

$class->setLink($link);

$class->getLink();//output $link

```