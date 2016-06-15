<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compare Price</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
.product-box {
	border: 1px solid #eee;
	float: left;
	margin: 4px 4px 4px 4px;
	position: relative;
	width: 132px;
	padding: 4px;
	font-family: Helvetica;

}
.product-title h3{
	margin: 2px 3px 0 2px;
	min-width: 40px;
	font-size: 12px;
	line-height: 15px;
	color: #000;
	position: relative;
	text-align: center;
	display: block;
	overflow: hidden;
	height: 45px;
}

.product-price {
	text-align: center;
	color: #900;
	font-weight: bold;
}

.a-icon-cart {
	left: 2px;
	top: 2px;
	position: absolute;
	height: 25px;
	width: 25px;
	background-position: -35px -5px;
	background-image: url(../images/amzn-sprite.png);
	background-repeat: no-repeat;
	background-size: 400px 600px;
	-webkit-background-size: 400px 600px;
	display: inline-block;
	vertical-align: top;
}

.a-icon-shop-now {
	left: 2px;
	top: 2px;
	position: absolute;
	height: 25px;
	width: 25px;
	background: 0 0;
	display: inline-block;
	vertical-align: top;
}

.a-button {
	background: #d8dde6;
	display: block;
	padding: 0;
	vertical-align: middle;
	height: 31px;
	*height: 29px;
	border: 1px solid;
	border-color: #bcc1c8 #bababa #adb2bb;
	text-align: center;
	overflow: hidden;
	text-decoration: none!important;
	cursor: pointer;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	width: 100%;
	max-width: 130px;
	box-sizing: border-box;
	margin-top: 11px;
}


.a-button-text {
	position: relative;
	z-index: 10;
	color: #111;
	font-size: 12px;
	text-align: center;
	line-height: 29px;
	display: block;
	font-family: Arial,sans-serif;
	white-space: nowrap;
	background-color: transparent;
	margin: 0;
	border: 0;
	outline: 0;
	padding: 0 2px 0 29px;
}


.a-button-text.centered {
	padding: 0 2px;
}

.a-button-input {
	position: absolute;
	z-index: 20;
	height: 100%;
	width: 100%;
	left: 0;
	top: 0;
	background-color: #fff;
	outline: 0;
	border: 0;
	overflow: visible;
	cursor: pointer;
	opacity: .01;
	filter: alpha(opacity=1);
}


.a-button-primary {
	border-color: #cba957 #bf942a #aa8326;
	background: #f0c14b;
}

.a-button-primary:active {
	border-color: #aa8326 #bf942a #bf942a;
}

.a-button-primary:hover {
	border-color: #c59f43 #aa8326 #957321;
}

.a-button-primary:focus {
	outline: 0;
	border-color: #e47911;
	-webkit-box-shadow: 0 0 3px rgba(228,121,17,.5);
	-moz-box-shadow: 0 0 3px rgba(228,121,17,.5);
	box-shadow: 0 0 3px rgba(228,121,17,.5);
}

.a-button-inner {
	position: relative;
	height: 100%;
	overflow: hidden;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	text-align: center;
	cursor: pointer;
	display: block;
}

