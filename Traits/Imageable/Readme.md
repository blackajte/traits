ImageableTrait
==============

for adding parameters (image) to your entity

Example
-------
in your Entity.orm.yml
```php
...........  
  fields:
    image:
      type: string
      length: 255
      nullable: false
...........
```


In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Imageable\ImageableInterface;

class MyClass implements ImageableInterface
{
	use \Blackajte\TraitsBundle\Traits\Imageable\ImageableTrait;
}

```

Now you have (image) in your Class
```php

$class = new MyClass();

$class->setImage($image);

$class->getImage();//output $image


```

ImageableCollectionTrait
=========================

for adding parameters (images) to your entity

Example
-------
in your Entity.orm.yml
```php
...........  
  fields:
    images:
      type: string
      length: 255
      nullable: false
...........
```


In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Imageable\ImageableCollectionInterface;

class MyClass implements ImageableCollectionInterface
{
	use \Blackajte\TraitsBundle\Traits\Imageable\ImageableCollectionTrait;
}

```

Now you have (image) in your Class
```php

$class = new MyClass();

$class->setImages($images);

$class->getImages();//output $images
$class->imagesAdd(ImageableInterface $image);
$class->imagesTakeOff(ImageableInterface $image);


```