<?php /* Smarty version Smarty-3.1.7, created on 2020-02-18 08:03:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1535886035e4b9a4990ded3-52573640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ef5214d15e331544cec9efe361b2a5351303b76' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1572870387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1535886035e4b9a4990ded3-52573640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e4b9a4991412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4b9a4991412')) {function content_5e4b9a4991412($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['QUICK_PREVIEW'] = new Smarty_variable("true", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>

<?php }} ?>