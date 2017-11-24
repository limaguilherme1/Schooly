
<?php setlocale(LC_TIME, 'pt_BR.utf-8', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); ?>


<nav class="navbar navbar-default navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only"><a href="logout.php">Logout</a></span>
                        <span class="sr-only">Toggle navigation</span>                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
      <a class="navbar-brand" href="menu.php">Menu</a>
       <span class="sr-only"><a href="logout.php">Logout</a></span>
    </div>
    <div class="collapse navbar-collapse ">

      <ul class="nav navbar-nav navbar-right">
        <h6 class="simple-text hidden-sm hidden-md hidden-xs">
          <?php echo strftime('%A, %d de %B de %Y', strtotime('today')); ?>
        </h6>
        <h6 class="simple-text hidden-sm hidden-md hidden-xs" id="txt"></h6>
      </ul>
    </div>
  </div>
</nav>