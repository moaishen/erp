<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 08:48:14
         compiled from ".\Application\Home\View\Usersmanage\vipSearch.html" */ ?>
<?php /*%%SmartyHeaderCode:2280254f8f94ecdfe66-94027617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62368ac38584411753f24411b4a3af32bcd01e02' => 
    array (
      0 => '.\\Application\\Home\\View\\Usersmanage\\vipSearch.html',
      1 => 1420687162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2280254f8f94ecdfe66-94027617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section' => 0,
    'user_list' => 0,
    'val' => 0,
    'page' => 0,
    'rank_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f8f94f0b71b0_56453503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f8f94f0b71b0_56453503')) {function content_54f8f94f0b71b0_56453503($_smarty_tpl) {?><table width="100%" cellspacing="0" cellpadding="0" class="wu_table_list rb_border wu_rb_border tr_hover" id="vip_list">
  <tr>
    <th width="8%">姓名</th>
    <th width="10%">生日</th>
    <th width="10%" class="a_sort"><a href="">会员卡ID</a></th>
    <th width="8%" class="a_sort"><a href="">积分</a></th>
    <?php if ($_smarty_tpl->tpl_vars['section']->value=='by_rank') {?>
    <th width="10%" class="a_sort"><a href="">升级需积分</a></th>
    <?php }?>
    <th width="15%" class="a_sort"><a href="">最近购买</a></th>
    <th width="10%" class="a_sort"><a href="">成功订单数</a></th>
    <th width="10%" class="a_sort"><a href="">消费总额</a></th>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['user_list']->value) {?>
  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['user_name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['birthday'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['val']->value['card_number']) {
echo $_smarty_tpl->tpl_vars['val']->value['card_number'];
} else { ?>-<?php }?></td>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['rank_points'];?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['section']->value=='by_rank') {?>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['up_rank_id'];?>
</td>
    <?php }?>
    <td><?php echo $_smarty_tpl->tpl_vars['val']->value['earliest_pur'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['val']->value['total']==''||$_smarty_tpl->tpl_vars['val']->value['total']<0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['val']->value['total'];
}?></td>
    <td><?php if ($_smarty_tpl->tpl_vars['val']->value['final_amount']==''||$_smarty_tpl->tpl_vars['val']->value['final_amount']<0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['val']->value['final_amount'];
}?></td>
  </tr>
  <?php } ?>
  <?php } else { ?>
  <tr>
    <td colspan="7">没有搜到相关会员</td>
  </tr>
  <?php }?>
</table>
<div class="bottom_tip page" id="pageDiv">
  <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div>
<input type="hidden" id="rank_id" value="<?php echo $_smarty_tpl->tpl_vars['rank_id']->value;?>
"/>
<?php }} ?>