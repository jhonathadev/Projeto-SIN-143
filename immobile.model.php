<?php
	class Immobile {
		private $id;
		private $title;
		private $image1;
		private $image2;
		private $city;
		private $state;
        private $value_daily;
        private $phone;
		private $description;

		public function __get($attribute){
			return $this->$attribute;
		}
		public function __set($attribute, $value){
			$this->$attribute = $value;
		}
	}
?>