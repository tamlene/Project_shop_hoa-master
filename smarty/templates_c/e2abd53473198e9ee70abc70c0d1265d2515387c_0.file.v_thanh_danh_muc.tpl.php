<?php
/* Smarty version 3.1.30, created on 2025-11-30 15:14:58
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/hoa/v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c5162865e55_00911876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2abd53473198e9ee70abc70c0d1265d2515387c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/hoa/v_thanh_danh_muc.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692c5162865e55_00911876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                </li>
                <li class="category4">
                    <a href="danh-sach-hoa" title="">Danh sách hoa</a>
                </li>
                <?php if (isset($_GET['loai_hoa'])) {?>
                <li class="category4">
                    <a class="ten_loai_hoa" title="<?php echo $_smarty_tpl->tpl_vars['ten_loai']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ten_loai']->value;?>
</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php }
}
