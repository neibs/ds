<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body"> 
    <div class="warpper">
        <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="tabs_info">
                <ul>
                    <li class="curr"><a href="sell_analysis.php?act=sales_volume"><?php echo $this->_var['lang']['sales_volume']; ?></a></li>
                    <li><a href="sell_analysis.php?act=sales_money"><?php echo $this->_var['lang']['sales_money']; ?></a></li>
                </ul>
            </div>
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['sales_volume']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['sales_volume']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
                <div class="query_result">
                    <div class="common-content">
                        <div class="switch_info">
                            <div class="stat_order_search stat_order_search2">
                                <form action="" method="post" id="" name="selectForm">
                                    <div class="search_item">
                                        <strong><?php echo $this->_var['lang']['time']; ?>：</strong>
                                        <div class="text_time" id="text_time_start">
                                            <input type="text" class="text" name="start_date" value="" id="start_date" value="" autocomplete="off" readonly>
                                        </div>
                                        <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <div class="text_time" id="text_time_end">
                                            <input type="text" class="text" name="end_date" value="" id="end_date" value="" autocomplete="off" readonly>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn30 blue_btn" ectype="searchButton"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                                    </div>
                                    <input type="hidden" name="act" value="get_chart_data">
                                    <input type="hidden" name="type" value="volume">
                                </form>
                            </div>
                            <div class="query_result mt30">
                                <div class="section-module"><div class="tit"><h1><?php echo $this->_var['lang']['total_sales_volume']; ?>：</h1><em class="red" ectype="total_volume"><!--<?php echo empty($this->_var['total_num']) ? '0' : $this->_var['total_num']; ?>-->0</em> 个</div></div>
                                <div class="section-module">
                                    <div class="title_head"><h3><?php echo $this->_var['lang']['sales_volume']; ?></h3></div>
                                    <div class="module-content" id="chart_view" style="height:378px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript" src="../js/echarts-all.js"></script>
	<script type="text/javascript">
        //日期选择插件调用start sunle
        var opts1 = {
            'targetId':'start_date',//时间写入对象的id
            'triggerId':['start_date'],//触发事件的对象id
            'alignId':'start_date',//日历对齐对象
            'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
            'min':'' //最小时间
        },opts2 = {
            'targetId':'end_date',
            'triggerId':['end_date'],
            'alignId':'end_date',
            'format':'-',
            'min':''
        }
        xvDate(opts1);
        xvDate(opts2);
        //日期选择插件调用end sunle

        //统计
        $(function(){
            search_chart_view('sell_analysis.php', "form[name='selectForm']", 'chart_view');
            $(document).on('click', "[ectype='searchButton']", function(){
                search_chart_view('sell_analysis.php', "form[name='selectForm']", 'chart_view');
            })
        })
    </script>
</body>
</html>