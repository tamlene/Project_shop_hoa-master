<?php
/* Smarty version 3.1.30, created on 2025-11-30 14:04:05
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/index/v_don_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c40c5528e48_73167713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4bb789a9b41f60285f721c68bf0a8a8b1039db2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/index/v_don_hang.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692c40c5528e48_73167713 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-shopping-cart"></i>
        </div>
        <div class="mr-5">có <span id="tong_dh_hom_nay"> </span> đơn hàng đã đặt ngày hôm nay</div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-exclamation"></i>
        </div>
        <div class="mr-5">có <span id="tong_dh_chua_duyet_hom_nay"></span>  đơn hàng chưa duyệt ngày hôm nay</div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-dark o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-reply-all"></i>
        </div>
        <div class="mr-5" style="font-size: 14px">xem tất cả đơn hàng chưa duyệt</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="hoa_don_chua_duyet.php">
        <span class="float-left">Xem chi tiết</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-info o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-file-o"></i>
        </div>
        <div class="mr-5">xem tất cả đơn hàng đã duyệt</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="hoa_don_da_duyet.php">
        <span class="float-left">Xem chi tiết</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>

</div>
<?php }
}
