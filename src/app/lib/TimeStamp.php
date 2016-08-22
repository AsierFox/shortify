<?php

/**
 * Util class for generating Time Stamps.
 */
abstract class TimeStamp {

	static private $format = 'Y-m-d H:i:s';

	private static function createTimeStamp() {
		return new DateTime();
	}

	public static function generateTimeStamp() {
		return self::createTimeStamp()->format(self::$format);
	}

}
