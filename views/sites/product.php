<?php
$title = 'Sản phẩm';

use App\Models\Product;
use App\Libraries\Pagination;

$total = Product::where('status', '=', 1)->count();
$limit = 10;
$page = Pagination::pageCurrent();
$offset = Pagination::pageOffset($page, $limit);

//
$list_product = Product::where('status', '=', 1)
   ->orderBy('created_at', 'DESC')
   ->skip($offset)
   ->limit($limit)
   ->get();

?>
<?php require_once "views/sites/header.php"; ?>
<section class="bg-light">
   <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
         <ol class="breadcrumb py-2 my-0">
            <li class="breadcrumb-item">
               <a class="text-main" href="index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
               Sản phẩm
            </li>
         </ol>
      </nav>
   </div>
</section>
<section class="hdl-maincontent py-2">
   <div class="container">
      <div class="row">
         <div class="col-md-3 order-2 order-md-1">
            <?php require_once "views/sites/mod_list_category.php"; ?>
            <?php require_once "views/sites/mod_list_brand.php"; ?>
            <?php require_once "views/sites/mod_product_new.php"; ?>

         </div>
         <div class="col-md-9 order-1 order-md-2">
            <div class="category-title bg-main">
               <h3 class="fs-5 py-3 text-center">TẤT CẢ SẢN PHẨM</h3>
            </div>
            <div class="product-category mt-3">
               <div class="row product-list">
                  <?php foreach ($list_product as $product) : ?>
                     <?php require 'views/sites/product_item.php'; ?>
                  <?php endforeach; ?>
               </div>
            </div>
            <?= Pagination::pageLinks($total, $page, $limit, 'index.php?opt=product'); ?>
         </div>
      </div>
   </div>
</section>
<?php require_once "views/sites/footer.php" ?>