<?php 
namespace kuakling\materialize;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Materialize javascript files.
 *
 * @author kuakling <kuakling@kuakling.name>
 * @since 2.0
 */
class MaterializeInitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kuakling/yii2-materialize/media';

    public $css = [
    	'css/custom.css',
    ];
    public $js = [
        'js/init.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'kuakling\materialize\MaterializePluginAsset',
    ];
    public $cssOptions = ['media' => 'screen,projection'];
}
