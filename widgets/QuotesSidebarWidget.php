<?php

namespace humhub\modules\quotes\widgets;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\user\components\Session;
use yii\web\HttpException;

class QuotesSidebarWidget extends \yii\base\Widget
{

    /**
     * Execute widget
     */
    public function run()
    {
       

        return $this->render('quotes', array(
                    
                    'title' => Setting::Get('panelTitle', 'quotes'),
			'height' => Setting::Get('height', 'quotes'),
					'titlequote1' => Setting::Get('quote1', 'quotes'),
					'titlequote2' => Setting::Get('quote2', 'quotes'),
			'titlequote3' => Setting::Get('quote3', 'quotes'),
			'titlequote4' => Setting::Get('quote4', 'quotes'),
			'titlequote5' => Setting::Get('quote5', 'quotes'),
			'titlequote6' => Setting::Get('quote6', 'quotes'),
			'titlequote7' => Setting::Get('quote7', 'quotes'),
			'titlequote8' => Setting::Get('quote8', 'quotes'),
			'titlequote9' => Setting::Get('quote9', 'quotes'),
			'titlequote10' => Setting::Get('quote10', 'quotes'),
			'titlequote11' => Setting::Get('quote11', 'quotes'),
			'titlequote12' => Setting::Get('quote12', 'quotes'),
			'titlewriterquote1' => Setting::Get('writerquote1', 'quotes'),
			'titlewriterquote2' => Setting::Get('writerquote2', 'quotes'),
			'titlewriterquote3' => Setting::Get('writerquote3', 'quotes'),
			'titlewriterquote4' => Setting::Get('writerquote4', 'quotes'),
			'titlewriterquote5' => Setting::Get('writerquote5', 'quotes'),
			'titlewriterquote6' => Setting::Get('writerquote6', 'quotes'),
			'titlewriterquote7' => Setting::Get('writerquote7', 'quotes'),
			'titlewriterquote8' => Setting::Get('writerquote8', 'quotes'),
			'titlewriterquote9' => Setting::Get('writerquote9', 'quotes'),
			'titlewriterquote10' => Setting::Get('writerquote10', 'quotes'),
			'titlewriterquote11' => Setting::Get('writerquote11', 'quotes'),
			'titlewriterquote12' => Setting::Get('writerquote12', 'quotes')
        ));
    }

}

?>
