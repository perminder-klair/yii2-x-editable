<?php

namespace kato\xeditable;

use kato\xeditable\assets\XEditableAsset;

class XEditable extends \yii\base\widget
{
    /**
     * Initializes the widget
     * @throw InvalidConfigException
     */
    public function init()
    {
        parent::init();

        \Yii::setAlias('@xeditable', dirname(__FILE__));
        $this->registerAssets();
    }

    public function run()
    {
        return '<a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" style="color: gray;" data-original-title="" title="">not selected</a>';
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        XEditableAsset::register($view);

        $js = '$("#sex").editable({
        prepend: "not selected",
        source: [
            {value: 1, text: "Male"},
            {value: 2, text: "Female"}
        ],
        display: function(value, sourceData) {
        var colors = {"": "gray", 1: "green", 2: "blue"},
                 elem = $.grep(sourceData, function(o){return o.value == value;});

             if(elem.length) {
                 $(this).text(elem[0].text).css("color", colors[value]);
             } else {
                 $(this).empty();
             }
        }
    });';

    $view->registerJs($js);
}
}
