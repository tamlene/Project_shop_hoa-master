<?php
/* Smarty version 3.1.30, created on 2025-11-30 16:19:48
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/v_them_thanh_vien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c6094311097_79106437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65420ea1fe4b8cb8673a511485c73e11d2e72cf0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/v_them_thanh_vien.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692c6094311097_79106437 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST">
    <div class="form-group">
        <label for="ten">Tên thành viên:</label>
        <input type="text" class="form-control" name="ten" placeholder="Nhập tên thành viên" required>
    </div>
    <div class="form-group">
        <label for="tai_khoan">Tài khoản:</label>
        <input type="text" class="form-control" name="tai_khoan" placeholder="Nhập tài khoản cần đặt" required>
    </div>
    <div class="form-group">
        <label for="mat_khau">Mật khẩu:</label>
        <input type="password" class="form-control" name="mat_khau" placeholder="Nhập mật khẩu cần đặt" required>    
    </div>
    <div class="form-group">
        <label for="recipient-name" class="form-control-label">Quyền:</label>
        <select class="form-control" name="permission">
            <option value="0">QL Dơn Hàng</option>
            <option value="1">Admin</option>
            <option value="2">QL Sản Phẩm</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_submit">Thêm thành viên</button>
    </form>
</div>
<?php }
}
