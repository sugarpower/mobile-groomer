<div class="header-container" style="background-color: #005f8b;color:#ffffff;">
	<div class="container-fluid header-container">
		<div class="row" >
			<div class="col-xs-12 col-sm-12 col-md-4 " style="height:120px;">
				 <a class="navbar-brand top-bar" href="<?php echo $root;?>"><img style="margin:auto;height:100px;margin-top:-5px;width:300px;" src="<?php echo $root; ?>/images/logo.png" ></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8">
				 <p class="navbar-brand top-bar">Dog Grooming now at your door step.</p>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default header-navbar" style="background-color: #1c4d6a;border-color: #1c4d6a;
">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $root;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<div class="container">
		  <ul class="nav navbar-nav">
			<li <?php if(strpos($_SERVER['SCRIPT_NAME'],"features")==false) {?> class="active"<?php }?>><a href="<?php echo $root;?>">Home <span class="sr-only">(current)</span></a></li>
			<li <?php if(strpos($_SERVER['SCRIPT_NAME'],"features")==true) {?> class="active"<?php }?> ><a href="<?php echo $root;?>features/">Features</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<?php if(!isset($_SESSION['userid'])){ ?>
			<li><a style="cursor:pointer;" data-toggle="modal" data-target="#registerModal" >Register</a></li>
			<?php }?>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<?php if(!isset($_SESSION['userid'])){ ?>
			<li><a style="cursor:pointer;" data-toggle="modal" data-target="#myModal" >Login</a></li>
			<?php } else{ ?>
			<li><a href="<?php echo $root;?>logout.php">Logout</a></li>
			<?php } ?>
		  </ul>
		</div>  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>