<?php

namespace app\components;

use TwitterAPIExchange;
use Yii;

/**
 * twitter api wrapper, providing short hand functions to twitter REST api https://dev.twitter.com/rest/public
 * api credentials is stored in config/params.php
 * functions will be added as needed
 */
class TwitterHelper {

	const BASE_URL = 'https://api.twitter.com/1.1/';

	const END_POINT_SEARCH = 'search/tweets.json';

	//TwitterAPIExchange instance
	private static $_twitter = null;

	/**
	 * get the TwitterAPIExchange instance
	 */
	public static function getTwitterAPI() {

		if (self::$_twitter === null) {
			$settings = Yii::$app->params['twitter'];
			self::$_twitter = new TwitterAPIExchange($settings);
		}

		return self::$_twitter;
	}

	/**
	 * search tweets, limit by $count
	 * https://dev.twitter.com/rest/public/search
	 *
	 * @param  string  $q      query operator
	 * @param  integer $count  limit count
	 * @return false|array     array of tweets, falue on failure
	 */
	public static function search($q, $count = 10) {

		$url = self::BASE_URL . self::END_POINT_SEARCH;

		$params = [
			'q' => $q,
			'count' => $count,
		];

		$getfield = '?' . http_build_query($params);

		$result = self::getTwitterAPI()
			->setGetfield($getfield)
			->buildOauth($url, 'GET') //GET must be upper
			->performRequest();

		$json = json_decode($result, true);

		if (!isset($json['statuses'])) {
			Yii::error($result);
			return false;
		}

		return $json['statuses'];
	}
}