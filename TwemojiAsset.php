<?php

namespace cozumel\twemoji;

use yii\web\AssetBundle;

class TwemojiAsset extends AssetBundle {

    public $sourcePath = '@vendor/cozumel/yii2-twemoji';
    public $js = [
        '//twemoji.maxcdn.com/2/twemoji.min.js?2.6',
        'js/twemoji.js',
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];

}