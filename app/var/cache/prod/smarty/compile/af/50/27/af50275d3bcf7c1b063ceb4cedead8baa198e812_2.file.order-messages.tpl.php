<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:07
  from '/var/www/html/themes/classic/templates/customer/_partials/order-messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016b1382e8_83066057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af50275d3bcf7c1b063ceb4cedead8baa198e812' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/order-messages.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016b1382e8_83066057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10075360946562016b134163_72591015', 'order_messages_table');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4804184696562016b136007_44212848', 'order_message_form');
?>

<?php }
/* {block 'order_messages_table'} */
class Block_10075360946562016b134163_72591015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_messages_table' => 
  array (
    0 => 'Block_10075360946562016b134163_72591015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['order']->value['messages']) {?>
    <div class="box messages">
      <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['messages'], 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
        <div class="message row">
          <div class="col-sm-4">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['name'], ENT_QUOTES, 'UTF-8');?>
<br/>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message_date'], ENT_QUOTES, 'UTF-8');?>

          </div>
          <div class="col-sm-8">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

          </div>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }
}
}
/* {/block 'order_messages_table'} */
/* {block 'order_message_form'} */
class Block_4804184696562016b136007_44212848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_message_form' => 
  array (
    0 => 'Block_4804184696562016b136007_44212848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="order-message-form box">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_detail'], ENT_QUOTES, 'UTF-8');?>
" method="post">

      <header>
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a message','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h3>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your order, please write it in the field below.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
      </header>

      <section class="form-fields">

        <div class="form-group row">
          <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
          <div class="col-md-5">
            <select name="id_product" class="form-control form-control-select">
              <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-3 form-control-label"></label>
          <div class="col-md-9">
            <textarea rows="3" name="msgText" class="form-control"></textarea>
          </div>
        </div>

      </section>

      <footer class="form-footer text-sm-center">
        <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'UTF-8');?>
">
        <button type="submit" name="submitMessage" class="btn btn-primary form-control-submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      </footer>

    </form>
  </section>
<?php
}
}
/* {/block 'order_message_form'} */
}
