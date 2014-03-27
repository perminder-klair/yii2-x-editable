<?php

namespace kato\xeditable\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for XEditable Widget
 */
class XEditableAsset extends AssetBundle
{

    public $sourcePath = '@xeditable/bower_components';

    public $js = [
        "x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"
    ];

    public $css = [
        "x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css"
    ];

    /**
     * @var array
     */
    public $publishOptions = [
        'forceCopy' => true
    ];

}