<?php
	class Image {
		private $image;

		public function __get($attribute){
			return $this->$attribute;
		}
		public function __set($attribute, $value){
			$this->$attribute = $value;
		}
	}
?>