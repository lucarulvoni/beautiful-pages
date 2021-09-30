<?php
 require_once ('head.php');
 require_once ('functions.php');
 ?>

    <title><?php echo explode_title(); ?></title>
  </head>
  <body>
    <h1>Hello, siamo in <?php echo '<b>' . explode_title() . '</b>'; ?>!</h1>

    <?php   require_once('footer.php');  ?>