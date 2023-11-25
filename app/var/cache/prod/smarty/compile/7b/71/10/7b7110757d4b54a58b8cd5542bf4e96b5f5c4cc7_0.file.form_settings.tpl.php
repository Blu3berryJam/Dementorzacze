<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/referrers/form_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016acfbd64_93743536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b7110757d4b54a58b8cd5542bf4e96b5f5c4cc7' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/referrers/form_settings.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016acfbd64_93743536 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-lg-4">
			<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" method="post" id="refresh_index_form" name="refresh_index_form" class="form-horizontal">
				<div class="panel">
					<h3>
						<i class="icon-fullscreen"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Indexing','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>

					</h3>
					<div class="alert alert-info"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh index','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is a huge quantity of data, so each connection corresponding to a referrer is indexed. You can also refresh this index by clicking the "%refresh_index_label%" button. This process may take a while, and it\'s only needed if you modified or added a referrer, or if you want changes to be retroactive.','d'=>'Admin.Shopparameters.Help','sprintf'=>array('%refresh_index_label%'=>$_prefixVariable16)),$_smarty_tpl ) );?>
</div>
					<button type="submit" class="btn btn-default" name="submitRefreshIndex" id="submitRefreshIndex">
						<i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh index','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>

					</button>
				</div>
			</form>
		</div>
		<div class="col-lg-4">
			<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" method="post" id="refresh_cache_form" name="refresh_cache_form" class="form-horizontal">
				<div class="panel">
					<h3>
						<i class="icon-briefcase"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cache','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>

					</h3>
					<div class="alert alert-info"><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh cache','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );
$_prefixVariable17 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your data is cached in order to sort it and filter it. You can refresh the cache by clicking on the "%refresh_cache_label%" button.','d'=>'Admin.Shopparameters.Help','sprintf'=>array('%refresh_cache_label%'=>$_prefixVariable17)),$_smarty_tpl ) );?>
</div>
					<button type="submit" class="btn btn-default" name="submitRefreshCache" id="submitRefreshCache">
						<i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh cache','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>

					</button>
				</div>
			</form>
		</div>
    <div class="col-lg-4">
      <form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" method="post" id="settings_form" name="settings_form" class="form-horizontal">
        <div class="panel">
          <h3>
            <i class="icon-cog"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','d'=>'Admin.Global'),$_smarty_tpl ) );?>

          </h3>
          <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Direct traffic can be quite resource-intensive. You should consider enabling it only if you have a strong need for it.','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</div>
          <div class="form-group">
            <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save direct traffic?','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-6">
              <div class="row">
                <div class="input-group fixed-width-md">
                  <span class="switch prestashop-switch">
                    <input type="radio" name="tracking_dt" id="tracking_dt_on" value="1" <?php if ($_smarty_tpl->tpl_vars['tracking_dt']->value) {?>checked="checked"<?php }?> />
                    <label class="t" for="tracking_dt_on">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                    </label>
                    <input type="radio" name="tracking_dt" id="tracking_dt_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['tracking_dt']->value) {?>checked="checked"<?php }?>  />
                    <label class="t" for="tracking_dt_off">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                    </label>
                    <a class="slide-button btn"></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exclude taxes in sales total?','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-6">
              <div class="row">
                <div class="input-group fixed-width-md">
                  <span class="switch prestashop-switch">
                    <input type="radio" name="exclude_tx" id="exclude_tx_on" value="1" <?php if ($_smarty_tpl->tpl_vars['exclude_tx']->value) {?>checked="checked"<?php }?> />
                    <label class="t" for="exclude_tx_on">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                    </label>
                    <input type="radio" name="exclude_tx" id="exclude_tx_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['exclude_tx']->value) {?>checked="checked"<?php }?>  />
                    <label class="t" for="exclude_tx_off">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                    </label>
                    <a class="slide-button btn"></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-lg-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exclude shipping in sales total?','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
            <div class="col-lg-6">
              <div class="row">
                <div class="input-group fixed-width-md">
                  <span class="switch prestashop-switch">
                    <input type="radio" name="exclude_ship" id="exclude_ship_on" value="1" <?php if ($_smarty_tpl->tpl_vars['exclude_ship']->value) {?>checked="checked"<?php }?> />
                    <label class="t" for="exclude_ship_on">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                    </label>
                    <input type="radio" name="exclude_ship" id="exclude_ship_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['exclude_ship']->value) {?>checked="checked"<?php }?>  />
                    <label class="t" for="exclude_ship_off">
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                    </label>
                    <a class="slide-button btn"></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-default" name="submitSettings" id="submitSettings">
            <i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      </form>
    </div>
	</div>
</div>

<div id="settings_referrers" class="row">
	<?php if ($_smarty_tpl->tpl_vars['statsdata_name']->value) {?>
		<div class="col-lg-3">
			<div class="panel">
				<div class="alert alert-info">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The module '%s' must be activated and configurated in order to have all the statistics",'sprintf'=>array($_smarty_tpl->tpl_vars['statsdata_name']->value),'d'=>'Admin.Shopparameters.Notification'),$_smarty_tpl ) );?>

				</div>
			</div>
		</div>
	<?php }?>
</div>


<?php }
}
