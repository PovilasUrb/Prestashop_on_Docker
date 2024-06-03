<?php
/* Smarty version 4.3.4, created on 2024-06-04 00:52:57
  from '/var/www/html/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e3b3957fbb4_96361659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579c444f5397cd4c75e0b285d91624b034925df9' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1717445868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e3b3957fbb4_96361659 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
