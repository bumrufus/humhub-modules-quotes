<?php

use yii\helpers\Url;
use yii\helpers\Html;
use humhub\compat\CActiveForm;
?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('QuotesModule.base', '<strong>Quotes</strong> Module Configuration'); ?></div>
    <div class="panel-body">

        <br>

        <?php $form = CActiveForm::begin(); ?>
        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'panelTitle'); ?>
            <?php echo $form->textField($model, 'panelTitle', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'panelTitle'); ?>
        </div>

         <div class="form-group">
            <?php echo $form->labelEx($model, 'height'); ?>
            <?php echo $form->textField($model, 'height', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'height'); ?>
        </div>
        
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote1'); ?>
            <?php echo $form->textField($model, 'quote1', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote1'); ?>
            <?php echo $form->labelEx($model, 'writerquote1'); ?>
            <?php echo $form->textField($model, 'writerquote1', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote1'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote2'); ?>
            <?php echo $form->textField($model, 'quote2', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote2'); ?>
            <?php echo $form->labelEx($model, 'writerquote2'); ?>
            <?php echo $form->textField($model, 'writerquote2', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote2'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote3'); ?>
            <?php echo $form->textField($model, 'quote3', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote3'); ?>
            <?php echo $form->labelEx($model, 'writerquote3'); ?>
            <?php echo $form->textField($model, 'writerquote3', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote3'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote4'); ?>
            <?php echo $form->textField($model, 'quote4', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote4'); ?>
            <?php echo $form->labelEx($model, 'writerquote4'); ?>
            <?php echo $form->textField($model, 'writerquote4', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote4'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote5'); ?>
            <?php echo $form->textField($model, 'quote5', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote5'); ?>
            <?php echo $form->labelEx($model, 'writerquote5'); ?>
            <?php echo $form->textField($model, 'writerquote5', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote5'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote6'); ?>
            <?php echo $form->textField($model, 'quote6', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote6'); ?>
            <?php echo $form->labelEx($model, 'writerquote6'); ?>
            <?php echo $form->textField($model, 'writerquote6', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote6'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote7'); ?>
            <?php echo $form->textField($model, 'quote7', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote7'); ?>
            <?php echo $form->labelEx($model, 'writerquote7'); ?>
            <?php echo $form->textField($model, 'writerquote7', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote7'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote8'); ?>
            <?php echo $form->textField($model, 'quote8', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote8'); ?>
            <?php echo $form->labelEx($model, 'writerquote8'); ?>
            <?php echo $form->textField($model, 'writerquote8', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote8'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote9'); ?>
            <?php echo $form->textField($model, 'quote9', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote9'); ?>
            <?php echo $form->labelEx($model, 'writerquote9'); ?>
            <?php echo $form->textField($model, 'writerquote9', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote9'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote10'); ?>
            <?php echo $form->textField($model, 'quote10', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote10'); ?>
            <?php echo $form->labelEx($model, 'writerquote10'); ?>
            <?php echo $form->textField($model, 'writerquote10', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote10'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote11'); ?>
            <?php echo $form->textField($model, 'quote11', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote11'); ?>
            <?php echo $form->labelEx($model, 'writerquote11'); ?>
            <?php echo $form->textField($model, 'writerquote11', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote11'); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quote12'); ?>
            <?php echo $form->textField($model, 'quote12', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'quote12'); ?>
            <?php echo $form->labelEx($model, 'writerquote12'); ?>
            <?php echo $form->textField($model, 'writerquote12', ['class' => 'form-control']); ?>
            <?php echo $form->error($model, 'writerquote12'); ?>
        </div>
        


        <hr>
        <?php echo Html::submitButton(Yii::t('QuotesModule.base', 'Save'), ['class' => 'btn btn-primary']); ?>
        <a class="btn btn-default"
           href="<?php echo Url::to(['/admin/module']); ?>"><?php echo Yii::t('QuotesModule.base', 'Back to modules'); ?></a>

        <!-- show flash message after saving -->
        <?php echo humhub\widgets\DataSaved::widget(); ?>

        <?php CActiveForm::end(); ?>
    </div>
</div>
