<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Site para publicação de documentação técnica e diarios de bordo">
        <meta name="author" content="Equipe WorkLess">
        <meta name="keywords" content="diario de bordo, tcc, documentação, wkless, online">
        <link rel="icon" href="favicon.ico">
        <title>DBO - <?php echo $title;?></title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://<?php echo HOST_PATH; ?>/css/style.css" rel="stylesheet">
    </head>
 
    <body>
         
        <?php 
        	if (isset($viewName)) { 
        		$path = VIEW_PATH . $viewName . '.php'; 
        		if (file_exists($path)) { 
        			require_once $path; 
        		} 
        	} 
        ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo HOST_PATH; ?>/js/bootstrap-notify.min.js"></script>
    <script src="http://<?php echo HOST_PATH; ?>/js/ie10-viewport-bug-workaround.js"></script>
    <?php if(isset($script)) { ?>
        <script src="http://<?php echo HOST_PATH.'/js/'.$script?>"></script>
    <?php }?>
 
    </body>
</html>