.a-button-primary .a-button-inner {
	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,.4) inset;
	-moz-box-shadow: 0 1px 0 rgba(255,255,255,.4) inset;
	box-shadow: 0 1px 0 rgba(255,255,255,.4) inset;
	background-color: #f7dfa5;
	background: -webkit-gradient(linear,left top,left bottom,from(#f7dfa5),to(#f0c14b));
	background: -webkit-linear-gradient(top,#f7dfa5,#f0c14b);
	background: -moz-linear-gradient(top,#f7dfa5,#f0c14b);
	background: -ms-linear-gradient(top,#f7dfa5,#f0c14b);
	background: -o-linear-gradient(top,#f7dfa5,#f0c14b);
	background: #f3d078;
}

.lt-ie9 .a-button-primary .a-button-inner {
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff7dfa5', endColorstr='#fff0c14b', GradientType=0);
}

.a-button-primary:active .a-button-inner {
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2) inset;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.2) inset;
	box-shadow: 0 1px 3px rgba(0,0,0,.2) inset;
	background-color: #f0c14b;
	background-image: none;
}

.lt-ie9 .a-button-primary:active .a-button-inner {
	filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.a-button-primary:hover .a-button-inner {
	background-color: #f5d78e;
	background: -webkit-gradient(linear,left top,left bottom,from(#f5d78e),to(#eeb933));
	background: -webkit-linear-gradient(top,#f5d78e,#eeb933);
	background: -moz-linear-gradient(top,#f5d78e,#eeb933);
	background: -ms-linear-gradient(top,#f5d78e,#eeb933);
	background: -o-linear-gradient(top,#f5d78e,#eeb933);
	background: #f1c860;
}

.lt-ie9 .a-button-primary:hover .a-button-inner {
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5d78e', endColorstr='#ffeeb933', GradientType=0);
}
</style>

<body>
	<div class="container"></div>
</body>
<?php

	$flip=array(array(),array(),array(),array());
	$amaz=array(array(),array(),array(),array());
class process{
	
	
	function flipkar($key){
		function sortByOrder($a, $b) {
          return $a[2]-$b[2];
          }
	include "clusterdev.flipkart-api.php";

//Replace <affiliate-id> and <access-token> with the correct values
$flipkart = new \clusterdev\Flipkart("rohitsain6", "f82316e42b114477b66a44c1b2c545a4", "json");

$url =  "https://affiliate-api.flipkart.net/affiliate/search/xml?query=";
$url=$url.$key."&resultCount=10";

     $details = $flipkart->call_url($url);
	$oXML = new SimpleXMLElement($details);
	global $flip;
	for ($i = 0; $i < 10; $i++) {
		   $flip[$i][0] =$oXML->products->productInfoList[$i]->productBaseInfo->productAttributes->imageUrls->entry[0]->value;
			$flip[$i][1]=$oXML->products->productInfoList[$i]->productBaseInfo->productAttributes->title;
	       $flip[$i][2]=$oXML->products->productInfoList[$i]->productBaseInfo->productAttributes->sellingPrice->amount;
			$flip[$i][3]=$oXML->products->productInfoList[$i]->productBaseInfo->productAttributes->productUrl;
	
	}
	 //usort($flip, 'sortByOrder');
} 
 

function amazo($keyword){
	
	include_once "amaz.php";
  global $amaz;
	
     for ($i = 0; $i < 10; $i++) 
		 {   
	 $amaz[$i][0]= $data->Items->Item[$i]->LargeImage->URL;
	 if($data->Items->Item[$i]->count()>7)
	 {
	 if($data->Items->Item[$i]->Offers->Offer->TotalOffers==0)
		 $amaz[$i][2]=$data->Items->Item[$i]->ItemAttributes->ListPrice->FormattedPrice;
	 else
	 $amaz[$i][2]=$data->Items->Item[$i]->Offers->Offer->OfferListing->Price->FormattedPrice;
	
			
	}
	else{
		$amaz[$i][2]=$data->Items->Item[$i]->ItemAttributes->ListPrice->FormattedPrice;
	}
	$amaz[$i][1]=$data->Items->Item[$i]->ItemAttributes->Title;
	$amaz[$i][3]=$data->Items->Item[$i]->DetailPageURL;
	}
		  //usort($amaz, 'sortByOrder');
	
}
function showamazon(){
	global $amaz;
	echo '<div class="container" align=center>';
	for($i=0;$i<10;$i++){
		
echo '<div class="product-box">
    <a target="_blank" href="'.$amaz[$i][3].'">
        <img src="'.$amaz[$i][0].'" width="120" height="160">
    </a>
    <div class="product-title">
        <h3>'.$amaz[$i][1].'</h3>
    </div>
    <p class="product-price">'.$amaz[$i][2].'
       <span style="color:#fff;">|</span>
   </p>
    <div>
        <span class="a-button a-button-primary">
            <a target="_blank" href="'.$amaz[$i][3].'" style="text-decoration:none">
                <span class="a-button-inner">
                    <img src="http://ddjax94hptnew.cloudfront.net/assets/images/Amazon-Favicon-64x64.png" class="a-icon a-icon-shop-now">
                    <input class="a-button-input" type="submit" value="Add to cart">
                    <span class="a-button-text">Shop Now</span>
                </span>
            </a>
        </span>
    </div>
</div>';
	}
	echo '</div>';

}
function showflipkart(){
	global $flip;
	
	{	echo '<div class="container" align=center>';
		for($i=0;$i<10;$i++){
				
		echo '<div class="product-box">
			<a target="_blank" href="'.$flip[$i][3].'">
				<img src="'.$flip[$i][0].'" width="120" height="160">
			</a>
			<div class="product-title">
				<h3>'.$flip[$i][1].'</h3>
			</div>
			<p class="product-price">'.$flip[$i][2].'
			   <span style="color:#fff;">|</span>
		   </p>
			<div>
				<span class="a-button a-button-primary">
					<a target="_blank" href="'.$flip[$i][3].'" style="text-decoration:none">
						<span class="a-button-inner">
							<img src="https://img1a.flixcart.com/www/promos/new/20150528-140547-favicon-retina.ico" class="a-icon a-icon-shop-now">
							<input class="a-button-input" type="submit" value="Add to cart">
							<span class="a-button-text">Shop Now</span>
						</span>
					</a>
				</span>
			</div>
		</div>';
	}
	echo '</div>';
	   
	}
}
function showsorted(){
	global $flip;
	global $amaz;
	$both=array(array(),array(),array(),array(),array());
	for ($i = 0; $i < 10; $i++) {
		   $both[$i][0]=$flip[$i][0];
			$both[$i][1]=$flip[$i][1];
			$both[$i][2]=$flip[$i][2];
			$both[$i][3]=$flip[$i][3];
			$both[$i][4]=0;
	
	}
	for ($i = 10; $i < 20; $i++) {
		   $both[$i][0]=$amaz[$i-10][0];
			$both[$i][1]=$amaz[$i-10][1];
			$both[$i][2]=$amaz[$i-10][2];
			$both[$i][3]=$amaz[$i-10][3];
			$both[$i][4]=1;
	}
	//usort($both,'sortByOrder');
	echo '<div class="container" align=center>';
	 for($i=0;$i<20;$i++){
				
		echo '<div class="product-box">
			<a target="_blank" href="'.$both[$i][3].'">
				<img src="'.$both[$i][0].'" width="120" height="160">
			</a>
			<div class="product-title">
				<h3>'.$both[$i][1].'</h3>
			</div>
			<p class="product-price">'.$both[$i][2].'
			   <span style="color:#fff;">|</span>
		   </p>
			<div>
				<span class="a-button a-button-primary">
					<a target="_blank" href="'.$both[$i][3].'" style="text-decoration:none">
						<span class="a-button-inner">
							<img src="';
							if($both[$i][4]==0)
							echo 'https://img1a.flixcart.com/www/promos/new/20150528-140547-favicon-retina.ico';
							else
							echo 'http://ddjax94hptnew.cloudfront.net/assets/images/Amazon-Favicon-64x64.png';	
						echo '" class="a-icon a-icon-shop-now">
							<input class="a-button-input" type="submit" value="Add to cart">
							<span class="a-button-text">Shop Now</span>
						</span>
					</a>
				</span>
			</div>
		</div>';
		
	}echo '</div>';

}
}	
?>