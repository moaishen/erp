<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 09:09:56
         compiled from ".\Application\Home\View\Hrm\staffSearch.html" */ ?>
<?php /*%%SmartyHeaderCode:3093055247fe4895442-74043417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1edb7143fbbfcdb7c2ff1ff3104ba59ccb648fcd' => 
    array (
      0 => '.\\Application\\Home\\View\\Hrm\\staffSearch.html',
      1 => 1426758964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3093055247fe4895442-74043417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'staff_list' => 0,
    'val' => 0,
    'staffListUrl' => 0,
    'archivesUrl' => 0,
    'archivesPrint' => 0,
    'editUrl' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55247fe494c5f9_56257582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55247fe494c5f9_56257582')) {function content_55247fe494c5f9_56257582($_smarty_tpl) {?><table width="100%" cellpadding="0" cellspacing="0" border="0" class="wu_table_list rb_border wu_rb_border tr_hover">
  <tr>
    <th width="5%">序号</th>
    <th width="8%">姓名</th>
    <th width="13%">编号</th>
    <th width="5%">性别</th>
    <th width="15%">部门</th>
    <th width="10%">岗位</th>
    <!--<th width="13%">入职时长</th>-->
    <th width="13%">入职时间</th>
    <th width="5%">状态</th>
    <th width="8%">员工类型</th>
    <th width="29%">操作</th>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['staff_list']->value) {?>
  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['staff_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['staff_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['staff_name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['number'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sex'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['role_name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['job_title'];?>
</td>
    <!--<td><?php echo $_smarty_tpl->tpl_vars['val']->value['joined_long'];?>
</td>-->
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['joined_date'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['type'];?>
</td>
    <td>
      <a class="btn_new" <?php if (!$_smarty_tpl->tpl_vars['staffListUrl']->value) {?>target="_blank"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['archivesUrl']->value;?>
/staff_id/<?php echo $_smarty_tpl->tpl_vars['val']->value['staff_id'];?>
/tp/true">查看</a>|&nbsp; 
      <a class="btn_new" <?php if (!$_smarty_tpl->tpl_vars['staffListUrl']->value) {?>target="_blank"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['archivesPrint']->value;?>
/staff_id/<?php echo $_smarty_tpl->tpl_vars['val']->value['staff_id'];?>
/tp/true">打印</a>|&nbsp; 
      <a class="btn_new" <?php if (!$_smarty_tpl->tpl_vars['staffListUrl']->value) {?>target="_blank"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['editUrl']->value;?>
/staff_id/<?php echo $_smarty_tpl->tpl_vars['val']->value['staff_id'];?>
/tp/true">编辑</a>
    </td>
  </tr>
  <?php } ?>
  <?php } else { ?>
  <td colspan="10">没有员工记录</td>
  <?php }?>
</table>
<div class="bottom_tip page" id="pageDiv"> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 </div>
<?php }} ?>
