<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="snatch.php?act=list" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['promotion']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="tabs_info">
                <ul>
                    <li class="curr"><a href="javascript:void(0);"><?php echo $this->_var['lang']['self_info']; ?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $this->_var['lang']['snatch_introduce']; ?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $this->_var['lang']['service_guarantee']; ?></a></li>
                    <li><a href="javascript:void(0);"><?php echo $this->_var['lang']['snatch_strategy']; ?></a></li>
                </ul>
            </div>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
						<form method="post" action="snatch.php" name="theForm" id="goods_class_form">
                            <div class="switch_info">
                            	<div class="goods_search_div bor_bt_das">
                                    <div class="search_select">
                                        <div class="categorySelect">
                                            <div class="selection">
                                                <input type="text" name="category_name" id="category_name" class="text w250 valid" value="<?php echo $this->_var['lang']['select_cat']; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                                <input type="hidden" name="category_id" id="category_id" value="0" data-filter="cat_id" />
                                            </div>
                                            <div class="select-container" style="display:none;">
                                                <?php echo $this->fetch('library/filter_category.lbi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search_select">
                                        <div class="brandSelect">
                                            <div class="selection">
                                                <input type="text" name="brand_name" id="brand_name" class="text w120 valid" <?php echo $this->_var['lang']['select_barnd']; ?> autocomplete="off" readonly data-filter="brand_name" />
                                                <input type="hidden" name="brand_id" id="brand_id" value="0" data-filter="brand_id" />
                                            </div>
                                            <div class="brand-select-container" style="display:none;">
                                                <?php echo $this->fetch('library/filter_brand.lbi'); ?>
                                            </div>
                                        </div>                            
                                    </div>
                                    <input type="hidden" name="ru_id" value="<?php echo $this->_var['ru_id']; ?>" />
                                    <input type="text" name="keyword" class="text w150" placeholder=<?php echo $this->_var['lang']['input_keywords']; ?> autocomplete="off" data-filter="keyword" autocomplete="off" />
                                    <a href="javascript:void(0);" class="btn btn30 fl" onclick="searchGoods()" ><i class="icon icon-search"></i><?php echo $this->_var['lang']['search_word']; ?></a>
                                	<div class="notic ml10 lh30"><?php echo $this->_var['lang']['search_select_notice']; ?></div>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['snatch_name']; ?>：</div>
                                        <div class="label_value">
                                        	<input type="text" name="snatch_name" id="snatch_name" class="text" value="<?php echo $this->_var['snatch']['snatch_name']; ?>" autocomplete="off" />
                                            <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['goodsid']; ?>：</div>
                                        <div class="label_value">
                                       		<div id="activity_goods" class="imitate_select select_w320">
                                                <div class="cite"><?php if ($this->_var['snatch']['goods_name']): ?><?php echo $this->_var['snatch']['goods_name']; ?><?php else: ?><?php echo $this->_var['lang']['please_select']; ?><?php endif; ?></div>
                                                <ul>
                                                	<li class="li_not"><?php echo $this->_var['lang']['please_search_goods']; ?></li>
                                                </ul>
                                                <input name="goods_id" type="hidden" value="<?php if ($this->_var['snatch']['goods_id']): ?><?php echo $this->_var['snatch']['goods_id']; ?><?php else: ?>0<?php endif; ?>" id="activity_goods_val">
                                            </div>
                                            <select name="product_id" class="input_select" <?php if ($this->_var['snatch']['product_id'] <= 0): ?>style="display:none"<?php endif; ?>>
									        <?php echo $this->html_options(array('options'=>$this->_var['good_products_select'],'selected'=>$this->_var['snatch']['product_id'])); ?>
									        </select>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['start_end_time']; ?>：</div>
                                        <div class="label_value text_time">
                                          <input type="text" name="start_time" value="<?php echo $this->_var['snatch']['start_time']; ?>" id="start_time" class="text mr0" readonly />
										  <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                          <input type="text" name="end_time" value="<?php echo $this->_var['snatch']['end_time']; ?>" id="end_time" class="text" readonly />
                                          <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['min_max_price']; ?>：</div>
                                        <div class="label_value">
                                            <div class="text_time no_text_time">
                                                <input type="text" class="text mr0" name="start_price" id="start_time" value="<?php echo $this->_var['snatch']['start_price']; ?>" autocomplete="off" />
                                            </div>
                                            <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                            <div class="text_time no_text_time">
                                                <input type="text" class="text" name="end_price" id="end_time" value="<?php echo $this->_var['snatch']['end_price']; ?>" autocomplete="off" />
											</div>
                                            <div class="notic"><?php echo $this->_var['lang']['notice_min_max_price']; ?></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['price']; ?>：</div>
                                        <div class="label_value"><input type="text" name="max_price" class="text" value="<?php echo $this->_var['snatch']['max_price']; ?>" autocomplete="off" />
											<div class="notic"><?php echo $this->_var['lang']['notice_price']; ?></div>
										</div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['integral']; ?>：</div>
                                        <div class="label_value">
											<input type="text" name="cost_points" class="text" value="<?php echo $this->_var['snatch']['cost_points']; ?>" autocomplete="off" />
											<div class="notic"><?php echo $this->_var['lang']['notice_integral']; ?></div>
										</div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['is_hot']; ?>：</div>
                                        <div class="label_value">
											<div class="checkbox_items">
												<div class="checkbox_item"> 
													<input name="is_hot" type="radio" class="ui-radio" value="0" id="is_hot_0"<?php if ($this->_var['snatch']['is_hot'] == 0 || $this->_var['snatch']['is_hot'] == ''): ?>checked="checked"<?php endif; ?> />
													<label for="is_hot_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
												</div>
												<div class="checkbox_item"> 
													<input name="is_hot" type="radio" class="ui-radio" value="1" id="is_hot_1" <?php if ($this->_var['snatch']['is_hot']): ?>checked="checked"<?php endif; ?> />
													<label for="is_hot_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <?php if ($this->_var['form_action'] == 'update' && $this->_var['snatch']['user_id'] != 0): ?>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['adopt_status']; ?>：</div>
                                        <div class="label_value">
											<div class="checkbox_items" ectype="general_audit_status">
												<div class="checkbox_item"> 
													<input name="review_status" type="radio" class="ui-radio" value="1" id="review_status_1" <?php if ($this->_var['snatch']['review_status'] == 1): ?>checked="checked"<?php endif; ?> />
													<label for="review_status_1" class="ui-radio-label"><?php echo $this->_var['lang']['not_audited']; ?></label>
												</div>
												<div class="checkbox_item"> 
													<input name="review_status" type="radio" class="ui-radio" value="2" id="review_status_2" <?php if ($this->_var['snatch']['review_status'] == 2): ?>checked="checked"<?php endif; ?> />
													<label for="review_status_2" class="ui-radio-label"><?php echo $this->_var['lang']['audited_not_adopt']; ?></label>
												</div>
                                                <div class="checkbox_item"> 
													<input name="review_status" type="radio" class="ui-radio" value="3" id="review_status_3" <?php if ($this->_var['snatch']['review_status'] == 3): ?>checked="checked"<?php endif; ?> />
													<label for="review_status_3" class="ui-radio-label"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></label>
												</div>
											</div>
                                        </div>
                                    </div>			
									<div class="item <?php if ($this->_var['snatch']['review_status'] != 2): ?>hide<?php endif; ?>" id="review_content">
										<div class="label"><?php echo $this->_var['lang']['adopt_reply']; ?>：</div>
										<div class="value">
											<textarea name="review_content" class="textarea h100"><?php echo $this->_var['snatch']['review_content']; ?></textarea>
										</div>
									</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="switch_info" style="display:none;"><?php echo $this->_var['act_desc']; ?></div>
                            <div class="switch_info" style="display:none;"><?php echo $this->_var['act_promise']; ?></div>
                            <div class="switch_info" style="display:none;"><?php echo $this->_var['act_ensure']; ?></div>
                            <div class="goods_search_div bor_bt_das" style="background:#fff; padding-bottom:30px; margin-top:-30px;">
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
                                        <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
                                        <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
                                        <input type="hidden" name="id" value="<?php echo $this->_var['snatch']['act_id']; ?>" />
                                        <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button button_reset" />
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
	$.divselect("#activity_goods","#activity_goods_val",function(obj){
		var filter = new Object;
		filter.goods_id = document.forms['theForm'].elements['goods_id'].value;

		Ajax.call('snatch.php?is_ajax=1&act=search_products', filter, searchProductsResponse, 'GET', 'JSON');
	});

	function searchProductsResponse(result){
		var frm = document.forms['theForm'];
		var sp = frm.elements['product_id'];

		if(result.error == 0){
		    /* 清除 options */
		    sp.length = 0;

		    /* 创建 product options */
		    var products = result.content.products;
		    if(products.length){
				sp.style.display = 'block';

				for(i = 0; i < products.length; i++){
					var p_opt = document.createElement("OPTION");
					p_opt.value = products[i].product_id;
					p_opt.text  = products[i].goods_attr_str;
					sp.options.add(p_opt);
				}
		    }else{
				sp.style.display = 'none';

				var p_opt = document.createElement("OPTION");
				p_opt.value = 0;
				p_opt.text  = search_is_null;
				sp.options.add(p_opt);
		    }
		}

		if(result.message.length > 0){
			alert(result.message);
		}
	}

	//时间选择
	var opts1 = {
		'targetId':'start_time',//时间写入对象的id
		'triggerId':['start_time'],//触发事件的对象id
		'alignId':'start_time',//日历对齐对象
		'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
		'min':'<?php echo $this->_var['snatch']['start_time']; ?>' //最小时间
	},opts2 = {
		'targetId':'end_time',
		'triggerId':['end_time'],
		'alignId':'end_time',
		'format':'-',
		'min':'<?php echo $this->_var['snatch']['start_time']; ?>'
	}
	xvDate(opts1);
	xvDate(opts2);

	function searchGoods()
	{
	  var filter = new Object;
	  filter.cat_id   = document.forms['theForm'].elements['category_id'].value;
	  filter.brand_id = document.forms['theForm'].elements['brand_id'].value;
	  filter.keyword  = document.forms['theForm'].elements['keyword'].value;
	  filter.ru_id    = document.forms['theForm'].elements['ru_id'].value;

	  Ajax.call('snatch.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
	}

	function searchGoodsResponse(result)
	{
		$("#activity_goods").find("li").remove();
		var goods = result.content.goods;
		if (goods)
		{
		  for (i = 0; i < goods.length; i++)
		  {
			  $("#activity_goods").find("ul").append("<li><a href='javascript:;' data-value='"+goods[i].goods_id+"' class='ftx-01'>"+goods[i].goods_name+"</li>");
				  
		  }
		  $("#activity_goods").find("ul").perfectScrollbar("destroy");
		  $("#activity_goods").find("ul").perfectScrollbar();
          $("#activity_goods").find("ul").show();
		}		
	}

	//表单验证
	$(function(){
		$('#goods_class_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules : {
				snatch_name : {
					required : true
				},
				start_time :{
					required : true
				},
				end_time :{
					required : true,
					compareDate:"#start_time",
				}
			},
			messages : {
				snatch_name : {
					required : '<i class="icon icon-exclamation-sign"></i>'+no_name
				},
				start_time :{
					required : '<i class="icon icon-exclamation-sign"></i>'+start_data_notnull
				},
				end_time :{
					required : '<i class="icon icon-exclamation-sign"></i>'+end_data_notnull,
					compareDate:'<i class="icon icon-exclamation-sign"></i>'+data_invalid_gt
				}
			},
			onfocusout:function(element,event){
				//实时去除结束时间是否大于开始时间验证
				var name = $(element).attr("name");
				
				if(name == "end_time"){
					var endDate = $(element).val();
					var startDate = $(element).siblings("input[name='start_time']").val();
					
					var date1 = new Date(Date.parse(startDate.replace(/-/g, "/")));
					var date2 = new Date(Date.parse(endDate.replace(/-/g, "/")));
					
					if(date1 > date2){
						$(element).removeClass("error");
						$(element).siblings(".form_prompt").html("");
					}
				}
			}
		});
	});
</script>
</body>
</html>
