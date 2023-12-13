<?php
/* Smarty version 3.1.48, created on 2023-11-25 15:15:07
  from '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6562016b36a383_01607806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32fcc89612a50c949dc70b126dd6551bf53c3e0b' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/category.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6562016b36a383_01607806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9591040526562016b368287_10355642', 'category_miniature_item');
?>

<?php }
/* {block 'category_miniature_item'} */
class Block_9591040526562016b368287_10355642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_miniature_item' => 
  array (
    0 => 'Block_9591040526562016b368287_10355642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="category-miniature">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
      <img
        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
        alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
        loading="lazy"
        width="250"
        height="250"
      >
    </a>

    <h1 class="h2">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </h1>

    <div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
  </section>
<?php
}
}
/* {/block 'category_miniature_item'} */
}
