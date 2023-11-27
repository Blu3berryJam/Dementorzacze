<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:07
  from '/var/www/html/admin/themes/default/template/helpers/shops_list/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016b0cbf60_52471395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '858db6b08fe3b02eba64fc18b6469f1da1d65bb0' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/shops_list/list.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016b0cbf60_52471395 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['current_shop_name']->value;?>
 <i class="icon-caret-down"></i></a><div class="dropdown-menu dropdown-menu-right"><ul class="list-dropdown-menu"><li<?php if (!(isset($_smarty_tpl->tpl_vars['current_shop_value']->value)) || $_smarty_tpl->tpl_vars['current_shop_value']->value == '') {?> class="active"<?php }?>><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All shops'),$_smarty_tpl ) );?>
</a></li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tree']->value, 'group_data', false, 'group_id');
$_smarty_tpl->tpl_vars['group_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group_data']->value) {
$_smarty_tpl->tpl_vars['group_data']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['multishop_context']->value)) || $_smarty_tpl->tpl_vars['is_group_context']->value) {?><li class="group<?php if ($_smarty_tpl->tpl_vars['current_shop_value']->value == ('g-').($_smarty_tpl->tpl_vars['group_id']->value)) {?> active<?php }
if ($_smarty_tpl->tpl_vars['multishop_context_group']->value == false) {?> disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['multishop_context_group']->value == false) {?>#<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'html','UTF-8' ));?>
g-<?php echo $_smarty_tpl->tpl_vars['group_id']->value;
}?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s group','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_data']->value['name'],'html','UTF-8' )))),$_smarty_tpl ) );?>
</a></li><?php } elseif (!$_smarty_tpl->tpl_vars['is_all_context']->value) {?><ul class="group <?php if ($_smarty_tpl->tpl_vars['multishop_context_group']->value == false) {?> disabled<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s group','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_data']->value['name'],'html','UTF-8' )))),$_smarty_tpl ) );
}
if (!(isset($_smarty_tpl->tpl_vars['multishop_context']->value)) || $_smarty_tpl->tpl_vars['is_shop_context']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_data']->value['shops'], 'shop_data', false, 'shop_id');
$_smarty_tpl->tpl_vars['shop_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop_id']->value => $_smarty_tpl->tpl_vars['shop_data']->value) {
$_smarty_tpl->tpl_vars['shop_data']->do_else = false;
if (($_smarty_tpl->tpl_vars['shop_data']->value['active'])) {?><li class="shop<?php if ($_smarty_tpl->tpl_vars['current_shop_value']->value == ('s-').($_smarty_tpl->tpl_vars['shop_id']->value)) {?> active<?php }
if ($_smarty_tpl->tpl_vars['shop_data']->value['uri'] == NULL) {?> disabled<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['shop_data']->value['uri'] == NULL) {?>#<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'html','UTF-8' ));?>
s-<?php echo $_smarty_tpl->tpl_vars['shop_id']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['shop_data']->value['name'];?>
</a><?php if ($_smarty_tpl->tpl_vars['shop_data']->value['uri'] == NULL) {?><a class="link-shop" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop',true),'html','UTF-8' ));?>
" target="_blank"><i class="material-icons">&#xE869;</i></a><?php } else { ?><a class="link-shop" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getBaseLink($_smarty_tpl->tpl_vars['shop_data']->value['id_shop']);?>
" target="_blank"><i class="material-icons">&#xE8F4;</i></a><?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (!(!(isset($_smarty_tpl->tpl_vars['multishop_context']->value)) || $_smarty_tpl->tpl_vars['is_group_context']->value)) {?></ul><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div>
<?php }
}
