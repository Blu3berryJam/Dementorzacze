<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/customer_threads/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016abf6631_53902061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28f0d538eaf7e6616840af42774b0f0b2099de61' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/customer_threads/message.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016abf6631_53902061 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['email']->value) {?>
	<div class="panel">
		<h3>
			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['employee_name'])) {?>
				<i><?php echo $_smarty_tpl->tpl_vars['employee_avatar']->value;?>
</i>
					 (<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_name'];?>
) - <?php echo $_smarty_tpl->tpl_vars['PS_SHOP_NAME']->value;?>

			<?php } else { ?>
				<i class="icon-user"></i>
				<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['id_customer'])) {?>
					<a href="index.php?tab=AdminCustomers&amp;id_customer=<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer'];?>
&amp;viewcustomer&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View customer','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
">
						<?php echo $_smarty_tpl->tpl_vars['message']->value['customer_name'];?>

					</a>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['message']->value['email'];?>

				<?php }?>
			<?php }?>
		</h3>
		<div class="infoCustomer">
			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['id_customer']) && empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer ID:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd>
					<a href="index.php?tab=AdminCustomers&amp;id_customer=<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer'];?>
&amp;viewcustomer&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View customer','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
">
						<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer'];?>
 <i class="icon-search"></i>
					</a>
				</dd>
			</dl>
			<?php }?>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sent on:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['date_add'];?>
&nbsp;</dd>
			</dl>
			<?php if (empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Browser:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['user_agent'];?>
&nbsp;</dd>
			</dl>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['file_name']) && $_smarty_tpl->tpl_vars['file_name']->value) {?>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File attachment','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd>
					<a href="index.php?tab=AdminCustomerThreads&amp;id_customer_thread=<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_thread'];?>
&amp;viewcustomer_thread&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomerThreads'),$_smarty_tpl ) );?>
&amp;filename=<?php echo $_smarty_tpl->tpl_vars['message']->value['file_name'];?>
"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View file','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
">
						<i class="icon-search"></i>
					</a>
				</dd>
			</dl>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['id_order']) && $_smarty_tpl->tpl_vars['is_valid_order_id']->value && empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
				<dl class="dl-horizontal">
					<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order #','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
					<dd><a href="index.php?tab=AdminOrders&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['message']->value['id_order'];?>
&amp;vieworder&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminOrders'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['id_order'];?>
 <img src="../img/admin/search.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
" /></a>
					</dd>
				</dl>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['id_product']) && empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
				<dl class="dl-horizontal">
					<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product #','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
					<dd><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts',true,array('id_product'=>$_smarty_tpl->tpl_vars['message']->value['id_product'],'updateproduct'=>'1')),'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['id_product'];?>
 <img src="../img/admin/search.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
" /></a></dd>
				</dl>
			<?php }?>

			<form class="form-inline" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
&amp;id_customer_thread=<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_thread'];?>
&amp;viewcustomer_thread" method="post" >
				<input type="hidden" name="id_customer_message" value="<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_message'];?>
" />
				<div class="form-group">
					<dl class="dl-horizontal">
						<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject:','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</dt>
						<dd>
							<select name="id_contact" class="fixed-width-lg" onchange="this.form.submit();">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id_contact'];?>
" <?php if ($_smarty_tpl->tpl_vars['contact']->value['id_contact'] == $_smarty_tpl->tpl_vars['message']->value['id_contact']) {?>selected="selected"<?php }?>>
										<?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>

									</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</dd>
					</dl>
				</div>
			</form>
		</div>
<?php } else { ?>
		<div class="infoEmployee">
			<?php if ($_smarty_tpl->tpl_vars['id_employee']->value) {?>
				<a class="btn btn-default pull-right" href="<?php echo $_smarty_tpl->tpl_vars['thread_url']->value;?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View this thread','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

				</a>
			<?php }?>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sent by:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd>
					<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['customer_name'])) {?>
						<?php echo $_smarty_tpl->tpl_vars['message']->value['customer_name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['message']->value['email'];?>
)
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['message']->value['email'];?>

					<?php }?>
				</dd>
			</dl>

			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['id_customer']) && empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
				<!--<dl class="dl-horizontal">
					<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer ID:'),$_smarty_tpl ) );?>
</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer'];?>
</dd>
				</dl>-->
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['id_order']) && empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
				<!--<dl class="dl-horizontal">
					<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order #'),$_smarty_tpl ) );?>
:</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['id_order'];?>
</dd>
				</dl>-->
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['id_product']) && empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
				<!--<dl class="dl-horizontal">
					<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product #'),$_smarty_tpl ) );?>
:</dt>
					<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['id_product'];?>
</dd>
				</dl>-->
			<?php }?>

			<!--<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject:'),$_smarty_tpl ) );?>
</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['subject'];?>
</dd>
			</dl>-->
<?php }
if (!$_smarty_tpl->tpl_vars['email']->value) {?>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thread ID:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_thread'];?>
</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message ID:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_message'];?>
</dd>
			</dl>
<?php }?>
			<dl class="dl-horizontal">
				<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</dt>
				<dd><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['message'],'html','UTF-8' )));?>
</dd>
			</dl>
		</div>
<?php if (!$_smarty_tpl->tpl_vars['email']->value) {?>
	</div>
	<?php if (empty($_smarty_tpl->tpl_vars['message']->value['id_employee'])) {?>
		<div class="panel">
			<button class="btn btn-default"
				onclick="$('#reply_to_<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_message'];?>
').show(500); $(this).parent().hide();">
				<i class="icon-mail-reply"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply to this message','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

			</button>
		</div>
	<?php }?>
	<div id="reply_to_<?php echo $_smarty_tpl->tpl_vars['message']->value['id_customer_message'];?>
" style="display: none;">
		<div class="panel">
			<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomerThreads'),$_smarty_tpl ) );?>
&amp;id_customer_thread=<?php echo intval($_smarty_tpl->tpl_vars['message']->value['id_customer_thread']);?>
&amp;viewcustomer_thread=1" method="post" enctype="multipart/form-data" class="form-horizontal">
				<div class="panel-heading">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please type your reply below:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

				</div>
				<div class="row row-margin-bottom">
					<textarea class="col-lg-12" rows="6" name="reply_message"><?php echo $_smarty_tpl->tpl_vars['PS_CUSTOMER_SERVICE_SIGNATURE']->value;?>
</textarea>
				</div>
				<div class="row">
					<p class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your reply will be sent to:','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['message']->value['email'];?>
</p>
				</div>
				<div class="row row-margin-bottom">
					<input type="file" name="joinFile"/>
				</div>
				<div class="row">
					<button type="submit" class="btn btn-default" name="submitReply">
						<i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send my reply','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</button>
					<input type="hidden" name="id_customer_thread" value="<?php echo intval($_smarty_tpl->tpl_vars['message']->value['id_customer_thread']);?>
" />
					<input type="hidden" name="msg_email" value="<?php echo $_smarty_tpl->tpl_vars['message']->value['email'];?>
" />
				</div>
			</form>
		</div>
	</div>
<?php }
}
}
