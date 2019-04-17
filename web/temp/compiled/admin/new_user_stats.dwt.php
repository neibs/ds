<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body"> 
    <div class="warpper">
        <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="tabs_info">
                <ul>
                    <li class="curr"><a href="user_stats.php?act=new"><?php echo $this->_var['lang']['newadd_user']; ?></a></li>
                    <li><a href="user_stats.php?act=user_analysis"><?php echo $this->_var['lang']['user_analysis']; ?></a></li>
                    <li><a href="user_stats.php?act=user_area_analysis"><?php echo $this->_var['lang']['user_area_analysis']; ?></a></li>
                    <li><a href="user_stats.php?act=user_rank_analysis"><?php echo $this->_var['lang']['user_rank_analysis']; ?></a></li>
                    <li><a href="user_stats.php?act=user_consumption_rank"><?php echo $this->_var['lang']['user_consumption_rank']; ?></a></li>
                </ul>
            </div>
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['new']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
                <div class="query_result">
                    <div class="common-content">
                        <div class="switch_info">
                            <div class="stat_order_search stat_order_search2">
                                <form action="" method="post" id="" name="selectForm">
                                    <div class="search_item">
                                        <strong class="label_txt"><?php echo $this->_var['lang']['time']; ?>：</strong>
                                        <div class="text_time" id="text_time_start">
                                            <input type="text" class="text" name="start_date" value="" id="start_date" value="" autocomplete="off" readonly>
                                        </div>
                                        <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <div class="text_time" id="text_time_end">
                                            <input type="text" class="text" name="end_date" value="" id="end_date" value="" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                    <div class="search_item">
                                        <strong class="label_txt">&nbsp</strong>
                                        <a href="javascript:void(0);" class="btn btn30 blue_btn ml0" ectype="searchButton"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                                    </div>
                                    <input type="hidden" name="act" value="get_chart_data">
                                </form>
                            </div>
                            <div class="query_result mt30">
                                <div class="section-module">
                                    <div class="title_head"><h3><?php echo $this->_var['lang']['new_add_user_stats']; ?></h3></div>
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
            search_chart_view('user_stats.php', "form[name='selectForm']", 'chart_view');
            $(document).on('click', "[ectype='searchButton']", function(){
                search_chart_view('user_stats.php', "form[name='selectForm']", 'chart_view');
            })
        })
    </script>
</body>
</html>