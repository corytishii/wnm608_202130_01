<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="container">
         <h2>Product List</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  ORDER BY date_create DESC
                  LIMIT 15
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