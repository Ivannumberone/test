<?php
namespace models;
class ModelProduct 
{	
   public $id;
   public $price;
   public $name;
   public static function getListProducts()
   {
	   global $pdo;
	   $result = array();
	   $query = 'SELECT id,name,price FROM tmp.product;';
	   foreach ($pdo->query($query) as $row) {
		   $tmp = new ModelProduct;
		   $tmp->id = $row['id'];
		   $tmp->price = $row['price'];
		   $tmp->name = $row['name'];
	       array_push($result,$tmp);
	   }	   
	   return $result;	   
   }
   public static function add($product)
   {
	   global $pdo;
	   $stmt = $pdo->prepare("INSERT INTO tmp.product (name,price) VALUES(:name,:price);");
	   $stmt->bindParam(':name',$product->name);
	   $stmt->bindParam(':price',$product->price);
	   $stmt->execute();
   }
}
