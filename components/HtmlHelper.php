<?php

namespace app\components;

use yii\helpers\Html;

class HtmlHelper extends Html {

	public static function makeClickable($text) {
		$text = self::makeUrlClickable($text);
		$text = self::makeHashTagClickable($text);
		$text = self::makeUserNameClickable($text);

		return $text;
	}

	/**
	 * convert url to be clickable
	 * @param  string $text text with urls
	 * @return string       text with clickable urls
	 */
	public static function makeUrlClickable($text) {
		return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1" target="_blank">$1</a>', $text);
	}

	/**
	 * convert #hashtag to be clickable
	 * @param  string $text text with #hashtag
	 * @return string       text with clickable #hashtag
	 */
	public static function makeHashTagClickable($text) {
		return preg_replace('/\B#(\w*[a-zA-Z]+\w*)/', '<a href="/?q=%23$1">#$1</a>', $text);
	}

	/**
	 * convert @username to be clickable
	 * @param  string $text text with @username
	 * @return string       text with clickable @username
	 */
	public static function makeUserNameClickable($text) {
		return preg_replace('/\B@(\w*[a-zA-Z]+\w*)/', '<a href="https://twitter.com/$1" target="_blank">@$1</a>', $text);
	}

}