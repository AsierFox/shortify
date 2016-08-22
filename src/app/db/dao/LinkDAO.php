<?php

class LinkDAO {

	private $id;
	private $url;
	private $cutback;
	private $timestamp;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getCutback() {
        return $this->cutback;
    }

    public function setCutback($cutback) {
        $this->cutback = $cutback;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

}
