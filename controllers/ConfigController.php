<?php

namespace humhub\modules\quotes\controllers;

use Yii;
use humhub\modules\admin\components\Controller;
use humhub\modules\quotes\forms\QuotesConfigureForm;
use humhub\models\Setting;



class ConfigController extends Controller
{

    /**
     * Configuration Action for Super Admins
     */
    public function actionConfig()
    {
        $form = new quotesConfigureForm();
        $form->panelTitle = Setting::Get('panelTitle', 'quotes');
        $form->height = Setting::Get('height', 'quotes');
        $form->quote1 = Setting::Get('quote1', 'quotes');
        $form->quote2 = Setting::Get('quote2', 'quotes');
        $form->writerquote1 = Setting::Get('writerquote1', 'quotes');
        $form->writerquote2 = Setting::Get('writerquote2', 'quotes');
        $form->quote3 = Setting::Get('quote3', 'quotes');
        $form->quote4 = Setting::Get('quote4', 'quotes');
        $form->writerquote3 = Setting::Get('writerquote3', 'quotes');
        $form->writerquote4 = Setting::Get('writerquote4', 'quotes');
        $form->quote5 = Setting::Get('quote5', 'quotes');
        $form->quote6 = Setting::Get('quote6', 'quotes');
        $form->writerquote5 = Setting::Get('writerquote5', 'quotes');
        $form->writerquote6 = Setting::Get('writerquote6', 'quotes');
        $form->quote7 = Setting::Get('quote7', 'quotes');
        $form->quote8 = Setting::Get('quote8', 'quotes');
        $form->writerquote7 = Setting::Get('writerquote7', 'quotes');
        $form->writerquote8 = Setting::Get('writerquote8', 'quotes');
        $form->quote9 = Setting::Get('quote9', 'quotes');
        $form->quote10 = Setting::Get('quote10', 'quotes');
        $form->writerquote9 = Setting::Get('writerquote9', 'quotes');
        $form->writerquote10 = Setting::Get('writerquote10', 'quotes');
        $form->quote11 = Setting::Get('quote11', 'quotes');
        $form->quote12 = Setting::Get('quote12', 'quotes');
        $form->writerquote11 = Setting::Get('writerquote11', 'quotes');
        $form->writerquote12 = Setting::Get('writerquote12', 'quotes');

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->panelTitle = Setting::Set('panelTitle', $form->panelTitle, 'quotes');
            $form->height = Setting::Set('height', $form->height, 'quotes');
            $form->quote1 = Setting::Set('quote1', $form->quote1, 'quotes');
            $form->quote2 = Setting::Set('quote2', $form->quote2, 'quotes');
            $form->writerquote1 = Setting::Set('writerquote1', $form->writerquote1, 'quotes');
            $form->writerquote2 = Setting::Set('writerquote2', $form->writerquote2, 'quotes');
            $form->quote3 = Setting::Set('quote3', $form->quote3, 'quotes');
            $form->quote4 = Setting::Set('quote4', $form->quote4, 'quotes');
            $form->writerquote3 = Setting::Set('writerquote3', $form->writerquote3, 'quotes');
            $form->writerquote4 = Setting::Set('writerquote4', $form->writerquote4, 'quotes');
            $form->quote5 = Setting::Set('quote5', $form->quote5, 'quotes');
            $form->quote6 = Setting::Set('quote6', $form->quote6, 'quotes');
            $form->writerquote5 = Setting::Set('writerquote5', $form->writerquote5, 'quotes');
            $form->writerquote6 = Setting::Set('writerquote6', $form->writerquote6, 'quotes');
            $form->quote7 = Setting::Set('quote7', $form->quote7, 'quotes');
            $form->quote8 = Setting::Set('quote8', $form->quote8, 'quotes');
            $form->writerquote7 = Setting::Set('writerquote7', $form->writerquote7, 'quotes');
            $form->writerquote8 = Setting::Set('writerquote8', $form->writerquote8, 'quotes');
            $form->quote9 = Setting::Set('quote9', $form->quote9, 'quotes');
            $form->quote10 = Setting::Set('quote10', $form->quote10, 'quotes');
            $form->writerquote9 = Setting::Set('writerquote9', $form->writerquote9, 'quotes');
            $form->writerquote10 = Setting::Set('writerquote10', $form->writerquote10, 'quotes');
            $form->quote11 = Setting::Set('quote11', $form->quote11, 'quotes');
            $form->quote12 = Setting::Set('quote12', $form->quote12, 'quotes');
            $form->writerquote11 = Setting::Set('writerquote11', $form->writerquote11, 'quotes');
            $form->writerquote12 = Setting::Set('writerquote12', $form->writerquote12, 'quotes');

            Yii::$app->getSession()->setFlash('data-saved', Yii::t('AdminModule.controllers_SettingController', 'Saved'));
            $this->redirect(['/quotes/config/config']);
        }

        return $this->render('config', ['model' => $form]);
    }
}