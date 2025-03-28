<?php

use App\Models\Product;

$list_product_new = Product::where('status', '=', 1)
   ->orderBy('created_at', 'DESC')
   ->get();

?>
<ul class="list-group mb-3 list-product-new">
   <li class="list-group-item bg-main text-main  py-3">Sản phẩm mới</li>
   <?php foreach ($list_product_new as $product_new) : ?>
      <li class="list-group-item">
         <div class="product-item border">
            <div class="product-item-image">
               <a href="index.php?opt=product_detail">
                  <img src="public/images/category/category1.jpg<?= $product_new->image; ?>" class="img-fluid" alt="<?= $product_new->name; ?>">
               </a>
            </div>
            <h2 class="product-item-name text-main text-center fs-5 py-1">
               <a class="dropdown-item text-main" href="index.php?opt=product&slug=<?= $product_new->slug; ?>">
                  <?= $product_new->name; ?></a>
            </h2>
            <h3 class="product-item-price fs-6 p-2 d-flex">
               <div class="flex-fill"><del><?= number_format($product_new->price); ?></del></div>
               <div class="flex-fill text-end text-main"><?= number_format($product_new->pricesale); ?></div>
            </h3>
         <?php endforeach; ?>

         </div>
      </li>

</ul>
