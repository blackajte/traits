IpableTrait
==============

for adding in to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    ip:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Ipable\IpableInterface;

class MyClass implements IpableInterface
{
	use \Blackajte\TraitsBundle\Traits\Ipable\IpableTrait;
}

```

Now you have in parameter 'string' in your class
```php

$class = new MyClass();

$class->setIp($ip);

$class->getIp();//output $ip

```

GeoIpableTrait
==============

for adding in to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    ip:
      type: string
      nullable: false
    city:
      type: string
      nullable: false
    country:
      type: string
      nullable: false
    continent:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Ipable\GeoIpableInterface;

class MyClass implements GeoIpableInterface
{
	use \Blackajte\TraitsBundle\Traits\Ipable\GeoIpableTrait;
}

```

Now you have in parameter 'string' in your class
```php

$class = new MyClass();

$class->setIp($ip);

$class->getIp();//output $ip
$class->getCity();//output $city
$class->getCountry();//output $country
$class->getContinent();//output $continent

```


InfoDevicepableTrait
==============

for adding in to your class

Example
-------
in your Entity.orm.yml
```php
...........
fields:
    HttpUserAgent:
      type: string
      nullable: false
...........
```

In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Ipable\InfoDeviceableInterface;

class MyClass implements InfoDeviceableInterface
{
	use \Blackajte\TraitsBundle\Traits\Ipable\InfoDeviceableTrait;
}

```

Now you have in parameter 'string' in your class
```php

$class = new MyClass();

$class->setHttpUserAgent($HttpUserAgent);

$class->getHttpUserAgent();//output $HttpUserAgent
$class->getBrowser();//output $browser
$class->getOs();//output $os
$class->getDevice();//output $device

```
