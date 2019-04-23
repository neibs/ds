<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php echo $this->fetch('library/admin_html_head.lbi'); ?>
</head>
<body>
	<div class="print-main">
		<?php echo $this->fetch('library/order_print.lbi'); ?>
    </div>
	<input type="hidden" name="order_id" value="<?php echo $_GET['order_id']; ?>">
	<input type="hidden" name="order_sn" value="<?php echo $_GET['order_sn']; ?>">
	<input type="hidden" name="order_type" value="<?php echo $this->_var['order_type']; ?>">
    <script type="text/javascript" src="../js/LodopFuncs.js"></script>
	<script type="text/javascript">
	$.divselect("#print_specification","#print_specification_val",function(obj){
		var order_id = $("input[name='order_id']").val();
		var order_sn = $("input[name='order_sn']").val();
		var order_type = $("input[name='order_type']").val();
        var val = obj.attr("data-value");
		$.jqueryAjax('tp_api.php', 'act=change_order_print&order_id='+order_id+'&order_sn='+order_sn+'&order_type='+order_type+'&specification='+val, function(data){
			if(data.content){
				$(".print-main").html(data.content);
			}
		})
    });
	
	$(document).on("click","*[ectype='btnPrint']",function() {
		$(".print_textarea").each(function(){
			$(this).hide();
			$(this).siblings(".print-remark").html($(this).val()).show();
		});
		var printer = $("input[name='printer']").val();
		var width = $("input[name='width']").val();
		var height = $("input[name='height']").val();
		 
		if (printer == '' || printer == null) {
			alert("<?php echo $this->_var['lang']['printer_null']; ?>");
			return false;
		}
		var html = $("#printContent").html();
		var title = "<?php echo $this->_var['lang']['print_title']; ?>";
		lodop_print_html(title, html, printer,width,height);
	});
	
	$(document).on("click","*[ectype='btnPreview']",function() {
		$(".print_textarea").each(function(){
			$(this).hide();
			$(this).siblings(".print-remark").html($(this).val()).show();
		});
		var printer = $("input[name='printer']").val();
		var width = $("input[name='width']").val();
		var height = $("input[name='height']").val();
		 
		if (printer == '' || printer == null) {
			alert("<?php echo $this->_var['lang']['printer_null']; ?>");
			return false;
		}

		var html = $("#printContent").html();
		var title = "<?php echo $this->_var['lang']['print_title']; ?>";
		lodop_preview_html(title, html, printer,width,height);
	});
	
	$(".print-remark").click(function() {
		$(this).hide();
		$(this).siblings(".print_textarea").val($(this).html()).show();
	});
	</script>
</body>
</html>