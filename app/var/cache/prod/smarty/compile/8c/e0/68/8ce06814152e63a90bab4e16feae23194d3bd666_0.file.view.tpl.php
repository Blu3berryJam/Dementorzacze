<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/search/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016a9b7ef7_06292822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce06814152e63a90bab4e16feae23194d3bd666' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/search/helpers/view/view.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016a9b7ef7_06292822 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
$(function() {
    $('#content .panel').highlight('<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
');
});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
    <h2>
    <?php if ((isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value == 0) {?>
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no results matching your query "%s".','sprintf'=>array($_smarty_tpl->tpl_vars['query']->value),'html'=>1,'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</h2>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value == 1) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 result matches your query "%s".','sprintf'=>array($_smarty_tpl->tpl_vars['query']->value),'html'=>1,'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

    <?php } elseif ((isset($_smarty_tpl->tpl_vars['nb_results']->value))) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results match your query "%s".','sprintf'=>array(intval($_smarty_tpl->tpl_vars['nb_results']->value),$_smarty_tpl->tpl_vars['query']->value),'html'=>1,'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

    <?php }?>
    </h2>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['query']->value && (isset($_smarty_tpl->tpl_vars['nb_results']->value)) && $_smarty_tpl->tpl_vars['nb_results']->value) {?>

    <?php if ((isset($_smarty_tpl->tpl_vars['features']->value))) {?>
    <div class="panel">
        <h3>
            <?php if (count($_smarty_tpl->tpl_vars['features']->value) == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 feature','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d features','sprintf'=>array(count($_smarty_tpl->tpl_vars['features']->value)),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <table class="table">
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value, 'val', false, 'k', 'feature_list', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['index'];
?>
                    <tr>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['link'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_feature_list']->value['first'] : null)) {?>><strong><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</strong><?php }?></a></td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
</a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['modules']->value)) && $_smarty_tpl->tpl_vars['modules']->value) {?>
    <div class="panel">
        <h3>
            <?php if (count($_smarty_tpl->tpl_vars['modules']->value) == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 module','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d modules','sprintf'=>array(count($_smarty_tpl->tpl_vars['modules']->value)),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <table class="table">
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module', false, 'key');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                <tr>
                    <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->linkto,'html','UTF-8' ));?>
"><strong><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</strong></a></td>
                    <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->linkto,'html','UTF-8' ));?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>
</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        </table>
    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['categories']->value)) && $_smarty_tpl->tpl_vars['categories']->value) {?>
    <div class="panel">
        <h3>
            <?php if (count($_smarty_tpl->tpl_vars['categories']->value) == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 category','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d categories','sprintf'=>array(count($_smarty_tpl->tpl_vars['categories']->value)),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <table class="table" style="border-spacing : 0; border-collapse : collapse;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value && (isset($_smarty_tpl->tpl_vars['productsCount']->value)) && $_smarty_tpl->tpl_vars['productsCount']->value) {?>
    <div class="panel">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['productsCount']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 product','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d products','sprintf'=>array($_smarty_tpl->tpl_vars['productsCount']->value),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->tpl_vars['products']->value;?>

    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['customers']->value)) && $_smarty_tpl->tpl_vars['customers']->value && (isset($_smarty_tpl->tpl_vars['customerCount']->value)) && $_smarty_tpl->tpl_vars['customerCount']->value) {?>
    <div class="panel">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['customerCount']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 customer','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d customers','sprintf'=>array($_smarty_tpl->tpl_vars['customerCount']->value),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->tpl_vars['customers']->value;?>

    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['orders']->value)) && $_smarty_tpl->tpl_vars['orders']->value && (isset($_smarty_tpl->tpl_vars['orderCount']->value)) && $_smarty_tpl->tpl_vars['orderCount']->value) {?>
    <div class="panel">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['orderCount']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 order','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d orders','sprintf'=>array($_smarty_tpl->tpl_vars['orderCount']->value),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->tpl_vars['orders']->value;?>

    </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['addons']->value)) && $_smarty_tpl->tpl_vars['addons']->value) {?>
    <div class="panel">
        <h3>
            <?php if (count($_smarty_tpl->tpl_vars['addons']->value) == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 addon','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d addons','sprintf'=>array(count($_smarty_tpl->tpl_vars['addons']->value)),'d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>

            <?php }?>
        </h3>
        <table class="table">
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon', false, 'key');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                <tr>
                    <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value['href'],'html','UTF-8' ));?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" target="_blank" rel="noopener noreferrer nofollow"><strong><i class="icon-external-link-sign"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value['title'],'html','UTF-8' ));?>
</strong></a></td>
                    <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value['href'],'html','UTF-8' ));?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" target="_blank" rel="noopener noreferrer nofollow"><?php if (is_string($_smarty_tpl->tpl_vars['addon']->value['description'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon']->value['description'],256,'...' )),'html','UTF-8' ));
}?></a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="text-center"><a href="https://addons.prestashop.com/search.php?search_query=<?php echo urlencode($_smarty_tpl->tpl_vars['query']->value);?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" target="_blank" rel="noopener noreferrer nofollow"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show more results...','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</strong></a></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php }?>

<?php }?>
<div class="row">
    <div class="col-lg-4">
        <div class="panel">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search docs.prestashop-project.org','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</h3>
            <a href="https://docs.prestashop-project.org/1.7-documentation?q=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the documentation','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search addons.prestashop.com','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</h3>
            <a href="https://addons.prestashop.com/search.php?search_query=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
&amp;utm_source=back-office&amp;utm_medium=search&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to Addons','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search prestashop.com forum','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</h3>
            <a href="https://www.google.fr/search?q=site%3Aprestashop.com%2Fforums%2F+<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="btn btn-default _blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the Forum','d'=>'Admin.Navigation.Search'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>
</div>
<?php }
}
