<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 17:41:51
         compiled from ".\Application\Home\View\Public\bheader.html" */ ?>
<?php /*%%SmartyHeaderCode:9154552489965b8d86-85765863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abdb6f694d7a9fc2d5cf62a8041931c3c1957570' => 
    array (
      0 => '.\\Application\\Home\\View\\Public\\bheader.html',
      1 => 1428572413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9154552489965b8d86-85765863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552489965f5e14_26043747',
  'variables' => 
  array (
    'title' => 0,
    'publicUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552489965f5e14_26043747')) {function content_552489965f5e14_26043747($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['publicUrl']->value;?>
/bootstrap/css/bootstrap.min.css" type="text/css" charset="utf8"/>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['publicUrl']->value;?>
/bootstrap/css/bootstrap-table.css" type="text/css" charset="utf8"/>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['publicUrl']->value;?>
/styles/erp.css" type="text/css" charset="utf8"/>
  <link href="<?php echo $_smarty_tpl->tpl_vars['publicUrl']->value;?>
/js/My97DatePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['publicUrl']->value;?>
/jqueryUI/chosen.css" type="text/css" charset="utf8"/>
</head>
<body style="overflow:auto">
  <div class="alert alert-warning" id="alert_warning">
    <a href="#" class="close" > &times; </a>
    <strong>警告！</strong><span>问题提示。</span>
  </div>
  <div class="alert alert-success" id="alert_success">
    <a href="#" class="close" >&times;</a>
    <strong>成功！</strong><span>结果是成功的。</span>
  </div>

<?php }} ?>
