SeoableTrait
==================

for adding parameters (titlePage, descriptionPage, urlPage) to your entity

Example
-------
in your Entity.orm.yml
```php
...........  
  fields:
    titlePage:
      type: string
      length: 255
    urlPage:
      type: string
      length: 255
      nullable: true
    descriptionPage:
      type: text
      nullable: true
...........
```


In your Entity
```php
........

use \Blackajte\TraitsBundle\Traits\Seoable\SeoableInterface;

class MyClass implements SeoableInterface
{
	use \Blackajte\TraitsBundle\Traits\Seoable\SeoableTrait;
}

```

Now you have (titlePage, descriptionPage, urlPage) in your Class
```php

$class = new MyClass();

$class->setTitlePage($title);
$class->setDescriptionPage($description);
$class->setUrlPage($url);


$class->getTitlePage();//output $titlePage
$class->getDescriptionPage();//output $descriptionPage
$class->getUrlPage();//output $urlPage


```