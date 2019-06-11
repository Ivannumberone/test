<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="<?=BASE_URL?>css/reset.css" rel="stylesheet" />
        <link href="<?=BASE_URL?>css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?=BASE_URL?>css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?=BASE_URL?>css/styles.css" rel="stylesheet" />
    	<title>Товары</title>	
	</head>
	<body>
        <div class="main">
		<h1 class="bg-success"><a href="<?=BASE_URL?>"> Просмотр </a> <a href="<?=BASE_URL.'add/' ?>"> Добавить </a> </h1>        
        <?php include '/../views/'.\controllers\Controller::$contentView ?>
		</div>				
	</body>
</html>