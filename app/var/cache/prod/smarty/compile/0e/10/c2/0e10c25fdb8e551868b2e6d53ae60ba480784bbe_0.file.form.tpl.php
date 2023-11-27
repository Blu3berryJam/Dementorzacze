<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/groups/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016aa4c223_55059972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e10c25fdb8e551868b2e6d53ae60ba480784bbe' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/groups/helpers/form/form.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016aa4c223_55059972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18357953556562016aa3bb36_21965760', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1522436506562016aa3d6f6_70566505', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_18357953556562016aa3bb36_21965760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_18357953556562016aa3bb36_21965760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'modules') {?>
		<div <?php if (!$_smarty_tpl->tpl_vars['form_id']->value) {?>class="hide"<?php }?>>
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authorized modules:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
		</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'group_discount_category') {?>
		<div <?php if (!$_smarty_tpl->tpl_vars['form_id']->value) {?>class="hide"<?php }?>>
			<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "label"} */
/* {block "field"} */
class Block_1522436506562016aa3d6f6_70566505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_1522436506562016aa3d6f6_70566505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'group_discount_category') {?>
	<div <?php if (!$_smarty_tpl->tpl_vars['form_id']->value) {?>class="hide"<?php }?>>
		<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$("#group_discount_category").fancybox({
				beforeLoad: function () {
					$('#group_discount_category_fancybox').show();
					$('#group_discount_category_fancybox .tree-panel-heading-controls').css('margin', '-40px 0px 20px');
					$('#group_discount_category_fancybox .form-horizontal').css('padding', '10px');
					initFancyBox();
				},
				beforeClose: function () {
					$('#group_discount_category_fancybox').hide();
				}
			});
		});

		function deleteCategoryReduction(id_category)
		{
			$('#group_discount_category_table tr#'+id_category).fadeOut('slow', function () {
				$(this).remove();
			});

		}

		function addCategoryReduction()
		{
			exist = false;
			$('.category_reduction').each( function () {
				if ($(this).attr('name') == 'category_reduction['+$('[name="id_category"]:checked').val()+']')
				{
					exist = true;
					jAlert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This category already exists for this group.','js'=>1,'d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
');
					return false;
				}
			});

			if (exist)
				return;
			$.ajax({
				type:"POST",
				url: "ajax-tab.php",
				async: true,
				dataType: "json",
				data : {
					ajax: "1",
					token: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminGroups'),$_smarty_tpl ) );?>
",
					controller: "AdminGroups",
					action: "addCategoryReduction",
					category_reduction: $('#category_reduction_fancybox').val() ,
					id_category: $('[name="id_category"]:checked').val()
				},
				success : function(jsonData) {
					if (jsonData.hasError)
					{
						var errors = '';
						for (error in jsonData.errors)
							//IE6 bug fix
							if (error != 'indexOf')
								errors += $('<div />').html(jsonData.errors[error]).text() + "\n";
						jAlert(errors);
					}
					else
					{
						$('#group_discount_category_table').append('<tr class="alt_row" id="'+jsonData.id_category+'"><td>'+jsonData.catPath+'</td><td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount','d'=>'Admin.Global'),$_smarty_tpl ) );?>
' + ' ' + jsonData.discount+'<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%'),$_smarty_tpl ) );?>
</td><td><a href="#" onclick="deleteCategoryReduction('+jsonData.id_category+');" class="btn btn-default"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a></td></tr>');
						var input_hidden = document.createElement("input");
						input_hidden.setAttribute('type', 'hidden');
						input_hidden.setAttribute('value', jsonData.discount);
						input_hidden.setAttribute('name', 'category_reduction['+jsonData.id_category+']');
						input_hidden.setAttribute('class', 'category_reduction');

						$('#group_discount_category_table tr#'+jsonData.id_category+' > td:last').append(input_hidden);
						$.fancybox.close();
					}
				}
			});

			return false;
		}

		function initFancyBox()
		{
			$('[name="id_category"]:checked').removeAttr('checked');
			$('#category_reduction_fancybox').val('0.00');
		}
		<?php echo '</script'; ?>
>

		<div class="col-lg-8">
			<a class="btn btn-default" href="#group_discount_category_fancybox" id="group_discount_category"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a category discount','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</a>
			<table class="table" id="group_discount_category_table">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
					<tr class="alt_row" id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['category']->value['path'];?>
</td>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount: %.2f%%','sprintf'=>array($_smarty_tpl->tpl_vars['category']->value['reduction']),'d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</td>
						<td>
							<a href="#" onclick="deleteCategoryReduction(<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
);"class="btn btn-default">
								<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

							</a>
							<input type="hidden" class="category_reduction" name="category_reduction[<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['reduction'];?>
">
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</div>
		<div id="group_discount_category_fancybox" class="bootstrap" style="display:none" >
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-group"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New group category discount','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>

				</div>
				<?php echo $_smarty_tpl->tpl_vars['categoryTreeView']->value;?>

				<div class="form-horizontal">
				<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Caution: The discount applied to a category does not stack with the overall reduction but instead replaces it.','d'=>'Admin.Shopparameters.Notification'),$_smarty_tpl ) );?>
</div>
				<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only products that have this category as the default category will be affected.','d'=>'Admin.Shopparameters.Notification'),$_smarty_tpl ) );?>
</div>
				<div class="form-group">
					<label class="control-label col-lg-3" for="category_reduction_fancybox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount (%):','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">
						<input type="text" name="category_reduction_fancybox" id="category_reduction_fancybox" value="0.00" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<button type="button" onclick="addCategoryReduction();" class="btn btn-default pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'modules') {?>
	<div <?php if (!$_smarty_tpl->tpl_vars['form_id']->value) {?>class="hide"<?php }?>>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function() {
				$('#authorized-modules').find('[value="0"]').click(function() {
					$(this).parent().parent().find('input[type=hidden]').attr('name', 'modulesBoxUnauth[]');
				});

				$('#authorized-modules').find('[value="1"]').click(function() {
					$(this).parent().parent().find('input[type=hidden]').attr('name', 'modulesBoxAuth[]');
				});
			});
		<?php echo '</script'; ?>
>

		<div class="col-lg-9" id="authorized-modules">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['auth_modules'], 'module', false, 'key');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
			<div class="form-group">
				<label class="control-label col-lg-4"><img src="../modules/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
/logo.png" height="16" width="16" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
" /> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
</label>
				<div class="input-group col-lg-8">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_on" value="1" checked="checked"/>
						<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
						<input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_off" value="0"/>
						<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
						<a class="slide-button btn"></a>
					</span>
					<input type="hidden" name="modulesBoxAuth[]" value="<?php echo intval($_smarty_tpl->tpl_vars['module']->value->id);?>
"/>
				</div>
			</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['unauth_modules'], 'module', false, 'key');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
			<div class="form-group">
				<label class="control-label col-lg-4"><img src="../modules/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
/logo.png" height="16" width="16" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
"/> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->displayName,'html','UTF-8' ));?>
</label>
				<div class="input-group col-lg-8">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_on" value="1"/>
						<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
						<input type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_off" value="0" checked="checked"/>
						<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
						<a class="slide-button btn"></a>
					</span>
					<input type="hidden" name="modulesBoxUnauth[]" value="<?php echo intval($_smarty_tpl->tpl_vars['module']->value->id);?>
"/>
				</div>
			</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "field"} */
}
