<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/modules/tab_module_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016aafe1f6_74206064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0103e488c056b908e85ff35114711c52c012da0f' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/tab_module_line.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016aafe1f6_74206064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<tr>
	<td class="fixed-width-sm center">
		<img class="img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" src="<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->image))) {
echo $_smarty_tpl->tpl_vars['module']->value->image;
} else {
echo (defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null);
echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;
}?>" />
	</td>
	<td>
		<div id="anchor<?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value->name);?>
" title="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
">
			<div class="module_name">
				<span style="display:none"><?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
</span>
				<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>

				<small class="text-muted">v<?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>
 - by <?php echo $_smarty_tpl->tpl_vars['module']->value->author;?>
</small>
				<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->type)) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsBought') {?>
					- <span class="module-badge-bought help-tooltip text-warning" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You bought this module on PrestaShop Addons. Thank You."),$_smarty_tpl ) );?>
"><i class="icon-pushpin"></i> <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Bought"),$_smarty_tpl ) );?>
</small></span>
				<?php } elseif ((isset($_smarty_tpl->tpl_vars['module']->value->type)) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsMustHave') {?>
					- <span class="module-badge-popular help-tooltip text-primary" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module is available on PrestaShop Addons"),$_smarty_tpl ) );?>
"><i class="icon-group"></i> <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Popular"),$_smarty_tpl ) );?>
</small></span>
				<?php } elseif ((isset($_smarty_tpl->tpl_vars['module']->value->type)) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsPartner') {?>
					- <span class="module-badge-partner help-tooltip text-warning" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module is available for free thanks to our partner."),$_smarty_tpl ) );?>
"><i class="icon-pushpin"></i> <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Official"),$_smarty_tpl ) );?>
</small></span>
				<?php } elseif ((isset($_smarty_tpl->tpl_vars['module']->value->id)) && $_smarty_tpl->tpl_vars['module']->value->id > 0) {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->version_addons)) && $_smarty_tpl->tpl_vars['module']->value->version_addons) {?>
						<span class="label label-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need update'),$_smarty_tpl ) );?>
</span>
					<?php }?>
				<?php }?>
			</div>
			<p class="module_description">
				<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->description)) && $_smarty_tpl->tpl_vars['module']->value->description != '') {?>
					<?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>

				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->show_quick_view)) && $_smarty_tpl->tpl_vars['module']->value->show_quick_view) {?>
					<br><a href="#" class="controller-quick-view" data-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
"><i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more'),$_smarty_tpl ) );?>
</a>
				<?php }?>
			</p>
			<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->message)) && (empty($_smarty_tpl->tpl_vars['module']->value->name) !== false) && (!(isset($_smarty_tpl->tpl_vars['module']->value->type)) || ($_smarty_tpl->tpl_vars['module']->value->type != 'addonsMustHave' || $_smarty_tpl->tpl_vars['module']->value->type !== 'addonsNative'))) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $_smarty_tpl->tpl_vars['module']->value->message;?>
</div><?php }?>
		</div>
	</td>
	<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->type)) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsMustHave') {?>
		<td>&nbsp;</td>
		<td style="text-align: right;">
			<p>
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['module']->value->addons_buy_url,' ','+'),'html','UTF-8' ));?>
" onclick="return !window.open(this.href, '_blank');" class="button updated _blank">
					<span class="btn btn-default">
						<i class="icon-shopping-cart"></i><?php if ((isset($_smarty_tpl->tpl_vars['module']->value->price))) {
if (floatval($_smarty_tpl->tpl_vars['module']->value->price) == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['module']->value->id_currency))) {?> &nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl ) );
}
}?>
					</span>
				</a>
			</p>
		</td>
	<?php } elseif (!(isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk))) {?>
		<td>&nbsp;</td>
		<td class="actions">
			<div class="btn-group-action">
				<?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml) > 0) {?>
				<div class="btn-group">
					<?php $_smarty_tpl->_assignInScope('option', $_smarty_tpl->tpl_vars['module']->value->optionsHtml[0]);?>
					<?php echo $_smarty_tpl->tpl_vars['option']->value;?>

					<?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml) > 1) {?>
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
						<span class="caret">&nbsp;</span>
					</button>
					<ul class="dropdown-menu pull-right">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module']->value->optionsHtml, 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
							<?php if (strpos($_smarty_tpl->tpl_vars['option']->value,'title="divider"') !== false) {?>
								<li class="divider"></li>
							<?php } else { ?>
								<li><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</li>
							<?php }?>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<?php }?>
				</div>
				<?php }?>
			</div>
		</td>
	<?php } else { ?>
		<td>&nbsp;</td>
		<td style="text-align: right;">
			<p>
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['install_url'],'html','UTF-8' ));?>
" class="btn btn-success">
					<i class="icon-plus-sign-alt"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install'),$_smarty_tpl ) );?>

				</a>
			</p>
		</td>
	<?php }?>
</tr>
<?php }
}
