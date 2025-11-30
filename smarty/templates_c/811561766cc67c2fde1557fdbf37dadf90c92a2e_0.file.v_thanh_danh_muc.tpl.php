<?php
/* Smarty version 3.1.30, created on 2025-11-30 16:01:18
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/chi_tiet_hoa/v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c5c3ea1b0e3_49168205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811561766cc67c2fde1557fdbf37dadf90c92a2e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/chi_tiet_hoa/v_thanh_danh_muc.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692c5c3ea1b0e3_49168205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                    </li>
                <li class="category4">
                    <a href="" title=""><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</a>
                    </li>
                <li class="category22">
                    <strong><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</strong>
                </li>
                <li>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php }
}
