<?php
/* Smarty version 4.3.4, created on 2024-06-03 22:51:01
  from '/var/www/html/admin4577/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e1ea56b7640_64387045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da578a7a090c46467edf9e0fd3941267f94bf34d' => 
    array (
      0 => '/var/www/html/admin4577/themes/default/template/content.tpl',
      1 => 1707475021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e1ea56b7640_64387045 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}