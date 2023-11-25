<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/suppliers/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016abad5d2_40685394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d8996657cc479eb7fae421d4f8bc1dbc20b8911' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/suppliers/helpers/view/view.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016abad5d2_40685394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16834139026562016ab9e002_64039086', "override_tpl");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_16834139026562016ab9e002_64039086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_16834139026562016ab9e002_64039086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
	<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['supplier']->value->name;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of products:'),$_smarty_tpl ) );?>
 <?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
</div>
	<table class="table">
		<thead>
			<tr>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product name'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute name'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supplier Reference'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wholesale price'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EAN13'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPC'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MPN','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</span></th>
				<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?><th class="right"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Quantity'),$_smarty_tpl ) );?>
</span></th><?php }?>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			<?php if (!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()) {?>
				<tr>
					<td><a class="btn btn-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>$_smarty_tpl->tpl_vars['product']->value->id,'updateproduct'=>'1')),'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></td>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );?>
</td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->product_supplier_reference)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->product_supplier_reference;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->product_supplier_price_te)) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['product']->value->product_supplier_price_te;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->reference)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->reference;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->ean13)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->ean13;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->upc)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->upc;
}?></td>
					<td><?php if (empty($_smarty_tpl->tpl_vars['product']->value->mpn)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product']->value->mpn;
}?></td>
					<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?><td class="right" width="150"><?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
</td><?php }?>
				</tr>
			<?php } else { ?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->combination, 'product_attribute', false, 'id_product_attribute');
$_smarty_tpl->tpl_vars['product_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_product_attribute']->value => $_smarty_tpl->tpl_vars['product_attribute']->value) {
$_smarty_tpl->tpl_vars['product_attribute']->do_else = false;
?>
					<tr <?php if ($_smarty_tpl->tpl_vars['id_product_attribute']->value%2) {?>class="alt_row"<?php }?> >
						<td><a class="btn btn-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>$_smarty_tpl->tpl_vars['product']->value->id,'updateproduct'=>'1')),'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['attributes'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['attributes'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_reference'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_reference'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_price_te'])) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['product_supplier_price_te'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['reference'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['reference'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['ean13'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['ean13'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['upc'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['upc'];
}?></td>
						<td><?php if (empty($_smarty_tpl->tpl_vars['product_attribute']->value['mpn'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['product_attribute']->value['mpn'];
}?></td>
						<?php if ($_smarty_tpl->tpl_vars['stock_management']->value && $_smarty_tpl->tpl_vars['shopContext']->value != Shop::CONTEXT_ALL) {?><td class="right"><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['quantity'];?>
</td><?php }?>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
