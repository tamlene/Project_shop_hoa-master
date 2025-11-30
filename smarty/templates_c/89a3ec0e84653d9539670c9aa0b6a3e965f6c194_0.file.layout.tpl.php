<?php
/* Smarty version 3.1.30, created on 2025-11-30 14:57:16
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/smarty/templates/gioi_thieu/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c4d3c321d09_38952226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a3ec0e84653d9539670c9aa0b6a3e965f6c194' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/smarty/templates/gioi_thieu/layout.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_692c4d3c321d09_38952226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1036592707692c4d3c31d5a1_24750599', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200713066692c4d3c3211c0_36296126', "san_pham");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_1036592707692c4d3c31d5a1_24750599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "san_pham"} */
class Block_1200713066692c4d3c3211c0_36296126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "san_pham"} */
}
