<?php namespace kuakling\materialize;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Materialize javascript files.
 *
 * @author kuakling <kuakling@kuakling.name>
 * @since 2.0
 */
class MaterializePluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/materialize/dist';
    public $js = [
        'js/materialize.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'kuakling\materialize\MaterializeAsset',
    ];
}
