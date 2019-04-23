<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php if ($this->_var['page_title']): ?><?php echo $this->_var['page_title']; ?><?php else: ?><?php echo $this->_var['lang']['store_page']; ?><?php endif; ?></title>
    
    <link rel="shortcut icon" href="../favicon.ico" />
    <link rel="icon" href="../animated_favicon.gif" type="image/gif" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/purebox.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../js/perfect-scrollbar/perfect-scrollbar.min.css" />
    <?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery-1.9.1.min.js,../js/jquery.json.js,../js/transport_jquery.js,../js/utils.js,listtable.js,common.js,jquery.validation.min.js,../js/jquery.form.js,../js/perfect-scrollbar/perfect-scrollbar.min.js,../js/lib_ecmobanFunc.js')); ?>
	<!--[if lt IE 9]>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
</head>
<body>
<div class="header">
    <div class="header_warpper">
        <div class="logo_info">
            <div class="logo">
            	<a href="goods.php?act=list">
                    <div class="img">
                    <?php if ($this->_var['stores_logo']): ?>
                    <img src="<?php echo $this->_var['stores_logo']; ?>" />
                    <?php else: ?>
                    <img src="images/store_logo.png" />
                    <?php endif; ?>
                    </div>
                    <div class="wz"><?php echo $this->_var['lang']['offline_store']; ?></div>
                </a>
            </div>
            <div class="english">BUSINESS MANAGMENT CENTER</div>
        </div>
        <div class="nav">
            <ul>
                <li <?php if ($this->_var['app'] == "goods"): ?>class="curr"<?php endif; ?>><a href="goods.php?act=list"><?php echo $this->_var['lang']['store_goods']; ?></a></li>
                <li <?php if ($this->_var['app'] == "order"): ?>class="curr"<?php endif; ?>><a href="order.php?act=list"><?php echo $this->_var['lang']['store_order']; ?><span class="order"></span></a></li>
                <li <?php if ($this->_var['app'] == "assistant"): ?>class="curr"<?php endif; ?>><a href="store_assistant.php?act=list"><?php echo $this->_var['lang']['store_user']; ?></a></li>
            </ul>
        </div>
        <div class="manager">
            <div class="avatar">
				<form  action="index.php" id="fileForm" method="post"  enctype="multipart/form-data"  runat="server" >
					<input type="hidden" name="act" value="upload_store_img">
					<input type="file" name="img">
				</form>
				<a href="#"><img src="<?php if ($this->_var['store_user_info']['store_user_img']): ?>../<?php echo $this->_var['store_user_info']['store_user_img']; ?><?php else: ?>images/tx.png<?php endif; ?>" /></a>
			</div>
            <dl>
                <dt><?php echo $this->_var['store_user_info']['stores_user']; ?></dt>
                <dd>
                    <span><i class="sc_icon sc_icon_store"></i><a class="navbar-brand" href="index.php"><?php echo $this->_var['lang']['store_page']; ?></a></span>
                    <span><i class="sc_icon sc_icon_tc"></i><a class="navbar-brand navbar-right" href="privilege.php?act=logout"><?php echo $this->_var['lang']['logout']; ?></a></span>
                    <span><i class="sc_icon sc_icon_store"></i><a class="navbar-brand navbar-right" href="index.php?act=clear_cache"><?php echo $this->_var['lang']['clear_cache']; ?></a></span>
                </dd>
            </dl>
        </div>
    </div>
</div>

<script>
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
//上传门店图片
$(".avatar input").change(function(){
	var actionUrl = "index.php?act=upload_store_img";
	$("#fileForm").ajaxSubmit({
		type: "POST",
		dataType: "json",
		url: actionUrl,
		data: {"action": "TemporaryImage"},
		success: function (data) {
			if (data.error == "0") {
			   alert(data.massege);
			} else if (data.error == "1") {
			   $(".avatar img").attr("src", data.content);
			}
		},
		async: true  
	 });
})
</script>