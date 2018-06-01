<?php
namespace humhub\modules\quotes\forms;

use Yii;

class QuotesConfigureForm extends \yii\base\Model
{

    public $panelTitle;
    public $height;
    public $quote1;
    public $quote2;
    public $writerquote1;
    public $writerquote2;
    public $quote3;
    public $quote4;
    public $writerquote3;
    public $writerquote4;
    public $quote5;
    public $quote6;
    public $writerquote5;
    public $writerquote6;
    public $quote7;
    public $quote8;
    public $writerquote7;
    public $writerquote8;
    public $quote9;
    public $quote10;
    public $writerquote9;
    public $writerquote10;
    public $quote11;
    public $quote12;
    public $writerquote11;
    public $writerquote12;

    public function rules()
    {
        return [
            [['panelTitle', 'height', 'quote1', 'quote2', 'writerquote1', 'writerquote2', 'quote3', 'quote4', 'writerquote3', 'writerquote4', 'quote5', 'quote6', 'writerquote5', 'writerquote6', 'quote7', 'quote8', 'writerquote7', 'writerquote8', 'quote9', 'quote10', 'writerquote9', 'writerquote10', 'quote11', 'quote12', 'writerquote11', 'writerquote12'], 'required'],
            

        ];
    }

    public function attributeLabels()
    {
        return [
            'panelTitle' => Yii::t('QuotesModule.base', 'The panel title for the dashboard widget.'),
            'height' => Yii::t('QuotesModule.base', 'Height of the widget'),
            'quote1' => Yii::t('QuotesModule.base', 'Quote 1'),
            'quote2' => Yii::t('QuotesModule.base', 'Quote 2'),
            'writerquote1' => Yii::t('QuotesModule.base', 'Writer quote 1'),
            'writerquote2' => Yii::t('QuotesModule.base', 'Writer quote 2'),
            'quote3' => Yii::t('QuotesModule.base', 'Quote 3'),
            'quote4' => Yii::t('QuotesModule.base', 'Quote 4'),
            'writerquote3' => Yii::t('QuotesModule.base', 'Writer quote 3'),
            'writerquote4' => Yii::t('QuotesModule.base', 'Writer quote 4'),
            'quote5' => Yii::t('QuotesModule.base', 'Quote 5'),
            'quote6' => Yii::t('QuotesModule.base', 'Quote 6'),
            'writerquote5' => Yii::t('QuotesModule.base', 'Writer quote 5'),
            'writerquote6' => Yii::t('QuotesModule.base', 'Writer quote 6'),
            'quote7' => Yii::t('QuotesModule.base', 'Quote 7'),
            'quote8' => Yii::t('QuotesModule.base', 'Quote 8'),
            'writerquote7' => Yii::t('QuotesModule.base', 'Writer quote 7'),
            'writerquote8' => Yii::t('QuotesModule.base', 'Writer quote 8'),
            'quote9' => Yii::t('QuotesModule.base', 'Quote 9'),
            'quote10' => Yii::t('QuotesModule.base', 'Quote 10'),
            'writerquote9' => Yii::t('QuotesModule.base', 'Writer quote 9'),
            'writerquote10' => Yii::t('QuotesModule.base', 'Writer quote 10'),
            'quote11' => Yii::t('QuotesModule.base', 'Quote 11'),
            'quote12' => Yii::t('QuotesModule.base', 'Quote 12'),
            'writerquote11' => Yii::t('QuotesModule.base', 'Writer quote 11'),
            'writerquote12' => Yii::t('QuotesModule.base', 'Writer quote 12'),
        ];
    }
}
