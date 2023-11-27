<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:06
  from '/var/www/html/admin/themes/default/template/helpers/tree/tree_associated_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016ae8d446_46422472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681e3ae2b21b9c3f2775ebfe1aaf7f13ef329cba' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_associated_categories.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016ae8d446_46422472 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="cattree tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var currentToken="<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
";
	var treeClickFunc = function() {
		var newURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
		var queryString = window.location.search.replace(/&id_category=[0-9]*/, "") + "&id_category=" + $(this).val();
		location.href = newURL+queryString; // hash part is dropped: window.location.hash
	};
	function addDefaultCategory(elem)
	{
		$('select#id_category_default').append('<option value="' + elem.val()+'">' + (elem.val() !=1 ? elem.parent().find('label').html() : home) + '</option>');
		if ($('select#id_category_default option').length > 0)
		{
			$('select#id_category_default').closest('.form-group').show();
			$('#no_default_category').hide();
		}
	}

	<?php if ((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true) {?>
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(':input[type=checkbox]').each(function(){
				$(this).prop('checked', true);

				addDefaultCategory($(this));
				$(this).parent().addClass('tree-selected');
			});
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(':input[type=checkbox]').each(function(){
				$(this).prop('checked', false);

				$('select#id_category_default option[value='+$(this).val()+']').remove();
				if ($('select#id_category_default option').length == 0)
				{
					$('select#id_category_default').closest('.form-group').hide();
					$('#no_default_category').show();
				}

				$(this).parent().removeClass('tree-selected');
			});
		}
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['use_search']->value)) && $_smarty_tpl->tpl_vars['use_search']->value == true) {?>
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
-categories-search').bind('typeahead:selected', function(obj, datum){
			var match = $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').find(':input[value="'+datum.id_category+'"]').first();
			if (match.length)
			{
				match.each(function(){
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents('ul.tree').each(function(){
							$(this).show();
							$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
						});
						addDefaultCategory($(this));
					}
				);
			}
			else
			{
				var selected = [];
				that = this;
				$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').find('.tree-selected input').each(
					function()
					{
						selected.push($(this).val());
					}
				);
				
				$.get(
					'ajax-tab.php',
					{controller:'AdminProducts',token:currentToken,action:'getCategoryTree', fullTree:1, selected:selected},
					function(content) {
				
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').html(content);
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').tree('init');
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').find(':input[value="'+datum.id_category+'"]').each(function(){
								$(this).prop("checked", true);
								$(this).parent().addClass("tree-selected");
								$(this).parents('ul.tree').each(function(){
									$(this).show();
									$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
								});
								full_loaded = true;
							}
						);
					}
				);
			}
		});
	<?php }?>
	$(document).ready(function(){
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').tree('collapseAll');
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').find(':input[type=radio]').click(treeClickFunc);

		<?php if ((isset($_smarty_tpl->tpl_vars['selected_categories']->value))) {?>
			$('#no_default_category').hide();
			<?php $_smarty_tpl->_assignInScope('imploded_selected_categories', implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value));?>
			var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

			if (selected_categories.length > 1)
				$('#expand-all-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').hide();
			else
				$('#collapse-all-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').hide();

			$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').find(':input').each(function(){
				if ($.inArray($(this).val(), selected_categories) != -1)
				{
					$(this).prop("checked", true);
					$(this).parent().addClass("tree-selected");
					$(this).parents('ul.tree').each(function(){
						$(this).show();
						$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
					});
				}
			});
		<?php } else { ?>
			$('#collapse-all-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
').hide();
		<?php }?>
	});
<?php echo '</script'; ?>
>
<?php }
}
