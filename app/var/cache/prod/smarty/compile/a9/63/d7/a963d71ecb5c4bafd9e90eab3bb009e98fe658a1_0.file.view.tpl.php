<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/carts/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016ac61d54_91850158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a963d71ecb5c4bafd9e90eab3bb009e98fe658a1' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/carts/helpers/view/view.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016ac61d54_91850158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2923488756562016ac3fec7_76381382', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_2923488756562016ac3fec7_76381382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_2923488756562016ac3fec7_76381382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>

<div class="panel">
	<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer information','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['customer']->value->id) {?>
				<a class="btn btn-default pull-right" href="mailto:<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
"><i class="icon-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
</a>
				<h2>
					<?php if ($_smarty_tpl->tpl_vars['customer']->value->id_gender == 1) {?>
					<i class="icon-male"></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['customer']->value->id_gender == 2) {?>
					<i class="icon-female"></i>
					<?php } else { ?>
					<i class="icon-question"></i>
					<?php }?>
					<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomers',true,array(),array('id_customer'=>intval($_smarty_tpl->tpl_vars['customer']->value->id),'viewcustomer'=>1)),'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>
</a></h2>
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account registration date:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-3"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['customer']->value->date_add),$_smarty_tpl ) );?>
</p></div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valid orders placed:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-3"><p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['customer_stats']->value['nb_orders'];?>
</p></div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total spent since registration:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-3"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['customer_stats']->value['total_orders'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</p></div>
					</div>
				</div>
			<?php } else { ?>
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest not registered','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</h2>
			<?php }?>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order information','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</h3>
			<?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?>
				<h2><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders',true,array(),array('id_order'=>intval($_smarty_tpl->tpl_vars['order']->value->id),'vieworder'=>1)),'html','UTF-8' ));?>
"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order #%d','sprintf'=>array(sprintf("%06d",$_smarty_tpl->tpl_vars['order']->value->id)),'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</a></h2>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Made on:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add),$_smarty_tpl ) );?>

			<?php } else { ?>
				<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No order was created from this cart.','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</h2>
				<?php if ($_smarty_tpl->tpl_vars['customer']->value->id) {?>
					<a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders',true,array(),array('id_cart'=>intval($_smarty_tpl->tpl_vars['cart']->value->id),'addorder'=>1)),'html','UTF-8' ));?>
"><i class="icon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an order from this cart.','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</a>
				<?php }?>
			<?php }?>
		</div>
	</div>
</div>
<div class="panel">
	<h3><i class="icon-archive"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart summary','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</h3>
		<div class="row">
			<table class="table" id="orderProducts">
				<thead>
					<tr>
						<th class="fixed-width-xs">&nbsp;</th>
						<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
						<th class="text-right fixed-width-md"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
						<th class="text-center fixed-width-md"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
						<th class="text-center fixed-width-sm"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stock','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
						<th class="text-right fixed-width-sm"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
					</tr>
				</thead>
				<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['customizedDatas']) {?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
</td>
							<td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'updateproduct'=>1)),'html','UTF-8' ));?>
">
										<span class="productName"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes']))) {?><br /><?php echo $_smarty_tpl->tpl_vars['product']->value['attributes'];
}?><br />
									<?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ref:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];
}?>
									<?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] && $_smarty_tpl->tpl_vars['product']->value['supplier_reference']) {?> / <?php echo $_smarty_tpl->tpl_vars['product']->value['supplier_reference'];
}?>
								</a>
							</td>
							<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'];?>
</td>
							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['qty_in_stock'];?>
</td>
							<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_customization_wt'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
						</tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizedDatas'], 'customizationPerAddress');
$_smarty_tpl->tpl_vars['customizationPerAddress']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customizationPerAddress']->value) {
$_smarty_tpl->tpl_vars['customizationPerAddress']->do_else = false;
?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationPerAddress']->value, 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
						    <?php if (count($_smarty_tpl->tpl_vars['customizationPerAddress']->value) == 1 && ((int)$_smarty_tpl->tpl_vars['customization']->value['id_customization'] != (int)$_smarty_tpl->tpl_vars['product']->value['id_customization'])) {
continue 1;
}?>
						    <tr>
							    <td colspan="2">
							    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['datas'], 'datas', false, 'type');
