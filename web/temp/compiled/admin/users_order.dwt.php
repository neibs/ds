<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
<div class="warpper">
    <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['lang']['02_user_stats']; ?></div>
    <div class="content">
        <div class="tabs_info">
            <ul>
                <li class="curr"><a href="users_order.php?act=order_num"><?php echo $this->_var['lang']['report_users']; ?></a></li>
                <li><a href="guest_stats.php?act=list"><?php echo $this->_var['lang']['report_guest']; ?></a></li>
            </ul>
        </div>
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
            <ul>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
            </ul>
        </div>
        <div class="flexilist mt30">
            <div class="common-content">
                <div class="mian-info">
                    <div class="switch_info">
                        <div class="stat_order_search">
                            <div class="search_item">
                                <strong><?php echo $this->_var['lang']['start_end_date']; ?>：</strong>
                                <form name="TimeInterval"  action="javascript:getList()">
                                    <div class="text_time" id="text_time1">
                                        <input type="text" class="text" name="start_date" id="start_date" value='<?php echo $this->_var['start_date']; ?>' readonly>
                                    </div>
                                    <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                    <div class="text_time" id="text_time2">
                                        <input type="text" class="text" name="end_date" id="end_date" value="<?php echo $this->_var['end_date']; ?>" readonly>
                                    </div>
                                    <a href="javascript:void(0);" onclick="getList()" class="btn btn30 blue_btn" ectype="query"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                                </form>
                            </div>
                        </div>
                        <div class="query_result mt20">
                            <div class="common-head">
                                <div class="fl">
                                    <div class="fbutton m0"><div class="csv" title="<?php echo $this->_var['lang']['export_data']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></div>
                                </div>
                            </div>
                            <div class="list-div" id="listDiv" style="position: relative;">
								<?php endif; ?>
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <thead >
                                    <tr>
                                        <th width="25%"><div align="center"><?php echo $this->_var['lang']['user_orderinfo_0']; ?></div></th>
                                        <th width="25%"><div align="center"><?php echo $this->_var['lang']['user_orderinfo_1']; ?></div></th>
                                        <th width="25%"><div align="center"><?php echo $this->_var['lang']['user_orderinfo_2']; ?></div></th>
                                        <th width="25%"><div align="center"><?php echo $this->_var['lang']['user_orderinfo_3']; ?></div></th>
                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center">
                                    <?php $_from = $this->_var['user_orderinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['val'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['val']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['val']['iteration']++;
?>
                                    <tr>
                                        <td width="25%"><?php echo $this->_foreach['val']['iteration']; ?></td>
                                        <td width="25%"><?php echo $this->_var['list']['user_name']; ?></td>
                                        <td width="25%"><?php echo $this->_var['list']['order_num']; ?></td>
                                        <td width="25%"><?php echo $this->_var['list']['turnover']; ?></td>
                                    </tr>
                                    <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="12">
                                            <div class="list-page">
                                                <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
								<?php if ($this->_var['full_page']): ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
 <?php echo $this->fetch('library/pagefooter.lbi'); ?>

<script type="text/javascript">

    function getList()
    {
        var frm =  document.forms['TimeInterval'];
        listTable.filter['start_date'] = frm.elements['start_date'].value;
        listTable.filter['end_date'] = frm.elements['end_date'].value;
        listTable.filter['page'] = 1;
        listTable.loadList();
        getDownUrl();
    }

    function getDownUrl()
    {
        var aTags = document.getElementsByTagName('A');
        for (var i = 0; i < aTags.length; i++)
        {
            if (aTags[i].href.indexOf('download') >= 0)
            {
                if (listTable.filter['start_date'] == "")
                {
                    var frm =  document.forms['TimeInterval'];
                    listTable.filter['start_date'] = frm.elements['start_date'].value;
                    listTable.filter['end_date'] = frm.elements['end_date'].value;
                }
                aTags[i].href = "users_order.php?act=download&start_date=" + listTable.filter['start_date'] + "&end_date=" + listTable.filter['end_date'];
            }
        }
    }

    //日期选择插件调用start sunle
    var opts1 = {
        'targetId':'start_date',//时间写入对象的id
        'triggerId':['start_date'],//触发事件的对象id
        'alignId':'text_time1',//日历对齐对象
        'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
    },opts2 = {
        'targetId':'end_date',
        'triggerId':['end_date'],
        'alignId':'text_time2',
        'format':'-'
    }

    xvDate(opts1);
    xvDate(opts2);
    //日期选择插件调用end sunle

    //导出报表
    $('.fbutton').click(function(){
        var start_date=get_unix_time($('input[name=start_date]').val());
        var end_date=get_unix_time($('input[name=end_date]').val());
        location.href='users_order.php?act=download&start_date='+start_date+'&end_date='+end_date+'&filename='+start_date+'_'+end_date;
    });
    function get_unix_time(dateStr)
    {
        var newstr = dateStr.replace(/-/g,'/');
        var date =  new Date(newstr);
        var time_str = date.getTime().toString();
        return time_str.substr(0, 10);
    }
</script>
</html>
<?php endif; ?>