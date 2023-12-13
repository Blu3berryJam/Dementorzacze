<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:07
  from '/var/www/html/themes/classic/templates/customer/order-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016b1cbbe2_43847801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225d4559e3964f009826d3e6156ef1f21c1feea5' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/order-detail.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/order-detail-return.tpl' => 1,
    'file:customer/_partials/order-detail-no-return.tpl' => 1,
    'file:customer/_partials/order-messages.tpl' => 1,
  ),
),false)) {
function content_6562016b1cbbe2_43847801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9752774626562016b1ba682_55917610', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_816746316562016b1bae21_98541037', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_9752774626562016b1ba682_55917610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_9752774626562016b1ba682_55917610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'order_infos'} */
class Block_2455825376562016b1bb061_97439524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="order-infos">
      <div class="box">
          <div class="row">
            <div class="col-xs-<?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>9<?php } else { ?>12<?php }?>">
              <strong>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference %reference% - placed on %date%','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'],'%date%'=>$_smarty_tpl->tpl_vars['order']->value['details']['order_date'])),$_smarty_tpl ) );?>

              </strong>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
              <div class="col-xs-3 text-xs-right">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'UTF-8');?>
" class="button-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              </div>
            <?php }?>
            <div class="clearfix"></div>
          </div>
      </div>

      <div class="box">
          <ul>
            <li><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['name'], ENT_QUOTES, 'UTF-8');?>
</li>
            <li><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['payment'], ENT_QUOTES, 'UTF-8');?>
</li>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
              <li>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download your invoice as a PDF file.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['recyclable']) {?>
              <li>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have given permission to receive your order in recycled packaging.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

              </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['gift_message']) {?>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have requested gift wrapping for this order.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['details']['gift_message'];?>
</li>
            <?php }?>
          </ul>
      </div>
    </div>
  <?php
}
}
/* {/block 'order_infos'} */
/* {block 'order_history'} */
class Block_8695988196562016b1bfb51_44062112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="order-history" class="box">
      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow your order\'s status step-by-step','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
      <table class="table table-striped table-bordered table-labeled hidden-xs-down">
        <thead class="thead-default">
          <tr>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['history'], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
            <tr>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['history_date'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td>
                <span class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['contrast'], ENT_QUOTES, 'UTF-8');?>
" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </td>
            </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
      <div class="hidden-sm-up history-lines">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['history'], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
          <div class="history-line">
            <div class="date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['history_date'], ENT_QUOTES, 'UTF-8');?>
</div>
            <div class="state">
              <span class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['contrast'], ENT_QUOTES, 'UTF-8');?>
" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8');?>

              </span>
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </section>
  <?php
}
}
/* {/block 'order_history'} */
/* {block 'addresses'} */
class Block_13127573386562016b1c38c4_99840227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="addresses">
      <?php if ($_smarty_tpl->tpl_vars['order']->value['addresses']['delivery']) {?>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <article id="delivery-address" class="box">
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address %alias%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%alias%'=>$_smarty_tpl->tpl_vars['order']->value['addresses']['delivery']['alias'])),$_smarty_tpl ) );?>
</h4>
            <address><?php echo $_smarty_tpl->tpl_vars['order']->value['addresses']['delivery']['formatted'];?>
</address>
          </article>
        </div>
      <?php }?>

      <div class="col-lg-6 col-md-6 col-sm-6">
        <article id="invoice-address" class="box">
          <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address %alias%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%alias%'=>$_smarty_tpl->tpl_vars['order']->value['addresses']['invoice']['alias'])),$_smarty_tpl ) );?>
</h4>
          <address><?php echo $_smarty_tpl->tpl_vars['order']->value['addresses']['invoice']['formatted'];?>
</address>
        </article>
      </div>
      <div class="clearfix"></div>
    </div>
  <?php
}
}
/* {/block 'addresses'} */
/* {block 'order_detail'} */
class Block_20036605736562016b1c5b25_63090576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['is_returnable']) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/order-detail-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/order-detail-no-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  <?php
}
}
/* {/block 'order_detail'} */
/* {block 'order_carriers'} */
class Block_17473808226562016b1c6924_18187956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['order']->value['shipping']) {?>
      <div class="box">
        <table class="table table-striped table-bordered hidden-sm-down">
          <thead class="thead-default">
            <tr>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping cost','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
              <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tracking number','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['shipping'], 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
?>
              <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_date'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['carrier_name'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_weight'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_cost'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking'];?>
</td>
              </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
        <div class="hidden-md-up shipping-lines">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['shipping'], 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
?>
            <div class="shipping-line">
              <ul>
                <li>
                  <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_date'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['carrier_name'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_weight'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping cost','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['shipping_cost'], ENT_QUOTES, 'UTF-8');?>

                </li>
                <li>
                  <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tracking number','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</strong> <?php echo $_smarty_tpl->tpl_vars['line']->value['tracking'];?>

                </li>
              </ul>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'order_carriers'} */
/* {block 'order_messages'} */
class Block_4606719286562016b1cb3b5_13896971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/order-messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'order_messages'} */
/* {block 'page_content'} */
class Block_816746316562016b1bae21_98541037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_816746316562016b1bae21_98541037',
  ),
  'order_infos' => 
  array (
    0 => 'Block_2455825376562016b1bb061_97439524',
  ),
  'order_history' => 
  array (
    0 => 'Block_8695988196562016b1bfb51_44062112',
  ),
  'addresses' => 
  array (
    0 => 'Block_13127573386562016b1c38c4_99840227',
  ),
  'order_detail' => 
  array (
    0 => 'Block_20036605736562016b1c5b25_63090576',
  ),
  'order_carriers' => 
  array (
    0 => 'Block_17473808226562016b1c6924_18187956',
  ),
  'order_messages' => 
  array (
    0 => 'Block_4606719286562016b1cb3b5_13896971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2455825376562016b1bb061_97439524', 'order_infos', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8695988196562016b1bfb51_44062112', 'order_history', $this->tplIndex);
?>


  <?php if ($_smarty_tpl->tpl_vars['order']->value['follow_up']) {?>
    <div class="box">
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click the following link to track the delivery of your order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['follow_up'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['follow_up'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>
  <?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13127573386562016b1c38c4_99840227', 'addresses', $this->tplIndex);
?>


  <?php echo $_smarty_tpl->tpl_vars['HOOK_DISPLAYORDERDETAIL']->value;?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20036605736562016b1c5b25_63090576', 'order_detail', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17473808226562016b1c6924_18187956', 'order_carriers', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4606719286562016b1cb3b5_13896971', 'order_messages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
