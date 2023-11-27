<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/return/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016a97baa1_39730135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e72305d8763329643dc1429d16a32acf4b9650ba' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/return/helpers/form/form.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016a97baa1_39730135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3638775976562016a96b3f4_14915966', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'helpers/form/form.tpl');
}
/* {block "input"} */
class Block_3638775976562016a96b3f4_14915966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_3638775976562016a96b3f4_14915966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text_customer') {?>
		<span><?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>
</span>
		<p>
			<a class="text-muted" href="<?php echo $_smarty_tpl->tpl_vars['url_customer']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View details on the customer page','d'=>'Admin.Orderscustomers.Help'),$_smarty_tpl ) );?>
</a>
		</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text_order') {?>
		<span><?php echo $_smarty_tpl->tpl_vars['text_order']->value;?>
</span>
		<p>
			<a class="text-muted" href="<?php echo $_smarty_tpl->tpl_vars['url_order']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View details on the order page','d'=>'Admin.Orderscustomers.Help'),$_smarty_tpl ) );?>
</a>
		</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'pdf_order_return') {?>
		<p>
			<?php if ($_smarty_tpl->tpl_vars['state_order_return']->value == 2) {?>
				<a class="btn" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['id_order_return']->value);
$_prefixVariable5=ob_get_clean();
ob_start();
echo Tools::getAdminTokenLite('AdminReturn');
$_prefixVariable6=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['employee']->value->id);
$_prefixVariable7=ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-return',true,NULL,"id_order_return=".$_prefixVariable5."&adtoken=".$_prefixVariable6."&id_employee=".$_prefixVariable7),'html','UTF-8' ));?>
">
					<i class="icon-file-text"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print out','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

				</a>
			<?php } else { ?>
				--
			<?php }?>
		</p>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'list_products') {?>
		<table class="table">
			<thead>
				<tr>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product name','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</th>
					<th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</th>
					<th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['returnedCustomizations']->value, 'returnedCustomization');
$_smarty_tpl->tpl_vars['returnedCustomization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['returnedCustomization']->value) {
$_smarty_tpl->tpl_vars['returnedCustomization']->do_else = false;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['returnedCustomization']->value['reference'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['returnedCustomization']->value['name'];?>
</td>
						<td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['returnedCustomization']->value['product_quantity']);?>
</td>
						<td class="text-center">
							<a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;deleteorder_return_detail&amp;id_order_detail=<?php echo $_smarty_tpl->tpl_vars['returnedCustomization']->value['id_order_detail'];?>
&amp;id_order_return=<?php echo $_smarty_tpl->tpl_vars['id_order_return']->value;?>
&amp;id_customization=<?php echo $_smarty_tpl->tpl_vars['returnedCustomization']->value['id_customization'];?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
">
								<i class="icon-remove"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

							</a>
						</td>
					</tr>
					<?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['returnedCustomization']->value['product_id']);?>
					<?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['returnedCustomization']->value['product_attribute_id']);?>
					<?php $_smarty_tpl->_assignInScope('customizationId', $_smarty_tpl->tpl_vars['returnedCustomization']->value['id_customization']);?>
					<?php $_smarty_tpl->_assignInScope('addressDeliveryId', $_smarty_tpl->tpl_vars['returnedCustomization']->value['id_address_delivery']);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['addressDeliveryId']->value][$_smarty_tpl->tpl_vars['customizationId']->value]['datas'], 'datas', false, 'type');
$_smarty_tpl->tpl_vars['datas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->do_else = false;
?>
						<tr>
							<td colspan="4">
								<div class="form-horizontal">
									<?php if ($_smarty_tpl->tpl_vars['type']->value == Product::CUSTOMIZE_FILE) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
											<div class="form-group">
												<span class="col-lg-3 control-label"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachment'),$_smarty_tpl ) );?>
</strong></span>
												<div class="col-lg-9">
													<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts',true,array(),array('ajax'=>1,'action'=>'customizationImage','img'=>$_smarty_tpl->tpl_vars['data']->value['value'],'name'=>((intval($_smarty_tpl->tpl_vars['returnedCustomization']->value['id_order_detail'])).('-file')).((isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration'] : null))));?>
" target="_blank" rel="noopener noreferrer nofollow"><img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['picture_folder']->value;
echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" /></a>
												</div>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == Product::CUSTOMIZE_TEXTFIELD) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
												<div class="form-group">
													<span class="control-label col-lg-3"><strong><?php if ($_smarty_tpl->tpl_vars['data']->value['name']) {
echo $_smarty_tpl->tpl_vars['data']->value['name'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text #%d','sprintf'=>array((isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration'] : null)),'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );
}?></strong></span>
													<div class="col-lg-9">
														<p class="form-control-static">
															<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>

														</p>
													</div>
												</div>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
								</div>
							</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<?php if (!(isset($_smarty_tpl->tpl_vars['quantityDisplayed']->value[$_smarty_tpl->tpl_vars['product']->value['id_order_detail']])) || intval($_smarty_tpl->tpl_vars['product']->value['product_quantity']) > intval($_smarty_tpl->tpl_vars['quantityDisplayed']->value[$_smarty_tpl->tpl_vars['product']->value['id_order_detail']])) {?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['product']->value['product_reference'];?>
</td>
							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</td>
							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_quantity'];?>
</td>
							<td class="text-center">
								<a class="btn btn-default"  href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;deleteorder_return_detail&amp;id_order_detail=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_order_detail'];?>
&amp;id_order_return=<?php echo $_smarty_tpl->tpl_vars['id_order_return']->value;?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
">
									<i class="icon-remove"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

								</a>
							</td>
						</tr>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
