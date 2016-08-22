<?php

class URLShortenerService {

	private $url;
	private $length;

	public function __construct(string $url) {
		$this->url = $url;
		$this->length = 8;
	}

	public function getUrlShortened() {
		return $url . '/' . self::
	}

	private function generateRandomString() {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $this->length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

}
