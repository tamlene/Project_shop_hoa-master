<?php
/* Smarty version 3.1.30, created on 2025-11-30 14:12:19
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c42b3a72792_49877150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d2a0ebaf2912e9262a2a27068e66af4a562d83' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/admin/views/v_khach_hang.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_ds_khach_hang.tpl' => 1,
  ),
),false)) {
function content_692c42b3a72792_49877150 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách khách hàng</div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_ds_khach_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
        </div>
</div><?php }
}
