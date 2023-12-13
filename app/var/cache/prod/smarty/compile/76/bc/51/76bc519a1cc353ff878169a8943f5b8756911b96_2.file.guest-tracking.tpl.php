<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:07
  from '/var/www/html/themes/classic/templates/customer/guest-tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016b196649_13804850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76bc519a1cc353ff878169a8943f5b8756911b96' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/guest-tracking.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/order-detail-no-return.tpl' => 1,
  ),
),false)) {
function content_6562016b196649_13804850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11175630036562016b192d04_68724140', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_933874826562016b193475_37941126', 'order_detail');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6866623096562016b193ae7_83815650', 'order_messages');
?>


<?php if (!$_smarty_tpl->tpl_vars['is_customer']->value) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13829498116562016b194237_87532508', 'page_content');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/order-detail.tpl');
}
/* {block 'page_title'} */
class Block_11175630036562016b192d04_68724140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_11175630036562016b192d04_68724140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'order_detail'} */
class Block_933874826562016b193475_37941126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_detail' => 
  array (
    0 => 'Block_933874826562016b193475_37941126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/order-detail-no-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'order_detail'} */
/* {block 'order_messages'} */
class Block_6866623096562016b193ae7_83815650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_messages' => 
  array (
    0 => 'Block_6866623096562016b193ae7_83815650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'order_messages'} */
/* {block 'guest_to_customer'} */
class Block_2580584026562016b194470_67056936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['guest_tracking'], ENT_QUOTES, 'UTF-8');?>
" method="post">
      <header>
        <h1 class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transform your guest account into a customer account and enjoy:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h1>
        <ul>
          <li> -<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personalized and secure access','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
          <li> -<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fast and easy checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
          <li> -<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Easier merchandise return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</li>
        </ul>
      </header>

      <section class="form-fields">

        <label>
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set your password:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</span>
          <input type="password" data-validate="isPasswd" name="password" value="">
        </label>

      </section>

      <footer class="form-footer">
        <input type="hidden" name="submitTransformGuestToCustomer" value="1">
        <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="order_reference" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reference'], ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guest_email']->value, ENT_QUOTES, 'UTF-8');?>
">

        <button class="btn btn-primary" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </footer>

    </form>
  <?php
}
}
/* {/block 'guest_to_customer'} */
/* {block 'page_content'} */
class Block_13829498116562016b194237_87532508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_13829498116562016b194237_87532508',
  ),
  'guest_to_customer' => 
  array (
    0 => 'Block_2580584026562016b194470_67056936',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2580584026562016b194470_67056936', 'guest_to_customer', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
