<?php $title = 'Tin tức'; ?>

<?php require_once "views/sites/header.php"; ?>

<section class="bg-light">
   <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
         <ol class="breadcrumb py-2 my-0">
            <li class="breadcrumb-item">
               <a class="text-main" href="index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
               Tin tức
            </li>
         </ol>
      </nav>
   </div>
</section>

<section class="hdl-maincontent py-2">
   <div class="container">
      <div class="row">
         <div class="col-md-3 order-2 order-md-1">
            <ul class="list-group mb-3 list-category">
               <li class="list-group-item bg-main py-3">Danh mục sản phẩm</li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_category">Thời trang nam</a>
               </li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_category">Thời trang nữ</a>
               </li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_category">Thời trang trẻ em</a>
               </li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_category">Thời trang thể thao</a>
               </li>
            </ul>
            <ul class="list-group mb-3 list-brand">
               <li class="list-group-item bg-main py-3">Thương hiệu</li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_brand">Việt Nam</a>
               </li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_brand">Hàn Quốc</a>
               </li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_brand">Thái Lan</a>
               </li>
               <li class="list-group-item">
                  <a href="index.php?opt=product_brand">Quản Châu</a>
               </li>
            </ul>
            <ul class="list-group mb-3 list-product-new">
               <li class="list-group-item bg-main py-3">Sản phẩm mới</li>
               <li class="list-group-item">
                  <div class="product-item border">
                     <div class="product-item-image">
                        <a href="index.php?opt=product_detail">
                           <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt="">
                        </a>
                     </div>
                     <h2 class="product-item-name text-main text-center fs-5 py-1">
                        <a href="index.php?opt=post_detail">
                           <img src="public/images/category/category1.jpg" class="img-fluid" alt="">
                        </a>
                     </h2>
                     
                     <h3 class="product-item-price fs-6 p-2 d-flex">
                        <div class="flex-fill"><del>200.000đ</del></div>
                        <div class="flex-fill text-end text-main">190.000đ</div>
                     </h3>
                  </div>
               </li>
               <li class="list-group-item">
                  <div class="product-item border">
                     <div class="product-item-image">
                        <a href="index.php?opt=product_detail">
                           <img src="public/images/product/thoi-trang-the-thao-2.webp" class="img-fluid" alt="">
                        </a>
                     </div>
                     <h2 class="product-item-name text-main text-center fs-5 py-1">
                     <a href="index.php?opt=post_detail">
                           <img src="public/images/category/category2.jpg" class="img-fluid" alt="">
                        </a>
                     </h2>
                     <h3 class="product-item-price fs-6 p-2 d-flex">
                        <div class="flex-fill"><del>200.000đ</del></div>
                        <div class="flex-fill text-end text-main">190.000đ</div>
                     </h3>
                  </div>
               </li>
               <li class="list-group-item">
                  <div class="product-item border">
                     <div class="product-item-image">
                        <a href="index.php?opt=product_detail">
                           <img src="public/images/product/thoi-trang-the-thao-1.webp" class="img-fluid" alt="">
                        </a>
                     </div>
                     <h2 class="product-item-name text-main text-center fs-5 py-1">
                     <a href="index.php?opt=post_detail">
                           <img src="public/images/category/category3.jpg" class="img-fluid" alt="">
                        </a>
                     </h2>
                     <h3 class="product-item-price fs-6 p-2 d-flex">
                        <div class="flex-fill"><del>200.000đ</del></div>
                        <div class="flex-fill text-end text-main">190.000đ</div>
                     </h3>
                  </div>
               </li>
            </ul>
         </div>
         <div class="col-md-9 order-1 order-md-2">
            <div class="post-topic-title bg-main">
               <h3 class="fs-5 py-3 text-center">TIN TỨC</h3>
            </div>
            <div class="post-topic mt-3">
               <div class="row post-item mb-4">
                  <div class="col-4 col-md-4">
                     <div class="post-item-image">
                        <a href="index.php?opt=post_detail">
                           <img src="public/images/post/post-4.webp" class="img-fluid" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-8 col-md-8">
                     <h2 class="post-item-title fs-5 py-1">
                        <a href="index.php?opt=post_detail">
                           Xu hướng thời trang của gen-z
                        </a>
                     </h2>
                     <p>hời trang hiphop ra đời không đơn thuần chỉ là một trào lưu hay xu hướng xuất hiện trên thị trường hiện nay. Đây được hiểu là một lối sống, một nền văn hóa và còn là một trong những phong cách thời trang sang xịn mịn nhất năm 2023.
