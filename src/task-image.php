<?php
	class taskImage {
		private $connect;
		private $image;
		public function __construct(Conection $connect, Image $image){
			$this->connect = $connect->connect();
			$this->image = $image;
        }	
        public function update() {
			$query = 'update image set image1 = :image1, image2 = :image2, image3 = :image3';
			$stmt = $this->connect->prepare($query);
			$stmt->bindValue(':image1', $this->image->__get('image1'));
            $stmt->bindValue(':image2', $this->image->__get('image2'));
			$stmt->bindValue(':image3', $this->image->__get('image3'));
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