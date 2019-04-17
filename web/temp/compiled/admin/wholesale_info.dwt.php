<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
    <div class="warpper">
    	<div class="title"><a href="wholesale.php?act=list" class="s-back"><?php echo $this->_var['lang']['back']; ?></a>供求 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                    <li>注意勾选合适的会员等级，只有达到该等级的会员才能参加批发方案活动。</li>
                    <li>添加的批发方案可在前台促销管理中的批发市场看到。</li>
                    <li>批发不走普通购买流程。</li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
						<form method="post" action="wholesale.php" name="theForm" enctype="multipart/form-data" id="wholesale_form">
                            <div class="step_three">
                                <div class="step">
                                    <div class="step_title"><i class="ui-step"></i><h3><?php echo $this->_var['lang']['basic_info']; ?></h3></div>
                                    <div class="step_content">
                                        <div class="items">
                                            <div class="item mt10">
                                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_goods_name']; ?></div>
                                                <div class="label_value">
                                                    <div id="goods_name" class="imitate_select select_w320">
                                                        <div class="cite"><?php echo $this->_var['wholesale']['goods_name']; ?></div>
                                                        <input name="goods_id" id="goods_id" type="hidden" value="<?php echo $this->_var['wholesale']['goods_id']; ?>">
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn30 blue_btn fl mr10" ectype="setupGoods">选择商品</a>
                                                    <div class="form_prompt"></div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>批发商品分类：</div>
                                                <div class="label_value">
                                                    <div class="imitate_select select_w320">
                                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                        <ul>
                                                            <?php $_from = $this->_var['cat_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['name']; ?></a></li>
                                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                        </ul>
                                                        <input name="cat_id" type="hidden" value="<?php echo $this->_var['wholesale']['wholesale_cat_id']; ?>" id="cat_id">
                                                    </div>
                                                    <div class="form_prompt"></div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="label">限时采购：</div>
                                                <div class="label_value">
                                                    <div class="checkbox_items">
                                                        <div class="checkbox_item">
                                                            <input type="radio" name="is_promote" class="ui-radio is_promote" id="pro_no" value="0" autocomplete="off" <?php if (! $this->_var['wholesale']['is_promote']): ?>checked="checked"<?php endif; ?>/>
                                                            <label for="pro_no" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label> 
                                                        </div>
                                                        <div class="checkbox_item mr15">
                                                            <input type="radio" name="is_promote" class="ui-radio is_promote" id="pro_yes" value="1" autocomplete="off" <?php if ($this->_var['wholesale']['is_promote']): ?>checked="checked"<?php endif; ?>/>
                                                            <label for="pro_yes" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label> 
                                                        </div>
                                                        <div class="hidden_div" <?php if ($this->_var['wholesale']['is_promote']): ?>style="display:block;"<?php endif; ?>>
                                                            <div id="text_time1" class="text_time <?php if (! $this->_var['wholesale']['is_promote']): ?>time_disabled<?php endif; ?>">
                                                                <input type="text" class="text mr0" name="promote_start_date" id="promote_start_date" value="<?php echo $this->_var['wholesale']['start_time']; ?>" autocomplete="off" readonly />
                                                            </div>
                                                            <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                                            <div id="text_time2" class="text_time <?php if (! $this->_var['wholesale']['is_promote']): ?>time_disabled<?php endif; ?>">
                                                                <input type="text" class="text" name="promote_end_date" id="promote_end_date" value="<?php echo $this->_var['wholesale']['end_time']; ?>" autocomplete="off" readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="item mb20" ectype="price_model">
                                                <div class="label">价格模式：</div>
                                                <div class="label_value">
                                                    <div class="checkbox_items">
                                                        <div class="checkbox_item"> 
                                                            <input name="price_model" type="radio" class="ui-radio" value="0" id="price_model_0" autocomplete="off" <?php if ($this->_var['wholesale']['price_model'] == 0 || $this->_var['wholesale']['price_model'] == ''): ?>checked="checked"<?php endif; ?> />
                                                            <label for="price_model_0" class="ui-radio-label">统一价格</label>
                                                        </div>
                                                        <div class="checkbox_item"> 
                                                            <input name="price_model" type="radio" class="ui-radio" value="1" id="price_model_1"autocomplete="off" <?php if ($this->_var['wholesale']['price_model']): ?>checked="checked"<?php endif; ?> />
                                                            <label for="price_model_1" class="ui-radio-label">阶梯价格</label>
                                                        </div>
                                                    </div>											
                                                </div>
                                            </div>
                                            <div class="item<?php if ($this->_var['wholesale']['price_model'] == 1): ?> hide<?php endif; ?>" ectype="price_model_unified">
                                                <div class="label">统一价格：</div>
                                                <div class="label_value">
                                                    <input id="goods_price" name="goods_price" class="text w150" autocomplete="off" value="<?php echo $this->_var['wholesale']['goods_price']; ?>" type="text">
                                                </div>
                                                <div class="form_prompt"></div>
                                            </div>
                                            <div class="item<?php if ($this->_var['wholesale']['price_model'] == 0): ?> hide<?php endif; ?>" ectype="price_model_ladder">
                                                <div class="label">阶梯价格：</div>
                                                <div class="label_value">
                                                    <div class="special_div fl mr10" <?php if ($this->_var['volume_price_list']): ?>style="display:block"<?php endif; ?>>
                                                        <?php echo $this->fetch('library/volume_price_list.lbi'); ?>
                                                    </div>
                                                    <div class="form_prompt"></div>
                                                </div>
                                            </div>	
                                            <div class="item">
                                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>最小起订量：</div>
                                                <div class="label_value">
                                                    <input id="moq" name="moq" class="text w150<?php if ($this->_var['wholesale']['price_model'] == 1): ?> text_readonly<?php endif; ?>" autocomplete="off" value="<?php echo empty($this->_var['wholesale']['moq']) ? '1' : $this->_var['wholesale']['moq']; ?>" type="text" <?php if ($this->_var['wholesale']['price_model'] == 1): ?> readonly<?php endif; ?>>
                                                    <div class="form_prompt"></div>
                                                </div>
                                            </div>	
                                            <div class="item">
                                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?>库存：</div>
                                                <div class="label_value">
                                                    <input id="goods_number" name="goods_number" class="text w150" autocomplete="off" value="<?php echo empty($this->_var['wholesale']['goods_number']) ? '1000' : $this->_var['wholesale']['goods_number']; ?>" type="text">
                                                    <div class="form_prompt"></div>
                                                </div>
                                            </div>	
                                            <div class="item">
                                                <div class="label"><?php echo $this->_var['lang']['label_rank_name']; ?></div>
                                                <div class="label_value">
                                                    <div class="checkbox_items" style="width:auto;">
                                                        <?php $_from = $this->_var['user_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rank');if (count($_from)):
    foreach ($_from AS $this->_var['rank']):
?>
                                                        <div class="checkbox_item">
                                                            <input name="rank_id[]" type="checkbox" class="ui-checkbox" id="rank_id_<?php echo $this->_var['rank']['rank_id']; ?>" value="<?php echo $this->_var['rank']['rank_id']; ?>" <?php if ($this->_var['rank']['checked']): ?>checked="checked"<?php endif; ?> />
                                                                   <label for="rank_id_<?php echo $this->_var['rank']['rank_id']; ?>" class="ui-label"><?php echo $this->_var['rank']['rank_name']; ?></label>
                                                        </div>    
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    </div>
                                                    <div class="form_prompt"></div>
                                                </div>
                                            </div>
                                            <!--<div class="item">
                                                <div class="label">商品运费：</div>
                                                <div class="label_value">
                                                    <div class="checkbox_items">
                                                        <div class="checkbox_item"> 
                                                            <input name="freight" onclick="checkFreight(this.value)" type="radio" class="ui-radio" value="0" id="freight_0"<?php if ($this->_var['wholesale']['freight'] != 1): ?>checked="checked"<?php endif; ?> />
                                                            <label for="freight_0" class="ui-radio-label">按固定运费</label>
                                                        </div>
                                                        <?php if ($this->_var['transport_list']): ?>
                                                        <div class="checkbox_item"> 
                                                            <input name="freight" type="radio" class="ui-radio" onclick="checkFreight(this.value)" value="1" id="freight_1" <?php if ($this->_var['wholesale']['freight'] == 1): ?>checked="checked"<?php endif; ?> />
                                                            <label for="freight_1" class="ui-radio-label">按运费模板</label>
                                                        </div>
                                                        <?php endif; ?>
                                                        <input id="shipping_fee" name="shipping_fee" class="text w150<?php if ($this->_var['wholesale']['freight'] == 1): ?> hide<?php endif; ?>" autocomplete="off" value="<?php echo $this->_var['wholesale']['shipping_fee']; ?>" type="text">
                                                        <div id="tid" class="imitate_select select_w170<?php if ($this->_var['wholesale']['freight'] != 1): ?> hide<?php endif; ?>">
                                                            <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                            <ul style="display: none;">
                                                                <?php $_from = $this->_var['transport_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['item']['tid']; ?>" class="ftx-01"><?php echo $this->_var['item']['title']; ?></a></li>
                                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                            </ul>
                                                            <input name="tid" value="<?php echo $this->_var['wholesale']['tid']; ?>" type="hidden">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="item">
                                                <div class="label">设为店铺推荐：</div>
                                                <div class="label_value step_goods_service">
                                                    <div class="switch switch_2 <?php if ($this->_var['wholesale']['is_recommend']): ?>active<?php endif; ?>" title="<?php echo $this->_var['lang']['yes']; ?>">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <input type="hidden" value="<?php echo $this->_var['wholesale']['is_recommend']; ?>" name="is_recommend">
                                                </div>
                                                <div class="form_prompt"></div>
                                            </div>
                                            <div class="item mb20">
                                                <div class="label">是否上架：</div>
                                                <div class="label_value">
                                                    <div class="switch switch_2 <?php if ($this->_var['wholesale']['enabled']): ?>active<?php endif; ?>" title="<?php echo $this->_var['lang']['yes']; ?>">
                                                        <div class="circle"></div>
                                                    </div>
                                                    <input type="hidden" value="<?php echo $this->_var['wholesale']['enabled']; ?>" name="enabled">											
                                                </div>
                                            </div>							
                                            <div class="item">
                                                <div class="label">商品服务：</div>
                                                <div class="label_value">
                                                    <div class="checkbox_items">
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" name="is_delivery" class="ui-checkbox" value="1" id="is_delivery" <?php if ($this->_var['wholesale']['goods_extend']['is_delivery']): ?> checked="checked"<?php endif; ?>>
                                                            <label class="ui-label" for="is_delivery">48小时发货</label>
                                                        </div>
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" name="is_return" class="ui-checkbox" value="1" id="is_return" <?php if ($this->_var['wholesale']['goods_extend']['is_return']): ?> checked="checked"<?php endif; ?>>
                                                            <label class="ui-label" for="is_return">包退服务</label>
                                                        </div>
                                                        <div class="checkbox_item">
                                                            <input type="checkbox" name="is_free" class="ui-checkbox" value="1" id="is_free" <?php if ($this->_var['wholesale']['goods_extend']['is_free']): ?> checked="checked"<?php endif; ?>>
                                                            <label class="ui-label" for="is_free">包邮</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>									
                                            <?php if ($this->_var['form_action'] == 'update' && $this->_var['wholesale']['user_id'] != 0): ?>
                                            <div class="item">
                                                <div class="label"><?php echo $this->_var['lang']['adopt_status']; ?>：</div>
                                                <div class="label_value">
                                                    <div class="checkbox_items">
                                                        <div class="checkbox_item" ectype="general_audit_status"> 
                                                            <input name="review_status" type="radio" class="ui-radio" value="1" id="review_status_1" <?php if ($this->_var['wholesale']['review_status'] == 1): ?>checked="checked"<?php endif; ?> />
                                                            <label for="review_status_1" class="ui-radio-label"><?php echo $this->_var['lang']['not_audited']; ?></label>
                                                        </div>
                                                        <div class="checkbox_item"> 
                                                            <input name="review_status" type="radio" class="ui-radio" value="2" id="review_status_2" <?php if ($this->_var['wholesale']['review_status'] == 2): ?>checked="checked"<?php endif; ?> />
                                                            <label for="review_status_2" class="ui-radio-label"><?php echo $this->_var['lang']['audited_not_adopt']; ?></label>
                                                        </div>
                                                        <div class="checkbox_item"> 
                                                            <input name="review_status" type="radio" class="ui-radio" value="3" id="review_status_3" <?php if ($this->_var['wholesale']['review_status'] == 3): ?>checked="checked"<?php endif; ?> />
                                                            <label for="review_status_3" class="ui-radio-label"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>			
                                            <div class="item <?php if ($this->_var['wholesale']['review_status'] != 2): ?>hide<?php endif; ?>" id="review_content">
                                                <div class="label"><?php echo $this->_var['lang']['adopt_reply']; ?>：</div>
                                                <div class="value">
                                                    <textarea name="review_content" class="textarea h100"><?php echo $this->_var['wholesale']['review_content']; ?></textarea>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="wholesale_attr">	
                                    <?php echo $this->fetch('library/wholesale_attr_list.lbi'); ?>
                                </div>
                                <div class="goods_footer" style="background-color:#fff;">
                                	<div class="goods_btn">
                                        <input type="submit" class="btn btn35 blue_btn" value="<?php echo $this->_var['lang']['button_submit']; ?>" id="submitBtn" />
                                        <input type="reset" class="btn btn35 btn_blue" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
                                        <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
                                        <input type="hidden" name="act_id" value="<?php echo $this->_var['wholesale']['act_id']; ?>" />
                                        <input type="hidden" name="seed" id="seed" value="<?php echo $this->_var['key']; ?>" />
                                        <input type="hidden" name="model_attr" value="<?php echo empty($this->_var['goods']['model_attr']) ? '0' : $this->_var['goods']['model_attr']; ?>"/>	
                                        <input type="hidden" name="goodsId" value="<?php echo empty($this->_var['wholesale']['goods_id']) ? '0' : $this->_var['wholesale']['goods_id']; ?>"/>	
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
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
	<script type="text/javascript">
	var goods_id = $("input[name='goods_id']").val();
	
	//活动商品下拉
	$.divselect("#goods_name","#goods_id",function(){
		document.getElementById('price-div').innerHTML = '';
		var goodsId = document.getElementById('goods_id').value;
		getGoodsInfo(goodsId);
	});
	
	//表单验证
	$(function(){
		$("#submitBtn").click(function(){
			if($("#wholesale_form").valid()){
				$("#wholesale_form").submit();
			}
		});

		$('#wholesale_form').validate({
			errorPlacement: function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules : {
				goods_id : {
					min : 1
				},
				cat_id :{
					required : true
				},
				goods_number:{
					min:1
				},
				moq : {
					min:1
				},
				'rank_id[]':{
					required : true
				}
			},
			messages : {
				goods_id : {
					min : '<i class="icon icon-exclamation-sign"></i>请选择批发商品'
				},
				cat_id :{
					required : '<i class="icon icon-exclamation-sign"></i>批发商品分类必须选择'
				},
				goods_number : {
					min : '<i class="icon icon-exclamation-sign"></i>库存必须大于0'
				},
				moq : {
					min : '<i class="icon icon-exclamation-sign"></i>最小起订量必须大于0'
				},
				'rank_id[]':{
					required : '<i class="icon icon-exclamation-sign"></i>请选择会员等级'
				}
			}
		});
	});

    /**
     * 取得某商品信息
     * @param int goodsId 商品id
     */
    function getGoodsInfo(goodsId)
    {
      if (goodsId > 0)
      {
        Ajax.call('wholesale.php?is_ajax=1&act=get_goods_info', 'goods_id=' + goodsId, getGoodsInfoResponse, 'get', 'json');
      }
      else
      {
        var divObj = document.getElementById('price-div');
        divObj.innerHTML = '';
      }
    }
    
    function getGoodsInfoResponse(result)
    {
		$("#wholesale_attr").html(result.content);
    }	
    
    function getKey()
    {
      var seedObj = document.getElementById('seed');
      seedObj.value = parseInt(seedObj.value) + 1;
      return seedObj.value;
    }
    
    /**
     * @param object buttonObj
     */
    function addAttr(buttonObj)
    {
      getGoodsInfo(document.getElementById('goods_id').value);
    }
    
    /**
     * @param object buttonObj
     */
    function dropAttr(buttonObj)
    {
      var divObj = document.getElementById('price-div');
      var tableObj = buttonObj.parentNode.parentNode.parentNode.parentNode;
      divObj.removeChild(tableObj);
    }	
        
    function searchGoods()
    {
        var filter = new Object;
        filter.keyword  = document.forms['theForm'].elements['keyword'].value;
        filter.cat_id  = document.forms['theForm'].elements['category_id'].value;
        filter.brand_id  = document.forms['theForm'].elements['brand_id'].value;
        filter.ru_id = document.forms['theForm'].elements['ru_id'].value;
    
        Ajax.call('wholesale.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
    }
    
    /**
     * @param object buttonObj
     * @param int    tableIndex
     */
    function addQuantityPrice(buttonObj, tableIndex)
    {
      var tableObj = buttonObj.parentNode.parentNode.parentNode.parentNode;
      var newRow = tableObj.insertRow(-1);
      var cell2 = newRow.insertCell(-1);
      cell2.innerHTML = '<label class="fl lh"><?php echo $this->_var['lang']['quantity']; ?>：</label><input name="quantity[]" type="text" class="text text_2 mr10 w100" value="0" autocomplete="off" /><label class="fl lh"><?php echo $this->_var['lang']['price']; ?>：</label><input name="price[]" type="text" class="text text_2 mr10 w100" value="0" autocomplete="off" /><input type="button" class="button red_button" value="删除" onclick="dropQuantityPrice(this)" />';
    }
    
    /**
     * @param object buttonObj
     */
    function dropQuantityPrice(buttonObj)
    {
      var trObj = buttonObj.parentNode.parentNode;
      var tableObj = trObj.parentNode.parentNode;
      tableObj.deleteRow(trObj.rowIndex);
    }
    
    function searchGoodsResponse(result)
    {
        $("#goods_name").children("ul").find("li").remove();
        
        var goods = result.content;
        if (goods)
        {
          for (i = 0; i < goods.length; i++)
          {
            $("#goods_name").children("ul").append("<li><a href='javascript:;' data-value='"+goods[i].goods_id+"' class='ftx-01'>"+goods[i].goods_name+"</a></li>")
          }
          $("#goods_name").children("ul").show();
        }
    }
    
    function getQuantityHtml(key)
    {
      
      var html = '<label class="fl lh"><?php echo $this->_var['lang']['quantity']; ?>：</label><input name="quantity[#][]" type="text" value="" class="text text_2 mr10 w100" autocomplete="off" />';
      
    
      return html.replace('[#]', '[' + key + ']');
    }
    
    function getPriceHtml(key)
    {
      
      var html = '<label class="fl lh"><?php echo $this->_var['lang']['price']; ?>：</label><input name="price[#][]" type="text" value="" class="text text_2 mr10 w100" autocomplete="off" />';
      
    
      return html.replace('[#]', '[' + key + ']');
    }
    
    function getButtonHtml(key)
    {
      
      var html = '<input type="button" class="button" value="添加" onclick="addQuantityPrice(this, [#])" />';
      
    
      return html.replace('[#]', key);
    }
    
    //切换商品运费
    function checkFreight(val){
        if(val == 1){
            $("#tid").show();
            $("#shipping_fee").hide();
        }else{
            $("#tid").hide();
            $("#shipping_fee").show();
        }
    }
	
	//设置商品
	$(document).on("click","*[ectype='setupGoods']",function(){
		var _this = $(this),
			spec_attr = new Object(),
			cat_id = _this.parents("[ectype='item']").find("input[name='cateValue[]']").val(),
			cat_goods = _this.parents("[ectype='item']").find("input[name='cat_goods[]']").val();
							
		spec_attr.goods_ids = cat_goods;
		Ajax.call('wholesale.php', "act=goods_info" + "&goods_type=1&cat_id=" + cat_id + "&spec_attr="+$.toJSON(spec_attr) , function(data){
			var content = data.content;
			pb({
				id:"set_up_goods",
				title: "设置商品",
				width: 1000,
				content: content,
				ok_title: "确定",
				cl_title: "取消",
				drag: true,
				foot: true,
				cl_cBtn: true,
				onOk: function(){
					var goods_ids = $("#set_up_goods").find("input[name='goods_ids']").val();
					var goods_name = $("#set_up_goods").find("input[name='goods_name']").val();
					$('#goods_id').val(goods_ids);
					$('#goods_name').find('div.cite').html(goods_name);
					getGoodsInfo(goods_ids);
				}
			});
		}, 'POST', 'JSON');
	});

	/**********************************{商品属性信息} start*****************************/
	//自动加载商品属性
	getAttrList(goods_id);
	
	//设置商品属性
	function getAttrList(goodsId)
	{
		var selGoodsType = document.forms['theForm'].elements['goods_type'];
		var selModelAttr = document.forms['theForm'].elements['model_attr'];
		var modelAttr = selModelAttr.value;
		
		if (selGoodsType != undefined)
		{
			var goodsType = selGoodsType.value;	
			Ajax.call('wholesale.php?is_ajax=1&act=get_attribute', 'goods_id=' + goodsId + "&goods_type=" + goodsType + '&modelAttr=' + modelAttr, setAttrList, "GET", "JSON");
		}
	}
	
	function setAttrList(result, text_result)
	{
		document.getElementById('tbody-wholesale-goodsAttr').innerHTML = result.goods_attribute;
		
		if(result.is_spec){
			$("#goods_attr_gallery").show();
			document.getElementById('goods_attr_gallery').innerHTML = result.goods_attr_gallery;
		}else{
			$("#goods_attr_gallery").hide();
		}
		
		wholesale_set_attribute_table(goods_id);
	}
	
	//删除货品
	function dropProduct(product_id)
	{
		var group_attr = $("form[name='theForm'] :input[name='group_attr']").val();
		$.jqueryAjax('wholesale.php', 'act=drop_product&product_id=' + product_id + '&group_attr=' + group_attr, function(data){
			if(data.error == 0){
				$.jqueryAjax('wholesale.php', 'act=set_attribute_table&goods_id='+data.goods_id+'&attr_id='+data.attr_id+'&attr_value='+data.attr_value+'&goods_model='+data.goods_model+'&region_id='+data.region_id, function(data){
					$("#attribute_table").html(data.content);
				})
			}
		});
	}	

	
	//属性仓库价格 start
	$(document).on("click","input[name='warehouse_butt']",function(){
		
		var goods_id = $("#goods_id").val();
		var goods_attr_id = $(this).data('goodsattrid');
		var attr_value = $("#goodsAttrValue_" + goods_attr_id).val();
		
		if(attr_value == ''){
			alert("请选择商品规格");
			return false;
		}
		
		$.jqueryAjax('dialog.php', 'act=add_warehouse_price' + '&goods_id=' + goods_id + '&goods_attr_id=' + goods_attr_id + '&goods_attr_name=' + attr_value, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:"属性仓库价格",
				width:664,
				content:content,
				ok_title:"确定",
				cl_title:"取消",
				drag:true,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					insert_attr_warehouse_price();
				}
			});
		});
	});
	
	function insert_attr_warehouse_price(){
		var actionUrl = "dialog.php?act=insert_warehouse_price";  
		$("#warehouseForm").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
				},
				async: true  
		 });
	}
	//属性仓库价格 end
	
	//属性地区价格 start
	$(document).on("click","input[name='area_butt']",function(){
		
		var goods_id = $("#goods_id").val();
		var goods_attr_id = $(this).data('goodsattrid');
		var attr_value = $("#goodsAttrValue_" + goods_attr_id).val();
		
		if(attr_value == ''){
			alert("请选择商品规格");
			return false;
		}
		
		$.jqueryAjax('dialog.php', 'act=add_area_price' + '&goods_id=' + goods_id + '&goods_attr_id=' + goods_attr_id + '&goods_attr_name=' + attr_value, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:"属性地区价格",
				width:864,
				content:content,
				ok_title:"确定",
				cl_title:"取消",
				drag:true,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					insert_attr_area_price();
				}
			});
		});
	});
	
	function insert_attr_area_price(){
		var actionUrl = "dialog.php?act=insert_area_price";  
		$("#areaForm").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
				},
				async: true  
		 });
	}
	//属性地区价格 end
	
	//删除商品勾选属性
	$(document).on("click","*[ectype='attrClose']",function(){
		var _this = $(this);
		var goods_id = _this.data("goodsid");
		var attr_id = _this.data("attrid");
		var goods_attr_id = _this.data("goodsattrid");
		var attr_value = _this.data("attrvalue");
		
		
		if(_this.siblings("input[type='checkbox']").is(":checked") == true){
			_this.siblings("input[type='checkbox']").prop("checked",false);
			$.jqueryAjax('wholesale.php', 'act=del_goods_attr' + '&goods_id=' + goods_id + '&attr_id=' + attr_id + '&goods_attr_id=' + goods_attr_id + '&attr_value=' + attr_value, function(data){
				getAttrList(goods_id);
			});
		};
		
	});
		
	$(document).on("click","a[ectype='attr_input']",function(){
		var attr_id = $(this).data('attrid');
		var goods_id = $("input[name='goodsId']").val();
		
		$.jqueryAjax('wholesale.php', 'is_ajax=1&act=attr_input_type' + '&attr_id=' + attr_id + '&goods_id=' + goods_id, function(data){
			var content = data.content;
			pb({
				id:"attr_input_type",
				title:"手工录入属性",
				width:820,
				content:content,
				ok_title:"确定",
				cl_title:"取消",
				drag:false,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					insert_attr_input();
				}
			});
		});
	});
	
	function insert_attr_input(){
		var actionUrl = "wholesale.php?act=insert_attr_input";  
		$("#insertAttrInput").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
					$(".attr_input_type_" + data.attr_id).html(data.content);
					//自动加载商品属性
					getAttrList(data.goods_id);
				},
				async: true  
		 });
	}
	
	$(document).on("click",".xds_up",function(){
		var _div = $(this).parent().clone();
		_div.find("i").removeClass("xds_up").addClass("xds_down");
		$(this).parents(".input_type_items").append(_div);
	});
	
	$(document).on("click",".xds_down",function(){
		var parent = $(this).parents(".input_type_item");
		var goods_attr_id = parent.children("input[name='goods_attr_id[]']").val();
		var goods_id = $("input[name='goods_id']").val();
		
		if(goods_attr_id > 0){
			
			var attr_id = $("input[name='attr_id']").val();

			if(confirm('您确定删除该属性吗？')){
				$.jqueryAjax('dialog.php', 'is_ajax=1&act=del_input_type' + '&goods_attr_id=' + goods_attr_id + '&attr_id=' + attr_id + '&goods_id=' + goods_id, function(data){
					$(".attr_input_type_" + data.attr_id).html(data.attr_content);
					parent.remove();
					
					//自动加载商品属性
					getAttrList(goods_id);
				});
			}
			
		}else{
			parent.remove();
		}
	});
	/**********************************{商品属性信息} end*****************************/
	
	/*************************************批量上传跳转连接 start************************************/
	$(document).on("click","#produts_batch",function(){
		var model = $(":input[name='goods_model']").val();
		window.open("wholesale_goods_produts_batch.php?act=add" + "&goods_id=" +goods_id+ "&model=" + model,"_blank");
	});
	
	$(document).on("click","#produts_warehouse_batch",function(){
		var model = $(":input[name='goods_model']").val();
		var warehouse_id = 0;
		
		$("input[data-type='warehouse_id']").each(function(index, element) {
			if($(element).is(":checked") == true){
				warehouse_id = $(this).val();
			}
		});
		
		window.open("goods_produts_warehouse_batch.php?act=add" + "&goods_id=" +goods_id+ "&model=" + model+ "&warehouse_id=" + warehouse_id,"_blank");
	});
	
	$(document).on("click","#produts_area_batch",function(){
		var model = $(":input[name='goods_model']").val();
		var area_id = 0;
		
		$("input[data-type='region_id']").each(function(index, element) {
			if($(element).is(":checked") == true){
				area_id = $(this).val();
			}
		});
		
		window.open("goods_produts_area_batch.php?act=add" + "&goods_id=" +goods_id+ "&model=" + model+ "&area_id=" + area_id,"_blank");
	});
	
	$(document).on("click","#attr_refresh",function(){
		getAttrList(goods_id);
	});
	/*************************************批量上传跳转连接 end************************************/	
	
	/************************************补充js************************************/
	//切换商品模式
	$(document).on('click', "[ectype='price_model'] :radio", function(){
		var price_model = $(this).val();
		
		if(price_model == 0){
			$("*[ectype='price_model_unified']").show();
			$("*[ectype='price_model_ladder']").hide();
			$("input[name='moq']").attr("readonly",false).removeClass("text_readonly");
		}else if(price_model == 1){
			$("*[ectype='price_model_unified']").hide();
			$("*[ectype='price_model_ladder']").show();
			$("input[name='moq']").attr("readonly",true).addClass("text_readonly");
		}
	})

	//判断起订量和阶梯设置
	$(document).on('blur', "[name='volume_number[]']", function(){
		var number = [];
		var minNumber = "";
		var moq = "";
		$("input[name='volume_number[]']").each(function(i) {
            var val = $(this).val();
			if(val == 0 || val == ""){
				$(this).addClass("error");
				$(this).parents(".special_div").siblings(".form_prompt").html('<label class="error"><i class="icon icon-exclamation-sign"></i>商品数量必须大于0</label>')
				return false;
			}else{
				$(this).parents(".special_div").siblings(".form_prompt").html('');
			}
			number[i] = val;
        });
		
		minNumber = Math.min.apply(Math,number);
		$("input[name='moq']").val(minNumber);
		
	})
	
	/*
	** 删除优惠阶梯价格
	*/
	$(document).on("click","a[ectype='remove_volume']",function(){
		var index = $(this).parent("td").index();
		var parent = $(this).parents("table");
		var id = $(this).data('id');
		var goods_id = $("input[name='goods_id']").val();
		
		if(id > 0){
			if(confirm('您确定删除该优惠价格吗？')){
				$.jqueryAjax('dialog.php', 'act=del_wholesale_volume' + '&id=' + id + '&goods_id=' + goods_id, function(data){
					parent.find("tr").each(function(){
						$(this).find("td").eq(index).remove();
					});	
				});
			}
			
		}else{
			parent.find("tr").each(function(){
				$(this).find("td").eq(index).remove();
			});
		}	
	});	

	//上传属性图片 start
	$(document).on("click","a[ectype='add_attr_img']",function(){
		
		var goods_id = $("#goods_id").val();
		var goods_name = $("input[name=goods_name]").val();
		var attr_id = $(this).data('attrid');
		var goods_attr_id = $(this).data('goodsattrid');
		var attr_value = $("#goodsAttrValue_" + goods_attr_id).val();
		
		if(attr_value == ''){
			alert("请选择商品规格");
			return false;
		}
		
		$.jqueryAjax('wholesale.php', 'act=add_attr_img' + '&goods_id=' + goods_id + '&goods_name=' + goods_name + '&attr_id=' + attr_id + '&goods_attr_name=' + attr_value + '&goods_attr_id=' + goods_attr_id, function(data){
			var content = data.content;
			pb({
				id:"categroy_dialog",
				title:"上传属性图片",
				width:664,
				content:content,
				ok_title:"确定",
				cl_title:"取消",
				drag:true,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					get_attr_gallery();
				}
			});
		});
	});

	function get_attr_gallery(){

		var actionUrl = "wholesale.php?act=insert_attr_img";  
		$("#fileForm").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: actionUrl,
				data: {"action": "TemporaryImage"},
				success: function (data) {
					if(data.is_checked){
						$(".attr_gallerys").find(".img[data-type='img']").remove();
						var _div_img = '<div class="img" data-type="img"><img src="images/yes.png" /></div>';
						$(".attr_gallerys").find("a[data-goodsattrid='" + data.goods_attr_id + "']").after(_div_img);
					}
				},
				async: true
		 });
	}

	function delete_attr_gallery(goods_id, attr_id, goods_attr_name, goods_attr_id){
		 $.jqueryAjax('wholesale.php', 'act=drop_attr_img' + '&goods_id=' + goods_id + '&attr_id=' + attr_id + '&goods_attr_name=' + goods_attr_name + '&goods_attr_id=' + goods_attr_id, function(data){
			if(data.error == 0){
				$(".img_flie_" + data.goods_attr_id).remove();
			}
		 });
	}

	function get_choose_attrImg(goods_id, goods_attr_id){
		if($("#feedbox").is(":hidden")){
		 $.jqueryAjax('wholesale.php', 'act=choose_attrImg' + "&goods_id="+goods_id +  "&goods_attr_id="+goods_attr_id, function(data){
			if(data.error == 0){
				$("#feedcontent").html(data.content);
				$("#feedbox").show();
			}
		 });
		}else{
			$("#feedbox").hide();
		}
	}

	function gallery_on(this_obj,gallery_id,goods_id,goods_attr_id)
	{
		var a = document.getElementById('feedcontent').getElementsByTagName("li");
	
		for(i = 0; i < a.length; i++)
		{
			a[i].className=" ";
		}
		
		$.jqueryAjax('wholesale.php', 'act=insert_gallery_attr' + "&gallery_id="+gallery_id +  "&goods_id="+goods_id +  "&goods_attr_id="+goods_attr_id, function(data){
			$("#attr_gallery_flie_" + data.goods_attr_id).attr("href", data.img_url);
			$("input[name='img_url']").val(data.img_url);
		 });
		 
		this_obj.className="on";
	}
	
	
	$("input[name='is_promote']").on("click",function(){
		var val = $(this).val();
		var parent = $(this).parents(".checkbox_item").siblings(".hidden_div");
		
		if(val == 1){
			parent.show();
		}else{
			parent.hide();
		}
	});
	$(document).on("click","[ectype='search_attr']",function(){
		wholesale_set_attribute_table(goods_id , 1); //重置表格
	});
	//日期选择插件调用start sunle
	var opts1 = {
		'targetId':'promote_start_date',//时间写入对象的id
		'triggerId':['promote_start_date'],//触发事件的对象id
		'alignId':'text_time1',//日历对齐对象
		'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
	},opts2 = {
		'targetId':'promote_end_date',
		'triggerId':['promote_end_date'],
		'alignId':'text_time2',
		'format':'-'
	}
	
	xvDate(opts1);
	xvDate(opts2);
	//日期选择插件调用end sunle
    </script>
</body>
</html>
