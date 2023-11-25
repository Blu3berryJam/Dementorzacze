<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/translations/helpers/view/translation_modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016acb5fb8_00124117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fadac569a605be106994fd2bf1c4eed9f683b0d' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/translations/helpers/view/translation_modules.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016acb5fb8_00124117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17199681866562016ac9b5e0_35395570', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_17199681866562016ac9b5e0_35395570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_17199681866562016ac9b5e0_35395570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['mod_security_warning']->value) {?>
	<div class="alert alert-warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apache mod_security is activated on your server. This could result in some Bad Request errors','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>

	</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="alert alert-warning">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type'] == 'suhosin') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%limit% for suhosin.post.max_vars.','sprintf'=>array('%limit%'=>(('<b>').($_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'])).('</b>')),'d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
<br/>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%limit% for suhosin.request.max_vars.','sprintf'=>array('%limit%'=>(('<b>').($_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'])).('</b>')),'d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
<br/>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase the Suhosin limit to','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for max_input_vars.','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
<br/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase this limit to','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>

		<?php }?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s at least, or you will have to edit the translation files.','sprintf'=>array($_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),'d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>

	</div>
	<?php } else { ?>
		<div class="alert alert-info">
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on the title of a section to open its fieldsets.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

			</p>
		</div>
		<div class="panel">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expressions to translate:','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d','sprintf'=>array($_smarty_tpl->tpl_vars['count']->value)),$_smarty_tpl ) );?>
</span></p>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total missing expressions:','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d','sprintf'=>array($_smarty_tpl->tpl_vars['missing_translations']->value)),$_smarty_tpl ) );?>
</p>
		</div>

		<form method="post" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8' ));?>
" class="form-horizontal">
			<div class="panel">
				<input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
				<input type="hidden" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
				<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" />
				<div id="BoxUseSpecialSyntax">
					<div class="alert alert-warning">
						<p>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some of these expressions use this special syntax: %s.','sprintf'=>array('%d'),'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

							<br />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You MUST use this syntax in your translations. Here are several examples:','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

						</p>
						<ul>
							<li>"<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are [1]%replace%[/1] products','html'=>true,'sprintf'=>array('%replace%'=>'%d','[1]'=>'<strong>','[/1]'=>'</strong>'),'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
": <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"%s" will be replaced by a number.','sprintf'=>array('%d'),'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
</li>
							<li>"<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pages in [1]%replace%[/1]','html'=>true,'sprintf'=>array('%replace%'=>'%s','[1]'=>'<strong>','[/1]'=>'</strong>'),'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
": <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"%s" will be replaced by a string.','sprintf'=>array('%s'),'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
</li>
							<li>"<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature: [1]%1%[/1] ([1]%2%[/1] values)','html'=>true,'sprintf'=>array('%1%'=>'%1$s','%2%'=>'%2$d','[1]'=>'<strong>','[/1]'=>'</strong>'),'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
": <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The numbers enable you to reorder the variables when necessary.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
</li>
						</ul>
					</div>
				</div>
				<?php echo '<script'; ?>
 type="text/javascript">
					$(document).ready(function(){
						$('a.useSpecialSyntax').click(function(){
							var syntax = $(this).find('img').attr('alt');
							$('#BoxUseSpecialSyntax .syntax span').html(syntax+".");
						});
					});
				<?php echo '</script'; ?>
>
				<div class="panel-footer">
					<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cancel_url']->value,'html','UTF-8' ));?>
" class="btn btn-default">
						<i class="process-icon-cancel"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					</a>
					<?php echo $_smarty_tpl->tpl_vars['toggle_button']->value;?>

					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
				</div>
			</div>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_translations']->value, 'selected_theme', false, 'theme_name');
$_smarty_tpl->tpl_vars['selected_theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme_name']->value => $_smarty_tpl->tpl_vars['selected_theme']->value) {
$_smarty_tpl->tpl_vars['selected_theme']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['theme_name']->value) {?><h2>&gt;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme:','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
 <a name="<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</h2><?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_theme']->value, 'module', false, 'module_name');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_name']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
					<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module:','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
 <a name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</a></h2>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module']->value, 'newLang', false, 'template_name');
$_smarty_tpl->tpl_vars['newLang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template_name']->value => $_smarty_tpl->tpl_vars['newLang']->value) {
$_smarty_tpl->tpl_vars['newLang']->do_else = false;
?>
						<?php if (!empty($_smarty_tpl->tpl_vars['newLang']->value)) {?>
							<?php $_smarty_tpl->_assignInScope('occurrences', 0);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newLang']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
								<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {
$_smarty_tpl->_assignInScope('occurrences', $_smarty_tpl->tpl_vars['occurrences']->value+1);
}?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php if ($_smarty_tpl->tpl_vars['occurrences']->value > 0) {?>
								<?php $_smarty_tpl->_assignInScope('missing_translations_module', $_smarty_tpl->tpl_vars['occurrences']->value);?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('missing_translations_module', 0);?>
							<?php }?>
							<div class="panel">
								<h3 onclick="$('#<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_name']->value,'.','_');?>
').slideToggle();"><?php if ($_smarty_tpl->tpl_vars['theme_name']->value) {
echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['template_name']->value;?>

									<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['newLang']->value);?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expressions','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
 <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['missing_translations_module']->value;?>
</span>
								</h3>
								<div name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_div" id="<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_name']->value,'.','_');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['missing_translations_module']->value) {?>block<?php } else { ?>none<?php }?>">
									<table class="table">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newLang']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
											<tr>
												<td width="40%"><?php echo stripslashes($_smarty_tpl->tpl_vars['key']->value);?>
</td>
												<td>=</td>
												<td>
																										<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "name", null);
