<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/controllers/access/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016a95f983_68990111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aa6cfa77ca81b2de0548ee8c9820c55074a21fb' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/access/helpers/form/form.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:toolbar.tpl' => 1,
  ),
),false)) {
function content_6562016a95f983_68990111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<script'; ?>
 type="text/javascript">
   $(document).ready(function() {
      var id_tab_parentmodule = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_parentmodule']->value);?>
;
      var id_tab_module = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_module']->value);?>
;
      $('tr.child-'+id_tab_parentmodule+' > td > input.view.'+id_tab_module).change( function () {
         if (!$(this).prop('checked'))
         {
            $('#table_module_2 thead th:eq(1) input').trigger('click');
            if ($('#table_module_2 thead th:eq(1) input').prop('checked'))
               $('#table_module_2 thead th:eq(1) input').trigger('click');
         }
      });
      $('tr.child-'+id_tab_parentmodule+' > td > input.edit.'+id_tab_module).change( function () {
         if (!$(this).prop('checked'))
         {
            $('#table_module_2 thead th:eq(2) input').trigger('click');
            if ($('#table_module_2 thead th:eq(2) input').prop('checked'))
               $('#table_module_2 thead th:eq(2) input').trigger('click');
         }
      });

      $('div.productTabs').find('a').each(function() {
         $(this).attr('href', '#');
      });
      $('div.productTabs a').click(function() {
         var id = $(this).attr('id');
         $('.nav-profile').removeClass('selected');
         $(this).addClass('selected active');
         $(this).siblings().removeClass('active');
         $('.tab-profile').hide()
         $('.'+id).show();
      });
      function getChildren(table, perm, parent, rel) {
         var kids = document.querySelectorAll(table+" [data-parent='"+parent+"'][data-type='"+perm+"']:not([data-rel='"+rel+"'])");
         for(var i=0; i<kids.length;i++)
         {
            if(kids[i].checked) {
               return true;
            }
         }
         return false;
      }
      $('.ajaxPower').change(function(){
         var tout = $(this).data('rel').split('||');
         var rel = $(this).data('rel');
         var id_tab = tout[0];
         var id_profile = tout[1];
         var perm = tout[2];
         var enabled = $(this).is(':checked')? 1 : 0;
         var tabsize = tout[3];
         var tabnumber = tout[4];
         var table = 'table#table_'+id_profile;
         var $parentRow = ($(this).parents('tr'));
         var classes = $parentRow.attr('class');
         var $permissionCheckbox = $(this);
         var targetPermissionType;
         var parent = $(this).attr('data-parent');
         if (parent != 0){
            var $parentelem = $(table + ' .ajaxPower.' + perm + '.' + parent);
            if(!$parentelem.is(':checked')){
               $parentelem.prop("checked", true).change();
            }else{
               if(!$(this).is(':checked') && !getChildren(table, perm, parent, rel))
                  $parentelem.prop("checked", false).change();
            }
         }
         switch (true) {
            case $permissionCheckbox.hasClass('view'): targetPermissionType = '.view'; break;
            case $permissionCheckbox.hasClass('add'): targetPermissionType = '.add'; break;
            case $permissionCheckbox.hasClass('delete'): targetPermissionType = '.delete'; break;
            case $permissionCheckbox.hasClass('edit'): targetPermissionType = '.edit'; break;
         }
         if (enabled && classes) {
            var subject = 'child';
            var subjectIndex = classes.indexOf(subject);
            if (-1 !== subjectIndex) {
               var subjectIndexes = [];
               while (-1 !== subjectIndex) {
                  subjectIndexes.push(subjectIndex);
                  subjectIndex = classes.indexOf(subject, subjectIndex + 1);
               }
               subjectIndexes.pop();
               var classAttribute = subject + '-';
               var targetClass;
               var $parentPermissions;
               var $parentPermission;
               while (subjectIndexes.length > 0) {
                  targetClass = new Array(subjectIndexes.length + 1).join(classAttribute);
                  $parentPermissions = $parentRow.prevAll().filter(function (rowIndex, row) {
                     return $(row).attr('class').match(new RegExp('^' + targetClass + '[0-9]'));
                  });
                  $parentPermission = $($parentPermissions[0]).find(targetPermissionType);
                  if (!$parentPermission.prop('checked')) {
                     $parentPermission.prop('checked', true);
                  }
                  subjectIndexes.pop();
               }
               var $topParent = $($parentRow.prevAll().filter('.parent')[0]).find(targetPermissionType);
               if (!$topParent.prop('checked')) {
                  $topParent.prop('checked', true);
               }
            }
         }
         if (perm == 'all' && $(this).parent().parent().hasClass('parent'))
         {
            if (enabled)
               $(this).parent().parent().parent().find('.child-'+id_tab+' input[type=checkbox]').attr('checked', 'checked');
            else
               $(this).parent().parent().parent().find('.child-'+id_tab+' input[type=checkbox]').removeAttr('checked');
            $.ajax({
               url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
               cache: false,
               data : {
                  ajaxMode : '1',
                  id_tab: id_tab,
                  id_profile: id_profile,
                  perm: perm,
                  enabled: enabled,
                  submitAddAccess: '1',
                  addFromParent: '1',
                  action: 'updateAccess',
                  ajax: '1',
                  token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
               },
               success : function(res,textStatus,jqXHR)
               {
                  try {
                     if (res == 'ok')
                        showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','d'=>'Admin.Notifications.Success'),$_smarty_tpl ) );?>
");
                     else
                        showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to update settings.','d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
");
                  } catch(e) {
                     jAlert('Technical error');
                  }
               }
            });
         }
         perfect_access_js_gestion(this, perm, id_tab, tabsize, tabnumber, table);
         $.ajax({
            url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
            cache: false,
            data : {
               ajaxMode : '1',
               id_tab: id_tab,
               id_profile: id_profile,
               perm: perm,
               enabled: enabled,
               submitAddAccess: '1',
               action: 'updateAccess',
               ajax: '1',
               token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
            },
            success : function(res,textStatus,jqXHR)
            {
               try
               {
                  if (res == 'ok')
                     showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','d'=>'Admin.Notifications.Success'),$_smarty_tpl ) );?>
");
                  else
                     showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to update settings.','d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
");
               }
               catch(e)
               {
                  jAlert('Technical error');
               }
            }
         });
      });
      $(".changeModuleAccess").change(function(){
         var tout = $(this).data('rel').split('||');
         var id_module = tout[0];
         var perm = tout[1];
         var id_profile = tout[2];
         var enabled = $(this).is(':checked') ? 1 : 0;
         var enabled_attr = $(this).is(':checked') ? true : false;
         var table = 'table#table_module_'+id_profile;
         if (id_module == -1)
            $(table+' .ajax-ma-'+perm).each(function(key, value) {
               $(this).attr("checked", enabled_attr);
            });
         else if (!enabled)
            $(table+' #ajax-ma-'+perm+'-master').each(function(key, value) {
               $(this).attr("checked", enabled_attr);
            });
         $.ajax({
            url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
            cache: false,
            data : {
               ajaxMode: '1',
               id_module: id_module,
               perm: perm,
               enabled: enabled,
               id_profile: id_profile,
               changeModuleAccess: '1',
               action: 'updateModuleAccess',
               ajax: '1',
               token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
            },
            success : function(res,textStatus,jqXHR)
            {
               try
               {
                  if (res == 'ok')
                     showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','d'=>'Admin.Notifications.Success'),$_smarty_tpl ) );?>
");
                  else
                     showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to update settings.','d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
");
               }
               catch(e)
               {
                  jAlert('Technical error');
               }
            }
         });
      });
   });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
  <div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19748526806562016a928d87_26284391', "leadin");
?>
</div>
<?php }?>
<div class="row">
  <div class="productTabs col-lg-2">
    <div class="tab list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
        <a class="list-group-item nav-profile <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] == $_smarty_tpl->tpl_vars['current_profile']->value) {?>active<?php }?>"
           id="profile-<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"
           href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
