<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 18.09.2015
 */
namespace skeeks\template\smarty;

use yii\web\AssetBundle;

class SmartyAsset extends AssetBundle
{
    public $sourcePath = '@skeeks/template/smarty/src/HTML/assets/';

    /**
     * @param string $asset
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    static public function getAssetUrl($asset)
    {
        return \Yii::$app->assetManager->getAssetUrl(\Yii::$app->assetManager->getBundle(static::className()), $asset);
    }
}
