<?php /* Smarty version Smarty-3.1.13, created on 2013-03-09 07:25:46
         compiled from "d:\xampp\htdocs\beiya\templates\usr_info_handle.html" */ ?>
<?php /*%%SmartyHeaderCode:7569513aa2cdd1de94-75150322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bd494987f7647a7868910a487efefe3d9503d4e' => 
    array (
      0 => 'd:\\xampp\\htdocs\\beiya\\templates\\usr_info_handle.html',
      1 => 1362810284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7569513aa2cdd1de94-75150322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513aa2cdda34f8_37968535',
  'variables' => 
  array (
    'header' => 0,
    'navigation' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513aa2cdda34f8_37968535')) {function content_513aa2cdda34f8_37968535($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>用户设置</title>
    <link rel="stylesheet" href="/css/main.css" type="text/css" />
<link rel="stylesheet" href="/css/content.css" type="text/css" />
<link rel="stylesheet" href="/css/goodInfo.css" type="text/css" />
<link rel="stylesheet" href="/css/login.css" type="text/css" />
<link rel="stylesheet" href="/css/button.css" type="text/css" />

<style type="text/css">
div.usr-info{
  margin-left: 20px;
  margin-top: 100px;
  width: 300px;
  background-color:#e5eecc;
  text-align: center;
}
div.uinfo-panel{
  display:none;
}
div.order-hdl{
  background-color: #ccffee;
}
div.ohdl-panel{
  display:none;
}

div#handleBlank{
  float:none;
  box-shadow: 1px;
}
</style>
<script type="text/javascript" src="/js/jquery.js" ></script>
<script type="text/javascript" src="/js/search.js" ></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  
    <div id="header">
       <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

    </div>
        <div id="navigation">
            <?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

        </div>
<div id="main">
  <div id="content">
    <div id="userInfo"> <!--This is the main block of the page-->
       <div class="usr-info">
            <div class="usr-info-hd"><a>个人信息管理</a></div>
            <div class="uinfo-panel">
                <div class="u-pa-li-1"><a>个人信息</a></div>
                <div class="u-pa-li-2"><a>修改密码</a></div>
            </div>
       </div>
       <div class="shop-hdl"><a>商店管理</a></div>
       <div class="order-hdl"><a>我的订单</a></div>
       <div class="ohdl-panel">
          <div class="ohdl-pa-li-1"><a>未发货的订单</a></div>
          <div class="ohdl-pa-li-2"><a>已发货的订单</a></div>
          <div class="ohdl-pa-li-3"><a>已完成的订单</a></div>
       </div>
       
    <div id="handleBlank">
    </div>
  </div>
</div>
</div>
    <div id="footer">
        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    </div>

<script type="text/javascript" >
  $(document).ready(function(){

//usr-info part:
  $("div.usr-info-hd a").click(function(){
    $("div.uinfo-panel").slideToggle("slow");
  });

  $('div.u-pa-li-1 a').click(function(){
   var requestData={requestV:'own_info'};
    $.post('/core/usr_info_hdl_re.php',requestData,function(data){
      $('#handleBlank').html(data);
    });
  });
$('div.u-pa-li-2 a').click(function(){
  var requestData={requestV:'ch_pass'};
  $.post('/core/usr_info_hdl_re.php',requestData,function(data){
    $('#handleBlank').html(data);
  });
}); 
//usr-info part ends.

// order part:
  $('div.order-hdl a').click(function(){
    $('div.ohdl-panel').slideToggle("slow");
  });

  $('div.ohdl-pa-li-1 a').click(function(){
    var requestData={requestV:'ohdl_1'};
    $.post('/core/usr_info_hdl_re.php',requestData,function(data){
      $('#handleBlank').html(data);
    });
  });

  $('div.ohdl-pa-li-2 a').click(function(){
    var requestData={requestV:'ohdl_2'};
    $.post('/core/usr_info_hdl_re.php',requestData,function(data){
      $('#handleBlank').html(data);
    });
  });

  $('div.ohdl-pa-li-3 a').click(function(){
    var requestData={requestV:'ohdl_3'};
    $.post('/core/usr_info_hdl_re.php',requestData,function(data){
      $('#handleBlank').html(data);
    });
  });

// order part end. 

// shop part:
  $('div.shop-hdl a').click(function(){
    var requestData={requestV:'shop_hdl'};
    $.post('/core/usr_info_hdl_re.php',requestData,function(data){
      $('#handleBlank').html(data);
    });
  });

// shop part ends.

}); //end of 'ready'
</script>
</body>
</html><?php }} ?>