$_smarty_tpl->tpl_vars['datas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['datas']->value) {
$_smarty_tpl->tpl_vars['datas']->do_else = false;
?>
								    <?php if ($_smarty_tpl->tpl_vars['type']->value == constant('Product::CUSTOMIZE_FILE')) {?>
									    <ul style="margin: 0; padding: 0; list-style-type: none;">
									    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data', false, 'index');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
											    <li style="display: inline; margin: 2px;">
												    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCarts',true,array(),array('ajax'=>1,'action'=>'customizationImage','img'=>$_smarty_tpl->tpl_vars['data']->value['value'],'name'=>((intval($_smarty_tpl->tpl_vars['order']->value->id)).('-file')).($_smarty_tpl->tpl_vars['index']->value)));?>
" target="_blank" rel="noopener noreferrer nofollow">
												    <img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
_small" alt="" /></a>
											    </li>
									    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									    </ul>
								    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == constant('Product::CUSTOMIZE_TEXTFIELD')) {?>
									    <div class="form-horizontal">
										    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data', false, 'index');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
											    <div class="form-group">
												    <span class="control-label col-lg-3"><strong><?php if ($_smarty_tpl->tpl_vars['data']->value['name']) {
echo $_smarty_tpl->tpl_vars['data']->value['name'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text #','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['index']->value;
}?></strong></span>
												    <div class="col-lg-9">
													    <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
</p>
												    </div>
											    </div>
										    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									    </div>
								    <?php }?>
							    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							    </td>
							    <td></td>
							    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
</td>
							    <td></td>
							    <td></td>
						    </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>

					<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'])) || $_smarty_tpl->tpl_vars['product']->value['cart_quantity'] > $_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']) {?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
</td>
							<td>
								<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'updateproduct'=>1)),'html','UTF-8' ));?>
">
									<span class="productName"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes']))) {?><br /><?php echo $_smarty_tpl->tpl_vars['product']->value['attributes'];
}?><br />
									<?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ref:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];
}?>
									<?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] && $_smarty_tpl->tpl_vars['product']->value['supplier_reference']) {?> / <?php echo $_smarty_tpl->tpl_vars['product']->value['supplier_reference'];
}?>
								</a>
							</td>
							<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['product_price'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
							<td class="text-center"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']))) {
echo smarty_function_math(array('equation'=>'x - y','x'=>$_smarty_tpl->tpl_vars['product']->value['cart_quantity'],'y'=>intval($_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal'])),$_smarty_tpl);
} else {
echo smarty_function_math(array('equation'=>'x - y','x'=>$_smarty_tpl->tpl_vars['product']->value['cart_quantity'],'y'=>intval($_smarty_tpl->tpl_vars['product']->value['customization_quantity'])),$_smarty_tpl);
}?></td>
							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['qty_in_stock'];?>
</td>
							<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['product_total'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
						</tr>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<tr>
					<td colspan="5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total cost of products:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_products']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['total_discounts']->value != 0) {?>
				<tr>
					<td colspan="5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total value of vouchers:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_discounts']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['total_wrapping']->value > 0) {?>
				<tr>
					<td colspan="5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total cost of gift wrapping:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_wrapping']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,Cart::ONLY_SHIPPING) > 0) {?>
				<tr>
					<td colspan="5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping costs:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</td>
					<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_shipping']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</td>
				</tr>
				<?php }?>
				<tr>
					<td colspan="5" class=" success"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</strong></td>
					<td class="text-right success"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_price']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['discounts']->value) {?>
	<div class="clear">&nbsp;</div>
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th class="fixed-width-xs"><img src="../img/admin/coupon.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discounts','d'=>'Admin.Global'),$_smarty_tpl ) );?>
" /></th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount name'),$_smarty_tpl ) );?>
</th>
					<th class="text-right fixed-width-md"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
				<tr>
					<td class="fixed-width-xs"><?php echo $_smarty_tpl->tpl_vars['discount']->value['id_discount'];?>
</td>
					<td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules',true,array(),array('id_cart_rule'=>$_smarty_tpl->tpl_vars['discount']->value['id_discount'],'updatecart_rule'=>1)),'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</a></td>
					<td class="text-right fixed-width-md"><?php if ((float)$_smarty_tpl->tpl_vars['discount']->value['value_real'] == 0 && (int)$_smarty_tpl->tpl_vars['discount']->value['free_shipping'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping','d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );
} else { ?>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );
}?></td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	</div>
	<?php }?>
	<div class="clear">&nbsp;</div>
	<div class="row alert alert-warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For this particular customer group, prices are displayed as:','d'=>'Admin.Orderscustomers.Notification'),$_smarty_tpl ) );?>
 <b><?php if ($_smarty_tpl->tpl_vars['tax_calculation_method']->value == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Admin.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Admin.Global'),$_smarty_tpl ) );
}?></b>
	</div>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
