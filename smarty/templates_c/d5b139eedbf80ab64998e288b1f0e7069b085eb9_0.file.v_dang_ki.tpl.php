<?php
/* Smarty version 3.1.30, created on 2025-11-30 14:56:47
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/v_dang_ki.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c4d1faf1821_16193435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5b139eedbf80ab64998e288b1f0e7069b085eb9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/v_dang_ki.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_ki/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_ki/v_dang_ki.tpl' => 1,
  ),
),false)) {
function content_692c4d1faf1821_16193435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_dang_ki.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
