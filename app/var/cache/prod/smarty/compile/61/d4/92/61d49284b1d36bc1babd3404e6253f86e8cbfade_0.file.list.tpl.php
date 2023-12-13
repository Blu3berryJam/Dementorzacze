<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/modules/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016aac9146_97456503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61d49284b1d36bc1babd3404e6253f86e8cbfade' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/modules/list.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/filters.tpl' => 1,
  ),
),false)) {
function content_6562016aac9146_97456503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<table id="module-list" class="table">
	<thead>
		<tr>
			<th colspan="4">
				<?php $_smarty_tpl->_subTemplateRender('file:controllers/modules/filters.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</th>
		</tr>
	</thead>
	<?php if (count($_smarty_tpl->tpl_vars['modules']->value)) {?>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "moduleStatutClass", null, null);
if ((isset($_smarty_tpl->tpl_vars['module']->value->id)) && $_smarty_tpl->tpl_vars['module']->value->id > 0 && $_smarty_tpl->tpl_vars['module']->value->active == 1) {?>module_active<?php } else { ?>module_inactive<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<tr>
					<td class="<?php ob_start();
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'moduleStatutClass');
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
 text-center" style="width: 1%;">
						<?php if (((isset($_smarty_tpl->tpl_vars['module']->value->id)) && $_smarty_tpl->tpl_vars['module']->value->id > 0) || !(isset($_smarty_tpl->tpl_vars['module']->value->type)) || $_smarty_tpl->tpl_vars['module']->value->type != 'addonsMustHave') {?>
						<input type="checkbox" name="modules" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
" class="noborder" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module %1s ','sprintf'=>array($_smarty_tpl->tpl_vars['module']->value->name)),$_smarty_tpl ) );?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['module']->value->confirmUninstall)) || empty($_smarty_tpl->tpl_vars['module']->value->confirmUninstall)) {?> data-rel="false"<?php } else { ?> data-rel="<?php echo addslashes($_smarty_tpl->tpl_vars['module']->value->confirmUninstall);?>
"<?php }?>/>
						<?php }?>
					</td>
					<td class="fixed-width-xs">
						<img width="57" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
" src="<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->image))) {
echo $_smarty_tpl->tpl_vars['module']->value->image;
} else {
echo $_smarty_tpl->tpl_vars['modules_uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;
}?>" />
					</td>
					<td>
						<div id="anchor<?php echo ucfirst($_smarty_tpl->tpl_vars['module']->value->name);?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
">
							<div class="text-muted">
								<?php echo $_smarty_tpl->tpl_vars['module']->value->categoryName;?>

							</div>
							<div class="module_name">
								<span style="display:none"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
</span>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>

								<small class="text-muted">v<?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value->author;?>
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
									- <span class="module-badge-partner help-tooltip text-warning" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Official, PrestaShop certified module. Free, secure and includes updates!"),$_smarty_tpl ) );?>
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
									<br><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=<?php echo urlencode($_smarty_tpl->tpl_vars['module']->value->name);?>
" class="fancybox-quick-view"><i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more'),$_smarty_tpl ) );?>
</a>
								<?php }?>
							</p>
							<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->message)) && (empty($_smarty_tpl->tpl_vars['module']->value->name) !== false) && (!(isset($_smarty_tpl->tpl_vars['module']->value->type)) || ($_smarty_tpl->tpl_vars['module']->value->type != 'addonsMustHave' || $_smarty_tpl->tpl_vars['module']->value->type !== 'addonsNative'))) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $_smarty_tpl->tpl_vars['module']->value->message;?>
</div><?php }?>
						</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
								<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->type)) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsMustHave') {?>
									<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['module']->value->addons_buy_url,' ','+'),'html','UTF-8' ));?>
">
										<i class="icon-shopping-cart"></i> &nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->price))) {
if (floatval($_smarty_tpl->tpl_vars['module']->value->price) == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['module']->value->id_currency))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl ) );
}
}?>
									</a>
								<?php } else { ?>
									<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->id)) && $_smarty_tpl->tpl_vars['module']->value->id > 0) {?>
										<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->version_addons)) && $_smarty_tpl->tpl_vars['module']->value->version_addons) {?>
											<a class="btn btn-warning" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['update_url'],'html','UTF-8' ));?>