Thời trang hiphop Việt Nam ra đời không đơn thuần chỉ là một trào lưu hay xu hướng xuất hiện trên thị trường hiện nay. Đây được hiểu là một lối sống, một nền văn hóa và còn là một trong những phong cách thời trang sang xịn mịn nhất năm 2023. Thời trang hiphop đã tiếp cận được nhiều bạn trẻ gen Z- lứa tuổi từ 1995 trở về sau đang đang dần chuyển biến với nhiều xu hướng hot trend, phong cách có sự thay đổi theo từng ngày tạo nên một sự độc đáo và mới lạ. Theo stylist Tiger Bia, đặc điểm của phong cách hip hop ngày nay đó chính là sự tự do trong chính trang phục do bản thân mình lựa chọn được thiết kế có nét độc đáo riêng. Được biết đến là sự khác biệt, dám nghĩ dám làm và quan trọng hơn hết là dám bước ra khỏi vùng an toàn. </p>
                  </div>
               </div>
               <div class="row post-item mb-4">
                  <div class="col-4 col-md-4">
                     <div class="post-item-image">
                        <a href="index.php?opt=post_detail">
                           <img src="public/images/post/post-2.jpg" class="img-fluid" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-8 col-md-8">
                     <h2 class="post-item-title text-main fs-5 py-1">
                        <a href="index.php?opt=post_detail">
                           Chào mừng năm mới với các ưu đãi
                        </a>
                     </h2>
                     <p>Cùng Routine Chào Xuân Giáp Thìn với những Ưu Đãi Linh Đình được diễn ra duy nhất trong tháng 1 này! Ưu Đãi Tháng 1 sẽ là một chuỗi sự kiện khai xuân cực hấp dẫn với những chương trình sale, đồng giá, nhận quà,... dành riêng cho quý khách hàng khi mua sắm tại Routine trong dịp năm mới 2024.</p>
                  </div>
               </div>
               <div class="row post-item mb-4">
                  <div class="col-4 col-md-4">
                     <div class="post-item-image">
                        <a href="index.php?opt=post_detail">
                           <img src="public/images/post/post-1.jpg" class="img-fluid" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="col-8 col-md-8">
                     <h2 class="post-item-title text-main fs-5 py-1">
                        <a href="index.php?opt=post_detail">
                           Mua càng nhiều giảm càng sâu
                        </a>
                     </h2>
                     <p>Một trong những chương trình hấp dẫn nhất tháng 1 này, cơ hội mua sắm thả ga với chương trình Mua càng nhiều - Giảm càng sâu:

Giảm ngay 15% khi mua từ 2 sản phẩm.
Giảm ngay 30% khi mua từ 3 sản phẩm.
Thời gian diễn ra chương trình: từ ngày 19/01 đến ngày 09/02/2024
Không áp dụng đồng thời ưu đãi thành viên, ưu đãi sinh nhật.
Không áp dụng đồng thời với các CTKM khác.</p>
                  </div>
               </div>
               <div class="row post-item mb-4">
                  <div class="col-4 col-md-4">
                     <div class="post-item-image">
                        <a href="index.php?opt=post_detail">
                           <img src="public/images/post/post-3.jpg" class="img-fluid" alt="">
                        </a>
                     </div>
                  </div>                 
                  <div class="col-8 col-md-8">
                     <h2 class="post-item-title text-main fs-5 py-1">
                        <a href="index.php?opt=post_detail">
                           Các ưu đãi dành riêng cho áo Polo
                        </a>
                     </h2>
                     <p>Polo Week là một ưu đãi đặc biệt dành cho các chàng mua sắm những chiếc áo polo cao cấp, hiện đại với mức giá cực hời:

Giảm ngay 30% khi mua từ 2 áo polo
Thời gian diễn ra chương trình: từ ngày 05 đến ngày 29/01/2023
Không áp dụng đồng thời ưu đãi thành viên, ưu đãi sinh nhật và các CTKM khác.</p>
                  </div>
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
<?php require_once "views/sites/footer.php" ?>