<?php
/* Smarty version 3.1.48, created on 2023-12-02 17:12:22
  from '/var/www/html/admin_123/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_656b5766aebf16_50790386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '937f8f585e1c327d330a6002910f904288e84e1c' => 
    array (
      0 => '/var/www/html/admin_123/themes/new-theme/template/footer.tpl',
      1 => 1701510282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656b5766aebf16_50790386 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