">
												<i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update it!'),$_smarty_tpl ) );?>

											</a>
										<?php } elseif (!(isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk))) {?>
											<?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml) > 0) {?>
												<?php $_smarty_tpl->_assignInScope('option', $_smarty_tpl->tpl_vars['module']->value->optionsHtml[0]);?>
												<?php echo $_smarty_tpl->tpl_vars['option']->value;?>

											<?php }?>
										<?php } else { ?>
											<a class="btn btn-danger" <?php if (!empty($_smarty_tpl->tpl_vars['module']->value->options['uninstall_onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['module']->value->options['uninstall_onclick'];?>
"<?php }?> href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['uninstall_url'],'html','UTF-8' ));?>
">
												<i class="icon-minus-sign-alt"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall'),$_smarty_tpl ) );?>

											</a>
										<?php }?>
									<?php } else { ?>
										<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->trusted)) && $_smarty_tpl->tpl_vars['module']->value->trusted) {?>
											<?php if ($_smarty_tpl->tpl_vars['module']->value->trusted == 2) {?>
												<a class="btn btn-success untrustedaddon" href="#" data-target="#moduleNotTrustedCountry" data-toggle="modal" data-link="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['install_url'],'html','UTF-8' ));?>
" data-module-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
">
													<i class="icon-plus-sign-alt"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install'),$_smarty_tpl ) );?>

												</a>
											<?php } else { ?>
												<a class="btn btn-success" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['install_url'],'html','UTF-8' ));?>
">
													<i class="icon-plus-sign-alt"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install'),$_smarty_tpl ) );?>

												</a>
											<?php }?>
										<?php } else { ?>
										<a class="btn btn-success untrustedaddon" href="#" data-target="#moduleNotTrusted" data-toggle="modal" data-link="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['install_url'],'html','UTF-8' ));?>
" data-module-display-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
" data-module-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
" data-module-image="<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->image))) {
echo $_smarty_tpl->tpl_vars['module']->value->image;
} else {
echo $_smarty_tpl->tpl_vars['modules_uri']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;
}?>" data-author-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->author,'html','UTF-8' ));?>
" data-author-uri="<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->author_uri))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->author_uri,'html','UTF-8' ));
}?>">
											<i class="icon-plus-sign-alt"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install'),$_smarty_tpl ) );?>

										</a>
										<?php }?>
									<?php }?>

									<?php if (!(isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)) && (isset($_smarty_tpl->tpl_vars['module']->value->id))) {?>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
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
									<?php } elseif (!(isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)) && !(isset($_smarty_tpl->tpl_vars['module']->value->id))) {?>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
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
									<?php } elseif ((isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk))) {?>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
											<?php if ((isset($_smarty_tpl->tpl_vars['module']->value->preferences)) && (isset($_smarty_tpl->tpl_vars['module']->value->preferences['favorite'])) && $_smarty_tpl->tpl_vars['module']->value->preferences['favorite'] == 1) {?>
												<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="0" href="#">
														<i class="icon-star"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Favorites'),$_smarty_tpl ) );?>

													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="1" href="#" style="display: none;">
														<i class="icon-star"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mark as Favorite'),$_smarty_tpl ) );?>

													</a>
												</li>
											<?php } else { ?>
												<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Favorites'),$_smarty_tpl ) );?>

													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" data-value="1" href="#">
														<i class="icon-star"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mark as Favorite'),$_smarty_tpl ) );?>

													</a>
												</li>
											<?php }?>
										</ul>
									<?php } else { ?>
										&nbsp;
									<?php }?>
								<?php }?>
							</div>
						</div>
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
	<div class="btn-group pull-left">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bulk actions','d'=>'Admin.Global'),$_smarty_tpl ) );?>

			 <span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
			 	<a href="#" onclick="modules_management('install')">
					<i class="icon-plus-sign-alt"></i>&nbsp;
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install the selection'),$_smarty_tpl ) );?>

				</a>
			</li>
			<li>
				<a href="#" onclick="modules_management('uninstall')">
					<i class="icon-minus-sign-alt"></i>&nbsp;
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall the selection'),$_smarty_tpl ) );?>

				</a>
			</li>
		</ul>
	</div>
	<?php } else { ?>
		<tbody>
			<tr>
				<td colspan="4" class="list-empty">
					<div class="list-empty-msg">
						<i class="icon-warning-sign list-empty-icon"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No modules available in this section.'),$_smarty_tpl ) );?>

					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<?php }
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $('.fancybox-quick-view').each(function() {
            $(this).fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                },
                href: $(this).attr('href')+'&admin_list_from_source='+getControllerActionMap('read-more')
            });
        });
	});
<?php echo '</script'; ?>
>
<?php }
}
