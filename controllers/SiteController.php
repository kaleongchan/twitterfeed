<?php

namespace app\controllers;

use app\components\TwitterHelper;
use Yii;
use yii\web\Controller;

class SiteController extends Controller {

	public function actionIndex() {

		$q = trim(Yii::$app->getRequest()->get('q'));

		//search 'engineering' by default
		if (empty($q)) {
			$q = 'engineering';
		}

		$tweets = TwitterHelper::search($q);

		return $this->render('index', ['tweets' => $tweets, 'q' => $q]);
	}

}
