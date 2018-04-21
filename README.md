Yii2 Image Cropper
==================

[![Latest Stable Version](https://poser.pugx.org/cozumel/yii2-twemoji/v/stable)](https://packagist.org/packages/cozumel/yii2-twemoji) 
[![Total Downloads](https://poser.pugx.org/cozumel/yii2-twemoji/downloads)](https://packagist.org/packages/cozumel/yii2-twemoji) 
[![License](https://poser.pugx.org/cozumel/yii2-twemoji/license)](https://packagist.org/packages/cozumel/yii2-twemoji)

A simple way to add [Twemoji](https://github.com/twitter/twemoji) support to your Yii2 project.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist cozumel/yii2-twemoji "*"
```

or add

```
"cozumel/yii2-twemoji": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use cozumel\twemoji\TwemojiAsset;

TwemojiAsset::register($this);
```

Css
-----
Because every project will have different size requirements, the css is not part of the extension.
The default size of the emojis is 72x72. You can change this easily with some css.
```css
img.emoji {
  height: 1em;
  width: 1em;
  margin: 0 .05em 0 .1em;
  vertical-align: -0.1em;
}
```