&amp;id_profile=<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
  <form id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" class="defaultForm form-horizontal col-lg-10"
        action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
=1&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
"
        method="post" enctype="multipart/form-data">
    <?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
      <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"/>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('tabsize', count($_smarty_tpl->tpl_vars['tabs']->value));?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['tab']->value['id_tab'] > $_smarty_tpl->tpl_vars['tabsize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('tabsize', $_smarty_tpl->tpl_vars['tab']->value['id_tab']);?>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
      <div class="profile-<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
 tab-profile"
           style="display:<?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] != $_smarty_tpl->tpl_vars['current_profile']->value) {?>none<?php }?>">
        <div class="row">
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] != $_smarty_tpl->tpl_vars['admin_profile']->value) {?>
            <div class="col-lg-6">
              <div class="panel">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>
</h3>
                <table class="table" id="table_<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
">
                  <?php $_smarty_tpl->_assignInScope('enable_bulk_view', true);?>
                  <?php $_smarty_tpl->_assignInScope('enable_bulk_add', true);?>
                  <?php $_smarty_tpl->_assignInScope('enable_bulk_edit', true);?>
                  <?php $_smarty_tpl->_assignInScope('enable_bulk_delete', true);?>
                  <?php $_smarty_tpl->_assignInScope('enable_bulk_all', true);?>
                  <tbody>
                  <?php if (!count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
                    <tr>
                      <td colspan="6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No menu','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>
</td>
                    </tr>
                  <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                      <?php $_smarty_tpl->_assignInScope('access', $_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']]);?>
                      <?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
                      <tr class="parent">
                        <td class="bold"> &raquo;<strong><?php echo $_smarty_tpl->tpl_vars['tab']->value['name'];?>
</strong></td>
                        <?php $_smarty_tpl->_assignInScope('has_all_rights', true);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                          <?php $_smarty_tpl->_assignInScope('id_perm', $_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value]);?>
                          <?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                            <td>
                              <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
" data-parent="0" data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                     data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                     class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                            </td>
                          <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('has_all_rights', false);?>
                            <?php $_smarty_tpl->_assignInScope('enable_bulk_view', false);?>
                            <td>
                              <input type="checkbox"
                                     disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                            </td>
                          <?php }?>
                          <?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <td>
                          <input
                            type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="0" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
                        </td>
                      </tr>
                      <?php if (count($_smarty_tpl->tpl_vars['tab']->value['children'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['children'], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['child']->value['id_parent'] === $_smarty_tpl->tpl_vars['tab']->value['id_tab']) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]))) {?>
                              <?php $_smarty_tpl->_assignInScope('is_child', true);?>
                              <?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
                              <tr class="child-<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
">
                                <td class="bold"> &raquo; <?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</td>
                                <?php $_smarty_tpl->_assignInScope('has_all_rights', true);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                                  <?php $_smarty_tpl->_assignInScope('id_perm', $_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value]);?>
                                  <?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                                    <td>
                                      <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
