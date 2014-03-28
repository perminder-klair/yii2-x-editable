<?php

namespace kato\xeditable\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for XEditable Widget
 */
class XEditableAsset extends AssetBundle
{

    public function init()
	{
		$this->setSourcePath('@xeditable/bower_components');
		$this->setupAssets('js', ['x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min']);
		$this->setupAssets('css', ['x-editable/dist/bootstrap3-editable/css/bootstrap-editable']);
		parent::init();
	}

}
