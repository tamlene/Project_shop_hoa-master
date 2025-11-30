<?php
/* Smarty version 3.1.30, created on 2025-11-30 14:56:42
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c4d1a073119_14842906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '133c2bddcc0861f821a8538cc02649a87c2c845c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/v_dang_nhap.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_nhap/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_nhap/v_dang_nhap.tpl' => 1,
  ),
),false)) {
function content_692c4d1a073119_14842906 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