"
                                             data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                             data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                             class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                    </td>
                                  <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('has_all_rights', false);?>
                                    <?php $_smarty_tpl->_assignInScope('enable_bulk_add', false);?>
                                    <td>
                                      <input type="checkbox"
                                             disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                    </td>
                                  <?php }?>
                                  <?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <td>
                                  <input
                                    type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
                                </td>
                              </tr>
                            <?php }?>

                            <?php if (count($_smarty_tpl->tpl_vars['child']->value['children'])) {?>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child']->value['children'], 'subChild');
$_smarty_tpl->tpl_vars['subChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subChild']->value) {
$_smarty_tpl->tpl_vars['subChild']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]))) {?>
                                  <?php $_smarty_tpl->_assignInScope('is_child', true);?>
                                  <?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
                                  <tr class="child-child-<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
">
                                    <td class="bold"> &nbsp; &nbsp; &raquo; <?php echo $_smarty_tpl->tpl_vars['subChild']->value['name'];?>
</td>
                                    <?php $_smarty_tpl->_assignInScope('has_all_rights', true);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                                      <?php $_smarty_tpl->_assignInScope('id_perm', $_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value]);?>
                                      <?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                                        <td>
                                          <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
"
                                                 data-parent="<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                                 data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                                 class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                        </td>
                                      <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('has_all_rights', false);?>
                                        <?php $_smarty_tpl->_assignInScope('enable_bulk_edit', false);?>
                                        <td>
                                          <input type="checkbox"
                                                 disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                        </td>
                                      <?php }?>
                                      <?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <td>
                                      <input
                                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
                                    </td>
                                  </tr>
                                  <?php if (count($_smarty_tpl->tpl_vars['subChild']->value['children'])) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subChild']->value['children'], 'subsubChild');
$_smarty_tpl->tpl_vars['subsubChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsubChild']->value) {
$_smarty_tpl->tpl_vars['subsubChild']->do_else = false;
?>
                                      <?php if ((isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]))) {?>
                                        <?php $_smarty_tpl->_assignInScope('is_child', true);?>
                                        <?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
                                        <tr class="child-child-child-<?php echo $_smarty_tpl->tpl_vars['subsubChild']->value['id_parent'];?>
">
                                          <td class="bold">&nbsp; &nbsp; &nbsp; &nbsp; &raquo; <?php echo $_smarty_tpl->tpl_vars['subsubChild']->value['name'];?>
</td>
                                          <?php $_smarty_tpl->_assignInScope('has_all_rights', true);?>
                                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('id_perm', $_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value]);?>
                                            <?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                                              <td>
                                                <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
