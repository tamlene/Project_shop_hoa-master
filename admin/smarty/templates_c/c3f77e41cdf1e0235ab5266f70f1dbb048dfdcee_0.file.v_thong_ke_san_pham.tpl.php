<?php
/* Smarty version 3.1.30, created on 2025-11-30 14:05:24
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/v_thong_ke_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c4114c5d003_71448618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3f77e41cdf1e0235ab5266f70f1dbb048dfdcee' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/v_thong_ke_san_pham.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692c4114c5d003_71448618 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Mã hoa</th>
        <th>Tên hoa</th>
        <th>Hình</th>
        <th>Giá KM</th>
        <th>SL Hoa</th>
        <th>Tổng doanh thu</th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theo_sp']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</td>
          <td width="75px" ><img src="../public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
" class="img-fluid" alt="Responsive image"></td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->GiaKhuyenMai);?>
 đ</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
</td>
        <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa']->value->tong_tt);?>
 đ</td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
  </table><?php }
}
