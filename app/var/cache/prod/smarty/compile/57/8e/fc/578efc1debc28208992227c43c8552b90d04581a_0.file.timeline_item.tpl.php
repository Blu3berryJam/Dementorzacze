<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016ac0aa79_76106118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '578efc1debc28208992227c43c8552b90d04581a' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/customer_threads/helpers/view/timeline_item.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016ac0aa79_76106118 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="timeline-item<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['alt']))) {?> alt<?php }?>">
	<div class="timeline-caption">
		<div class="timeline-panel arrow arrow-<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['arrow'];?>
">
			<span class="timeline-icon" style="background-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['timeline_item']->value['background_color'],'html','UTF-8' ));?>
;">
				<i class="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['icon'];?>
"></i>
			</span>
			<span class="timeline-date"><i class="icon-calendar"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['timeline_item']->value['date'],'full'=>0),$_smarty_tpl ) );?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['timeline_item']->value['date'],11,5);?>
</span>
			<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['id_order']))) {?><a class="badge" href="#"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Order #",'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );
echo intval($_smarty_tpl->tpl_vars['timeline_item']->value['id_order']);?>
</a><br/><?php }?>
			<span><?php echo nl2br($_smarty_tpl->tpl_vars['timeline_item']->value['content']);?>
</span>
			<?php if ((isset($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link']))) {?>
				<br/><br/><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'],'html','UTF-8' ));?>
" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"See more",'d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</a>
			<?php }?>
		</div>
	</div>
</article>
<?php }
}
