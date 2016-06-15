<?php
include_once "flip.php";
		if(isset($_GET['search']))
	 {
	  $keyword=$_GET['search'];
	//echo "gjhg";
		if(!empty($keyword))
		{
			$key=str_replace(" ","+",$keyword);
			
			
		}else
		{	//echo "gjhg";
			echo  '<div class="row">  
					<div class="col-md-4 col-md-offset-4"> 
					 <div class="alert alert-danger">You must supply some data</div>
					</div>
				</div>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>compare price</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>


</style>
</head>

<body>
<div class="container">
	<a href="<?php echo "getdata.php?search=".$key."&filter=0&s=search";?>" class="col-md-4 btn btn-info btn-block" >SHOW AMAZON</a>
	<a href="<?php echo "getdata.php?search=".$key."&filter=1&s=search";?>" class="col-xs-6 col-md-4 btn btn-info btn-block" >SHOW FLIPKART</a>
	<a href="<?php echo "getdata.php?search=".$key."&filter=2&s=search";?>" class="col-xs-6 col-md-4 btn btn-info btn-block" >SHOW BOTH</a>
	
</div>

</body>

</html>

<?php
		
	$demo=new process();
	$demo->flipkar($key);
	$demo->amazo($keyword);
	if($_GET['filter']=='0')
	{
		$demo->showamazon();
	}
	if($_GET['filter']=='1')
	{
		$demo->showflipkart();
	}
	if($_GET['filter']=='2')
	{
		$demo->showsorted();
	}
	
?>