<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 11:10:48
         compiled from ".\Application\Home\View\Checkingin\report.html" */ ?>
<?php /*%%SmartyHeaderCode:17380552876d82625a7-45237068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b5834d1c8845a08256a48ffb024eed827d1c1aa' => 
    array (
      0 => '.\\Application\\Home\\View\\Checkingin\\report.html',
      1 => 1428715330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17380552876d82625a7-45237068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552876d83567e6_81719758',
  'variables' => 
  array (
    'header' => 0,
    'nav' => 0,
    'title' => 0,
    'report' => 0,
    'url' => 0,
    'report_checkingin' => 0,
    'role_list' => 0,
    'v' => 0,
    'report_time' => 0,
    'report_list' => 0,
    'saveUrl' => 0,
    'dataUrl' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552876d83567e6_81719758')) {function content_552876d83567e6_81719758($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>

<!--标签切换-->
<div id="resource" class="wd750 pd12px">
  <div class="bootstrap-table-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 
    <?php if ($_smarty_tpl->tpl_vars['report']->value) {?>
    <a class="btn btn-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">统计考勤报表于结算工资</a>
    <?php }?>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['report_checkingin']->value) {?>
  <div style="padding-top:12px;float:right;">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/checkinginReport/act/search" method="post" >
      <select name="role_id" style="padding:3.5px">
        <option value="0">部门</option>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</option>
        <?php } ?>
      </select>
      <input type="text" name="staff_name" value="" placeholder="员工姓名"/>
      <input type="text" name="report_time" onfocus="WdatePicker({dateFmt:'yyyy-MM'})" placeholder="月份" value="<?php echo $_smarty_tpl->tpl_vars['report_time']->value;?>
"/>
      <input type="submit" value="搜索"/>
      &nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/checkingin">返回考勤汇总</a>
    </form>
  </div>
  <table class="table gridtable erp-table checkingin_report">
    <tr>
      <th width="6%"  rowspan="2">序号</th>
      <th width="10%" rowspan="2">姓名</th>
      <th width="10%" rowspan="2">出勤天数</th>
      <th width="10%" rowspan="2">缺勤天数</th>
      <th width="10%" colspan="2">迟到（次）</th>
      <th width="14%" colspan="2">调休（天）</th>
      <th width="10%" colspan="2">加班（时）</th>
    </tr>
    <tr>
      <th width="10%">次数</th>
      <th width="10%">扣款</th>
      <th width="10%">加班调休</th>
      <th width="10%">年假调休</th>
      <th width="10%">正常加班</th>
      <th width="10%">晚上加班</th>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['report_list']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['report_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
?>
    <tr>
      <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['staff_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value['working_days'];?>
</td>
      <td><?php if ($_smarty_tpl->tpl_vars['v']->value['outworking_days']) {
echo $_smarty_tpl->tpl_vars['v']->value['outworking_days'];
} else { ?>0<?php }?></td>
      <td><?php if ($_smarty_tpl->tpl_vars['v']->value['late_times']) {
echo $_smarty_tpl->tpl_vars['v']->value['late_times'];
} else { ?>0<?php }?></td>
      <td><?php if ($_smarty_tpl->tpl_vars['v']->value['dedcut_late']) {
echo $_smarty_tpl->tpl_vars['v']->value['dedcut_late'];
} else { ?>0.00<?php }?></td>
      <td><?php if ($_smarty_tpl->tpl_vars['v']->value['ot_lieu']) {
echo $_smarty_tpl->tpl_vars['v']->value['ot_lieu'];
} else { ?>0<?php }?></td>
      <td><?php if ($_smarty_tpl->tpl_vars['v']->value['year_lieu']) {
echo $_smarty_tpl->tpl_vars['v']->value['year_lieu'];
} else { ?>0<?php }?></td>
      <td><?php if ($_smarty_tpl->tpl_vars['v']->value['normal_ot']) {
echo $_smarty_tpl->tpl_vars['v']->value['normal_ot'];
} else { ?>0<?php }?></td>
      <td><?php if ($_smarty_tpl->tpl_vars['v']->value['night_ot']) {
echo $_smarty_tpl->tpl_vars['v']->value['night_ot'];
} else { ?>0<?php }?></td>
    </tr>
    <?php } ?>
    <?php } else { ?>
    <tr><td colspan="10">没有记录</td></tr>
    <?php }?>
    <tr>
      <td colspan="10" style="text-align:right;border:0px;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['saveUrl']->value;?>
" class="btn btn-primary">保存</a>
      </td>
    </tr>
  </table>
  <?php } else { ?>
  <table data-toggle="table" data-url="<?php echo $_smarty_tpl->tpl_vars['dataUrl']->value;?>
" data-search="true" data-height="699" data-show-refresh="true" data-show-toggle="true" data-pagination="true">
    <thead>
      <tr>
        <th data-field="staff_name">申请人</th>
        <th data-field="type_name">类型</th>
        <th data-field="from_to">起止时间</th>
        <th data-field="date">时长</th>
        <th data-field="reason">原因</th>
        <th data-field="checker">审批人</th>
      </tr>
    </thead>
  </table>
  <?php }?>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }} ?>
