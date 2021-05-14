<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$pagelimit = 12;
$pageoffset = isset($_GET['page'])?$_GET['page']:0;

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Ear Audio Store: Product List</title>

   <?php include "parts/meta.php" ?>

   <script src="js/list.js"></script>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="container pad push-down">
        <div class="grid gap">
           <div class="col-xs-12 col-md-3 col-lg-2">
              <div class="card-basic card-flat">
                 <div class="card-section">
                    <div>
                       Filter
                    </div>
                 </div>
                 <div class="card-section">
                    <input type="button" class="form-button filter" data-type="category" 
                    value="wireless">
                     <input type="button" class="form-button filter" data-type="category" 
                    value="wired">
                 </div>
                 <div class="card-section">
                    <div>Sort</div>
                 </div>
                 <div class="card-section">
                    <div class="form-section">
                       <select class="sort">
                          <option value="1">Newest</option>
                          <option value="2">Oldest</option>
                          <option value="3">Most Expensive</option>
                          <option value="4">Least Expensive</option>
                       </select>
                    </div>
                 </div>
                 <form class="push-down list-search">
                    <input type="search" class="form-input hotdog" name="search" placeholder="Search">
                 </form>
              </div>
           </div>
           <div class="col-xs-12 col-md-9 col-lg-10">
              <div class="grid xs-small md-medium product-list"></div>
           </div>
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
