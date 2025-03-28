<?php

use App\Models\Category;
use App\Models\Product;
$slug=$_REQUEST['cat'];
$row_cat=category::where('slug','=',$slug)->first();
$list_catid=[];
//Them phan tu mang
array_push($list_catid,$row_cat->id);
$list_category1 = Category :: where([['parent_id', '=', $row_cat->id], ['status', '=', 1]])
      ->get();
if(count($list_category1)>0)
{
   foreach($list_category1 as $row_cat1)
   {
      array_push($list_catid,$row_cat1->id);
      $list_category2 = Category :: where([['parent_id', '=', $row_cat1->id], ['status', '=', 1]])
      ->get();
      if(count($list_category2)>0)
      {
         foreach($list_category2 as $row_cat2){
            array_push($list_catid,$row_cat2->id);
         }
      }
   }
}
$list_product = Product :: where('status', '=', 1)
      ->whereIn('category_id',$list_catid)
      ->orderBy('created_at', 'DESC')
      ->get();
?>
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
               Sản phẩm theo loại
            </li>
         </ol>
      </nav>
   </div>
</section>
<section class="hdl-maincontent py-2">
   <div class="container">
      <div class="row">
         <div class="col-md-3 order-2 order-md-1">
            <?php require_once "views/sites/mod_listcategory.php" ?>
            <?php require_once "views/sites/mod_listbrand.php" ?>
            <?php require_once "views/sites/mod_product_new.php" ?>
         </div>
         <div class="col-md-9 order-1 order-md-2">
            <div class="category-title bg-main">
               <h3 class="fs-5 py-3 text-center"><?=$row_cat->name;?></h3>
            </div>
            <div class="product-category mt-3">
               <div class="row product-list">
                  <?php foreach($list_product as $product):?>
                     <div class="col-6 col-md-3 mb-4">
                        <?php require('views/sites/product_item.php');?> 
                     </div>
                  <?php endforeach;?>
               </div>
            </div>
            <nav aria-label="Phân trang">
               <ul class="pagination justify-content-center">
                  <li class="page-item">
                     <a class="page-link text-main" href="index.php?opt=product_category" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                     </a>
                  </li>
                  <li class="page-item">
                     <a class="page-link text-main" href="index.php?opt=product_category">1</a>
                  </li>
                  <li class="page-item">
                     <a class="page-link text-main" href="index.php?opt=product_category">2</a>
                  </li>
                  <li class="page-item">
                     <a class="page-link text-main" href="index.php?opt=product_category">3</a>
                  </li>
                  <li class="page-item">
                     <a class="page-link text-main" href="index.php?opt=product_category" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</section>
<?php require_once "views/sites/footer.php"; ?>