<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->images);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
	return $r."<img src='images/$o'>";
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ear Audio Store Single Item: <?= $product->title?></title>
	<?include "parts/meta.php" ?>
</head>
<body>
	<?include "parts/navbar.php" ?>

	<div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-7">
            <div class="card soft">
               <div class="image-main">
                  <img src="images/<?= $product->main_image ?>" alt="">
               </div>
               <div class="image-thumbs">
                  <?= $thumbs_elements ?>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" method="post" action="product_actions.php?action=add-to-cart">
               <input type="hidden" name="product-id" value="<?= $product->id ?>">
               <div class="card-section">
                  <h2><?= $product->title ?></h2>
                  <div>&dollar;<?= $product->price ?></div>
               </div>
               <div class="card-section">
                  <div class="form-control">
                     
                     <label for="product-amount" class="form-label">Amount</label>
                     <div class="form-select">
                        <select name="product-amount" id="product-amount">
                           <!-- option[value=$]*10>{$} -->
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-control">
                     
                     <label for="product-color" class="form-label">Color</label>
                     <div class="form-select">
                        <select name="product-color" id="product-color">
                           <option value="red">Red</option>
                           <option value="green">Green</option>
                           <option value="blue">Blue</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-control">
                     <input type="submit" class="form-button" value="Add To Cart">
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="card soft medium">
         <p><?= $product->description ?></p>
      </div>
         <h2>Related Products</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  WHERE id in (4,6,8)
               "),
               'makeProductList'
            );

            ?>
         </div>
   </div>

</body>
</html>

<!--Image Credits -->
<!--https://www.techradar.com/news/audio/best-in-ear-headphones-1276925-->
<!--https://www.techradar.com/news/audio/portable-audio/best-headphones-1280340-->
<!--https://www.pocket-lint.com/headphones/buyers-guides/beats/140769-best-beats-headphones-wireless-and-wired-earphones-earbuds-and-over-ear-headphones-to-buy-->
<!--https://www.beatsbydre.com/headphones/beats-ep-->
<!--https://www.beatsbydre.com/headphones/solo-pro-->
<!--google image search "beats solo 3 wireless"-->
<!--google image search "beats pro wireless"-->
<!--google image search "bowers & wilkins px7 wireless headphones-->