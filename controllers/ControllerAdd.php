<?php 
namespace controllers;
class ControllerAdd extends Controller
{   	
    
	public function add()
	{
		if (empty($_POST['name']) || empty($_POST['price']))
			return;
		$name = \SqlHelper::GetPostStr('name');		
		$price = \SqlHelper::GetPostDouble('price');
		if ($name != '')
		{			
			$tmp = new \Models\ModelProduct();
			$tmp->name = $name;
			$tmp->price = $price;
			\models\ModelProduct::add($tmp);
		}
	}
	public function actionView()
	{		
	    $this->add();
		self::$contentView = 'AddView.php';
		require_once '/../views/TemplateView.php';	 
	}	
}