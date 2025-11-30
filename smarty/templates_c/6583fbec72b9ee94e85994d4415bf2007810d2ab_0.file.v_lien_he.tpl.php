<?php
/* Smarty version 3.1.30, created on 2025-11-30 15:15:34
  from "/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/v_lien_he.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_692c5186ef6102_79164407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6583fbec72b9ee94e85994d4415bf2007810d2ab' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Project_shop_hoa-master/views/v_lien_he.tpl',
      1 => 1517738931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_692c5186ef6102_79164407 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="bsm_contact">
  <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section" style="margin-top: 30px">
    <h1><?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>
</h1>
      <img src="public/img/divider.png" alt="">
  </div>
</div>
<div class="container">
   <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="row">
           <div class="bsm_contact_content">
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="bsm_contact_image">
                       <img src="public/images/adress_icon.png" alt="">
                   </div>
                   <div class="bsm_contact_text">
                       <p><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
                   </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-6">
                   <div class="bsm_contact_image">
                       <img src="public/images/phone_icon.png" alt="">
                   </div>
                   <div class="bsm_contact_text">
                       <p><?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</p>
                   </div>
               </div>
            </div>
      </div>
</div>
<?php }
}
