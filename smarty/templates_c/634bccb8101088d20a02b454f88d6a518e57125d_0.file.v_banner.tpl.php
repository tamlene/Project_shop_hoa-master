<?php
/* Smarty version 3.1.30, created on 2025-11-30 14:31:21
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/trang_chu/v_banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c47295e6f59_96055020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634bccb8101088d20a02b454f88d6a518e57125d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/trang_chu/v_banner.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692c47295e6f59_96055020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container hidden-xs">
    <div class="cms-page-banner">
        <div class="row">
          <?php $_smarty_tpl->_assignInScope('i', 0);
?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_thong_tin']->value, 'thong_tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thong_tin']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
              <?php if (($_smarty_tpl->tpl_vars['i']->value%3 == 2)) {?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box" data-aos="fade-down" data-aos-duration="600" >
              <?php } else { ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 box" data-aos="fade-up" data-aos-duration="600" >
              <?php }?>
                <div class="box-content"><a href="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
">
                    <img alt="" class="img-responsive" src="public/images/banner/<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->Hinh;?>
"></a>
                    <a class="btn-shop" href="<?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->DuongDan;?>
"><?php echo $_smarty_tpl->tpl_vars['thong_tin']->value->HanhDong;?>
</a>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<?php }
}
