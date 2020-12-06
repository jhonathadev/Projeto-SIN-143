<?php
	class taskImage {
		private $connect;
		private $image;
		public function __construct(Conection $connect, Image $image){
			$this->connect = $connect->connect();
			$this->image = $image;
        }	
        public function insert() {
			$query = 'insert into image (image) values (:image)';
			$stmt = $this->connect->prepare($query);
			$stmt->bindValue(':image', $this->image->__get('image'));
   
			if($stmt->execute()) {
				echo "Sucesso ao atualizar ";
			}else{
				echo "Erro ao atualizar";
			}
		} 
		public function read() {
			$query = 'select * from image';
			$stmt = $this->connect->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}
    }   
 ?>