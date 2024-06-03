<?php
/* Smarty version 4.3.4, created on 2024-06-03 23:30:12
  from '/var/www/html/admin4577/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e27d45f7391_71397290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5822032be1c5b2384fe9230ad2a701e1c3b0032' => 
    array (
      0 => '/var/www/html/admin4577/themes/new-theme/template/content.tpl',
      1 => 1717445863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e27d45f7391_71397290 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
