<?php
/* Smarty version 3.1.48, created on 2023-11-22 22:28:29
  from '/var/www/html/admin_123/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_655e727d2a2e03_30578456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed5f91542121ffc0ebb820fabe0063616f56503' => 
    array (
      0 => '/var/www/html/admin_123/themes/new-theme/template/content.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655e727d2a2e03_30578456 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
