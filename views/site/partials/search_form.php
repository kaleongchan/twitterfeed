<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
	'id' => 'search-form',
	'method' => 'get',
	'action' => '',
]);

echo Html::input('text', 'q', $q, ['placeholder' => 'Search Twitter', 'class' => 'form-control']);

echo Html::submitButton('Search', ['class' => 'hidden']);

ActiveForm::end();