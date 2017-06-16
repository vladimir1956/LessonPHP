<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>

    <?php foreach ($data as $product) :  ?>

<section>
	<h1><?php echo $product->title; ?></h1>
	<article><?php echo $ptoduct->desc; ?></article>
    <p style="color:red;"><?php echo $product->price; ?></p>
</section>

<hr>

    <?php endforeach; ?>

    <?php
    $view = new \App\View();
    $view->display(__DIR__ . '/footer.php');
    ?>



</body>
</html>
