<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-24 16:50:39
         compiled from ".\Application\Home\View\Checkingin\approval.html" */ ?>
<?php /*%%SmartyHeaderCode:1476054fcfe4629f631-04942548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f16bb2f40a270f83edb719b10e211fe0272c4c7' => 
    array (
      0 => '.\\Application\\Home\\View\\Checkingin\\approval.html',
      1 => 1427186291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1476054fcfe4629f631-04942548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fcfe46393878_81693112',
  'variables' => 
  array (
    'header' => 0,
    'nav' => 0,
    'url' => 0,
    'title' => 0,
    'role_list' => 0,
    'v' => 0,
    'typeList' => 0,
    'val' => 0,
    'staff_list' => 0,
    'k' => 0,
    'approval_list' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fcfe46393878_81693112')) {function content_54fcfe46393878_81693112($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>

<div class="wd750 pd12px">
  <input type="hidden" id="url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
  <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/addApproval" method="POST">
    <table class="form single">
      <caption><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</caption>
      <tr>
        <th>部门</th>
        <td>
          <select name="role_id">
            <option value="0">请选择部门</option>
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
        </td>
      </tr>
      <tr>
        <th>类型</th>
        <td>
          <select name="type_id" required title="类型">
            <option value="0">所有</option>
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['type_name'];?>
</option>
            <?php } ?>
          </select>
          <font class="red">*</font>
        </td>
      </tr>
      <tr>
        <th>审批人</th>
        <td>
          <select name="staff_id" required>
           <option value="0">请选择员工</option> 
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staff_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
           <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <!--<input type="submit" name="submit" value="保存"/>-->
          <button type="submit" class="btn btn-primary popover-show" 
            data-toggle="popover" 
            data-content="">
            保存
          </button>
        </td>
      </tr>
    </table>
  </form>
  <table class="gridtable">
    <caption class='title'>请假审批人列表</caption> 
    <tr>
      <th width="2%">序号</th>
      <th width="10%">分类</th>
      <th width="10%">审批人</th>
      <th width="10%">添加时间</th>
      <th width="15%">操作</th>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['approval_list']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['approval_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['iteration']++;
?>
    <tr>
      <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['iteration'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['type_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['staff_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['add_time'];?>
</td>
      <td>
        <input type="button" value="修改" class="btn-link" data-toggle="modal"
        onclick="editCheckinginApproal(<?php echo $_smarty_tpl->tpl_vars['val']->value['approval_id'];?>
)" data-target="#myModal" />
        <input type="button" value="删除" class="btn-link" />
      </td>
    </tr>
    <?php } ?>
    <?php } else { ?>
    <tr>
      <td colspan="4">人事部忙碌中，暂时忘了添加记录</td>
    </tr>
    <?php }?>
  </table>
</div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
  aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel"> 考勤审批修改</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/editApproval/behave/save" method="POST" id="editForm">
          <table class="form single" style="width:100%;margin-top:0px;">
            <tr>
              <th>部门</th>
              <td>
                <select name="role_id">
                  <option value="0">请选择部门</option>
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
              </td>
            </tr>
            <tr>
              <th>类型</th>
              <td>
                <select name="type_id" required title="类型">
                  <option value="0">所有</option>
                  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['type_name'];?>
</option>
                  <?php } ?>
                </select>
                <font class="red">*</font>
              </td>
            </tr>
            <tr>
              <th>审批人</th>
              <td>
                <select name="staff_id" required>
                  <option value="0">请选择员工</option> 
                  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staff_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                  <?php } ?>
                </select>
              </td>
            </tr>
            <input type="hidden" name="approval_id" value="0"/>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" 
          data-dismiss="modal">关闭
        </button>
        <input type="submit" class="btn btn-primary" form="editForm"  value="提交更改">
      </div>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal -->
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }} ?>