<?php

use App\Models\Category;

$categorys = Category::where('status', '=', 0)
   ->orderBy('created_at',)->get();

?>

<?php require_once "../views/admin/header.php"; ?>
<!--CONTENT  -->
<div class="content">
   <section class="content-header my-2">
      <h1 class="d-inline">Thùng rác danh mục</h1>
      <div class="row mt-3 align-items-center">
         <div class="col-6">
            <ul class="manager">
               <li><a href="index.php?opt=category">Tất cả (123)</a></li>
               <li><a href="#">Xuất bản (12)</a></li>
               <li><a href="index.php?opt=category&cat=trash">Rác (12)</a></li>
            </ul>
         </div>
         <div class="col-6 text-end">
            <input type="text" class="search d-inline" />
            <button class="d-inline btnsearch">Tìm kiếm</button>
         </div>
      </div>
      <div class="row mt-1 align-items-center">
         <div class="col-md-8">
            <select name="" class="d-inline me-1">
               <option value="">Hành động</option>
               <option value="">Bỏ vào thùng rác</option>
            </select>
            <button class="btnapply">Áp dụng</button>
            <select name="" class="d-inline me-1">
               <option value="">Tất cả vị trí</option>
            </select>
            <button class="btnfilter">Lọc</button>
         </div>
         <div class="col-md-4 text-end">
            <nav aria-label="Page navigation example">
               <ul class="pagination pagination-sm justify-content-end">
                  <li class="page-item disabled">
                     <a class="page-link">&laquo;</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                     <a class="page-link" href="#">&raquo;</a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </section>
   <section class="content-body my-2">
      <?php require_once "../views/admin/message.php"; ?>
      <table class="table table-bordered">
         <thead>
            <tr>
               <th class="text-center" style="width:30px;">
                  <input type="checkbox" id="checkboxAll" />
               </th>
               <th class="text-center" style="width:90px;">Hình ảnh</th>
               <th>Tên danh mục</th>
               <th>Tên slug</th>
            </tr>
         </thead>
         <?php foreach ($categorys as $category) : ?>
            <tbody>
               <tr class="datarow">
                  <td class="text-center">
                     <input type="checkbox" id="checkId" />
                  </td>
                  <td>
                     <img src="public/images/category/<?= $category->image; ?>" alt="<?= $category->image; ?>">
                  </td>
                  <td>
                     <div class="name">
                        <a href="index.php?opt=category">
                           <?php echo $category->name; ?>
                        </a>
                     </div>
                     <div class="function_style">
                        <a href="index.php?opt=category&cat=restore&id=<?= $category->id ?>" class="btn btn-sm btn-primary mx-1">
                           <i class="fa fa-undo"></i>
                        </a>
                        <a href="index.php?opt=category&cat=destroy&id=<?= $category->id ?>" class="btn btn-sm btn-danger mx-1">
                           <i class="fa fa-trash"></i>
                        </a>
                     </div>
                  </td>
                  <td><?php $category->slug; ?></td>
               </tr>
            </tbody>
         <?php endforeach; ?>
      </table>

   </section>
</div>
<!--END CONTENT-->
<?php require_once "../views/admin/footer.php"; ?>