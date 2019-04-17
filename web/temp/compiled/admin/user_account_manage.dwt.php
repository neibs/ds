<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['08_members']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                    	<form name="TimeInterval" action="user_account_manage.php" method="post" id="user_account_manage">
                        <div class="switch_info">
                            <div class="items">
                                <div class="item bor_bt_das pb20">
                                    <div class="label"><?php echo $this->_var['lang']['start_end_date']; ?>：</div>
                                    <div class="label_value">
                                        <div class="text_time" id="text_time_start">
                                            <input type="text" name="start_date" value="<?php echo $this->_var['start_date']; ?>" id="start_time_id" class="text mr0" readonly />
                                        </div>
                                        <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <div class="text_time" id="text_time_end">
                                            <input type="text" name="end_date" value="<?php echo $this->_var['end_date']; ?>" id="end_time_id" class="text" readonly />
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn30 blue_btn_2" ectype="search" id="submitBtn"><i class="icon icon-search"></i><?php echo $this->_var['lang']['search_word']; ?></a>
                                    </div>
                                </div>
                                
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['user_add_money']; ?>：</div>
                                    <div class="label_value">
                                    	<div class="text_div mr10"><?php echo $this->_var['account']['voucher_amount']; ?></div>
                                        <a href="javascript:void(0);" data-url="user_account.php?act=list&process_type=0&ispaid=1&start_date=<?php echo $this->_var['start_date']; ?>&end_date=<?php echo $this->_var['end_date']; ?>" data-param="menuplatform|09_user_account" ectype="iframeHref" class="fl mr70"><?php echo $this->_var['lang']['view']; ?></a>
                                        <div class="dl_div">
                                        	<div class="dt_div"><?php echo $this->_var['lang']['order_surplus']; ?>：</div>
                                            <div class="dd_div mr10"><?php echo $this->_var['account']['surplus']; ?></div>
                                            <a href="javascript:void(0);" data-url="user_account_manage.php?act=surplus&start_date=<?php echo $this->_var['start_date']; ?>&end_date=<?php echo $this->_var['end_date']; ?>" data-param="menuplatform|10_user_account_manage" ectype="iframeHref" class="fl"><?php echo $this->_var['lang']['view']; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['user_repay_money']; ?>：</div>
                                    <div class="label_value">
                                    	<div class="text_div mr10"><?php echo $this->_var['account']['to_cash_amount']; ?></div>
                                        <a href="javascript:void(0);" data-url="user_account.php?act=list&process_type=1&ispaid=1&start_date=<?php echo $this->_var['start_date']; ?>&end_date=<?php echo $this->_var['end_date']; ?>" data-param="menuplatform|09_user_account" ectype="iframeHref" class="fl mr70"><?php echo $this->_var['lang']['view']; ?></a>
                                    	<div class="dl_div">
                                        	<div class="dt_div"><?php echo $this->_var['lang']['integral_money']; ?>：</div>
                                            <div class="dd_div mr10"><?php echo $this->_var['account']['integral_money']; ?></div>
                                            <a href="javascript:void(0);" data-url="user_account_manage.php?act=surplus&start_date=<?php echo $this->_var['start_date']; ?>&end_date=<?php echo $this->_var['end_date']; ?>" data-param="menuplatform|10_user_account_manage" ectype="iframeHref" class="fl"><?php echo $this->_var['lang']['view']; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['user_money']; ?>：</div>
                                    <div class="label_value"><div class="text_div mr10"><?php echo $this->_var['account']['user_money']; ?></div><a href="users.php?act=list" data-param="menuplatform|03_users_list" ectype="iframeHref" class="fl"><?php echo $this->_var['lang']['view']; ?></a></div>
                                </div>
                                <div class="item">
                                	<div class="label"><?php echo $this->_var['lang']['frozen_money']; ?>：</div>
                                    <div class="label_value"><div class="text_div mr10"><?php echo $this->_var['account']['frozen_money']; ?></div><a href="users.php?act=list" data-param="menuplatform|03_users_list" ectype="iframeHref" class="fl"><?php echo $this->_var['lang']['view']; ?></a></div>
                                </div> 
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		//时间选择
		var opts1 = {
			'targetId':'start_time_id',//时间写入对象的id
			'triggerId':['start_time_id'],//触发事件的对象id
			'alignId':'text_time_start',//日历对齐对象
			'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
			'hms':'off',
			'max':''
		},opts2 = {
			'targetId':'end_time_id',
			'triggerId':['end_time_id'],
			'alignId':'text_time_end',
			'format':'-',
			'hms':'off',
			'max':''
		}
		xvDate(opts1);
		xvDate(opts2);
		
		$(function(){
			$("#submitBtn").click(function(){
            	$("#user_account_manage").submit();
			});
		});
    </script>
</body>
</html>
