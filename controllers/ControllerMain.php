<?php

namespace controllers;
class ControllerMain extends Controller
{    
	public function actionView()
	{
		$products = \models\ModelProduct::getListProducts();		
		self::$contentView = 'ProductView.php';
		require_once '/../views/TemplateView.php';	
	}
}