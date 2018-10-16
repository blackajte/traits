OpenGraphableTrait
==================

for adding parameters (ogType, ogTitle, ogDescription, ogMedia) to your entity

Example
-------
in your Entity.orm.yml
```php
...........  
  fields:
    ogType:
      type: string
      length: 255
    ogTitle:
      type: string
      length: 255
      nullable: true
    ogDescription:
      type: text
      nullable: true
    ogMedias:
      type: text
      nullable: true
...........
```


In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\OpenGraphable\OpenGraphableInterface;

class MyClass implements OpenGraphableInterface
{
	use \Blackajte\TraitsBundle\Traits\OpenGraphable\OpenGraphableTrait;
}

```

Now you have (ogType, ogTitle, ogDescription, ogMedia) in your Class
```php

$class = new MyClass();

$class->setOgType($type);
$class->setOgTitle($title);
$class->setOgDescription($description);
$class->setOgMedias($medias);


$class->getOgType();//output $type
$class->getOgTitle();//output $title
$class->getOgDescription();//output $description
$class->getOgMedias();//output $medias ArrayCollection


```