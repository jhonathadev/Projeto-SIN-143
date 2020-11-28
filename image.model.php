<?php
	class Image {
		private $id = 1;
		private $image1;
        private $image2;
        private $image3;

		public function __get($attribute){
			return $this->$attribute;
		}
		public function __set($attribute, $value){
			$this->$attribute = $value;
		}
	}
?>