echo strtolower($_smarty_tpl->tpl_vars['module_name']->value);
if ($_smarty_tpl->tpl_vars['theme_name']->value) {?>_<?php echo strtolower($_smarty_tpl->tpl_vars['theme_name']->value);
}?>_<?php echo strtolower($_smarty_tpl->tpl_vars['template_name']->value);?>
_<?php echo md5($_smarty_tpl->tpl_vars['key']->value);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
													<?php if (strlen($_smarty_tpl->tpl_vars['key']->value) < $_smarty_tpl->tpl_vars['textarea_sized']->value) {?>
														<input type="text"
															style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {?>;background:#FBB<?php }?>"
															name="<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
"
															value="<?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'#"#','&quot;'));?>
" />
													<?php } else { ?>
														<textarea rows="<?php echo intval((strlen($_smarty_tpl->tpl_vars['key']->value)/$_smarty_tpl->tpl_vars['textarea_sized']->value));?>
"
															style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {?>;background:#FBB<?php }?>"
															name="<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
"><?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'#"#','&quot;'));?>
</textarea>
													<?php }?>
												</td>
												<td>
													<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['use_sprintf'])) && $_smarty_tpl->tpl_vars['value']->value['use_sprintf']) {?>
														<a class="useSpecialSyntax" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This expression uses a special syntax:','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
">
															<img src="<?php echo (defined('_PS_IMG_') ? constant('_PS_IMG_') : null);?>
admin/error.png" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
" />
														</a>
													<?php }?>
												</td>
											</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</table>
								</div>
								<div class="panel-footer">
									<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cancel_url']->value,'html','UTF-8' ));?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
									<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
									<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
								</div>
							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
	<?php }?>

    <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_submit_installed_module']->value,'html','UTF-8' ));?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="panel">
        <input type="hidden" name="langue" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
        <input type="hidden" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
        <input type="hidden" name="controller" value="AdminTranslations" />
        <h3>
          <i class="icon-file-text"></i>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify translations','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

        </h3>
        <p class="alert alert-info">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here you can modify translations for all installed module.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
<br />
        </p>
        <div class="form-group">
          <label class="control-label col-lg-3" for="translations-languages"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select your module','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
</label>
          <div class="col-lg-4">
            <select name="module" id="installed_module">
              <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['installed_modules']->value, 'module', false, 'key');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <input type="hidden" name="token" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" />
        </div>
        <div class="panel-footer">
          <button type="submit" class="btn btn-default pull-right" id="submitSelect<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" name="submitSelect<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
">
            <i class="process-icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify translations','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

          </button>
        </div>
      </div>
    </form>
<?php
}
}
/* {/block "override_tpl"} */
}
