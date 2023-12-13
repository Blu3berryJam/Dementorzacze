<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/modules/ad_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016aa88c00_30479934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a003a7c428b804e1c0bf702a3944cf6f39597ea9' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/ad_bar.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/tab_module_line.tpl' => 1,
  ),
),false)) {
function content_6562016aa88c00_30479934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
if (count($_smarty_tpl->tpl_vars['ad_modules']->value['not_installed'])) {?>
<div class="bootstrap panel">
	<h3><i class="icon-certificate"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might be interested in'),$_smarty_tpl ) );?>
</h3>
	<div class="row">
		<table id="tab_modules_list_not_installed" class="table">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ad_modules']->value['not_installed'], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<?php ob_start();
echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_row'=>$_prefixVariable8), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
