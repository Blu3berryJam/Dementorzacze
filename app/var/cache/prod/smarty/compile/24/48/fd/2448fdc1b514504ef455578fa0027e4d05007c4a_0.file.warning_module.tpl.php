<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/modules/warning_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016aaea647_59167018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2448fdc1b514504ef455578fa0027e4d05007c4a' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016aaea647_59167018 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_link']->value,'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }
}
