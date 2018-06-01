<?php

namespace humhub\modules\quotes;

use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\quotes\widgets\QuotesSidebarWidget;

class Module extends \humhub\components\Module
{

    public static function onSidebarInit($event)
    {
        $event->sender->addWidget(QuotesSidebarWidget::className(), [], ['sortOrder' => 250]);
    }

    public function getConfigUrl()
    {
        return Url::to(['/quotes/config/config']);
    }

    public function enable()
    {
        parent::enable();
        Setting::Set('panelTitle', 'Quotes', 'quotes');
        Setting::Set('height', 'Height', 'quotes');
        Setting::Set('quote1', 'Quote1', 'quotes');
        Setting::Set('quote2', 'Quote2', 'quotes');
        Setting::Set('writerquote1', 'WriterQuote1', 'quotes');
        Setting::Set('writerquote2', 'WriterQuote2', 'quotes');
        Setting::Set('quote3', 'Quote3', 'quotes');
        Setting::Set('quote4', 'Quote4', 'quotes');
        Setting::Set('writerquote3', 'WriterQuote3', 'quotes');
        Setting::Set('writerquote4', 'WriterQuote4', 'quotes');
        Setting::Set('quote5', 'Quote5', 'quotes');
        Setting::Set('quote6', 'Quote6', 'quotes');
        Setting::Set('writerquote5', 'WriterQuote5', 'quotes');
        Setting::Set('writerquote6', 'WriterQuote6', 'quotes');
        Setting::Set('quote7', 'Quote7', 'quotes');
        Setting::Set('quote8', 'Quote8', 'quotes');
        Setting::Set('writerquote7', 'WriterQuote7', 'quotes');
        Setting::Set('writerquote8', 'WriterQuote8', 'quotes');
        Setting::Set('quote9', 'Quote9', 'quotes');
        Setting::Set('quote10', 'Quote10', 'quotes');
        Setting::Set('writerquote9', 'WriterQuote9', 'quotes');
        Setting::Set('writerquote10', 'WriterQuote10', 'quotes');
        Setting::Set('quote11', 'Quote11', 'quotes');
        Setting::Set('quote12', 'Quote12', 'quotes');
        Setting::Set('writerquote11', 'WriterQuote11', 'quotes');
        Setting::Set('writerquote12', 'WriterQuote12', 'quotes');
    }
}