"
                                                       data-parent="<?php echo $_smarty_tpl->tpl_vars['subsubChild']->value['id_parent'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                                       data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                                       class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                              </td>
                                            <?php } else { ?>
                                              <?php $_smarty_tpl->_assignInScope('has_all_rights', false);?>
                                              <?php $_smarty_tpl->_assignInScope('enable_bulk_delete', false);?>
                                              <td>
                                                <input type="checkbox"
                                                       disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
                                              </td>
                                            <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
                                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                          <td>
                                            <input
                                              type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> <?php $_smarty_tpl->_assignInScope('enable_bulk_all', false);?>class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
                                          </td>
                                        </tr>
                                      <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  <?php }?>
                                <?php }?>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                          <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <?php }?>
                  </tbody>
                  <thead>
                  <tr>
                    <th></th>
                    <th>
                      <input type="checkbox" name="1"
                             class="viewall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_view']->value) {?> data-id="0" data-parent="0" data-type="view" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||view||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="addall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_add']->value) {?> data-id="1" data-parent="0" data-type="add" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||add||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="editall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_edit']->value) {?> data-id="2" data-parent="0" data-type="edit" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||edit||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="deleteall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_delete']->value) {?> data-id="3" data-parent="0" data-type="delete" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||delete||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="allall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_all']->value) {?> data-id="4" data-parent="0" data-type="all" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                    </th>
                  </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="panel">
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</h3>
                <table class="table" id="table_module_<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
">
                  <tbody>
                  <?php if (!count($_smarty_tpl->tpl_vars['modules']->value)) {?>
                    <tr>
                      <td colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No module has been installed.','d'=>'Admin.Notifications.Warning'),$_smarty_tpl ) );?>
</td>
                    </tr>
                  <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('enable_bulk_view', true);?>
                    <?php $_smarty_tpl->_assignInScope('enable_bulk_configure', true);?>
                    <?php $_smarty_tpl->_assignInScope('enable_bulk_uninstall', true);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']], 'module', false, 'k');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
                      <tr>
                        <td>&raquo; <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</td>
                        <td>
                          <input type="checkbox"
                                 value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['view'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['k']->value]['view']) {?> class="ajax-ma-view changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||view||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else {
$_smarty_tpl->_assignInScope('enable_bulk_view', false);?> class="ajax-ma-view" disabled="disabled"<?php }?>/>
                        </td>
                        <td>
                          <input type="checkbox"
                                 value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['configure'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['k']->value]['configure']) {?> class="ajax-ma-configure changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||configure||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else {
$_smarty_tpl->_assignInScope('enable_bulk_configure', false);?> class="ajax-ma-configure" disabled="disabled"<?php }?>/>
                        </td>
                        <td>
                          <input type="checkbox"
                                 value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['uninstall'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['k']->value]['uninstall']) {?> class="ajax-ma-uninstall changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||uninstall||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else {
$_smarty_tpl->_assignInScope('enable_bulk_uninstall', false);?> class="ajax-ma-uninstall" disabled="disabled"<?php }?>/>
                        </td>
                      </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <?php }?>
                  </tbody>
                  <thead>
                  <tr>
                    <th></th>
                    <th>
                      <input
                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_view']->value) {?> class="changeModuleAccess" data-rel="-1||view||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </th>
                    <th>
                      <input
                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_configure']->value) {?> class="changeModuleAccess" data-rel="-1||configure||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </th>
                    <th>
                      <input
                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1 && $_smarty_tpl->tpl_vars['enable_bulk_uninstall']->value) {?> class="changeModuleAccess" data-rel="-1||uninstall||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

                    </th>
                  </tr>
                  </thead>
                </table>
              </div>
            </div>
          <?php } else { ?>
            <div class="col-lg-12">
              <div class="panel">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Administrator permissions cannot be modified.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl ) );?>

              </div>
            </div>
          <?php }?>
        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </form>
</div>
<?php }
/* {block "leadin"} */
class Block_19748526806562016a928d87_26284391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_19748526806562016a928d87_26284391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
}
