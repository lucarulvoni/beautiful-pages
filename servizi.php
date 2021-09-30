<?php
 require_once ('head.php');
 require_once ('functions.php');
 ?>

    <title><?php echo explode_title(); ?></title>
  </head>
  <body>
    <h1>Hello, siamo in <?php echo '<b>' . explode_title() . '</b>'; ?>!</h1>

    <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    <?php   require_once('footer.php');  ?>