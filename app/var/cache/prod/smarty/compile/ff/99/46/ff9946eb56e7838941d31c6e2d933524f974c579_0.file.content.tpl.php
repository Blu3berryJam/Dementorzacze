<?php
/* Smarty version 3.1.48, created on 2023-11-22 22:21:55
  from '/var/www/html/admin_123/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_655e70f386d4b4_11837977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9946eb56e7838941d31c6e2d933524f974c579' => 
    array (
      0 => '/var/www/html/admin_123/themes/default/template/content.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655e70f386d4b4_11837977 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
