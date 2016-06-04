<?php
include 'common.php';
include 'header.php';
include 'menu.php';
?>


<script language="javascript" type="text/javascript">
    window.open("https://app.meiqia.com/"); 
    setTimeout(function(){
        history.back();
    },1);
</script>

<!--div class="main">
    <div class="body container">
        <!--?php include 'page-title.php'; ?>

		<div class="col-group typecho-page-main">
			<!--?php 
			switch ($act) {

				default:
					echo '
<style>
    .mq_set_box {
        margin-top: 10px;
        border: 1px solid #bce8f1;
        border-radius: 4px;
        background: #FFFFFF;
    }
    
    .mq_set_box .set_name {
        border-bottom: 1px solid #ccc;
        padding: 8px;
        background: #0C0C0C;
        color: #35D9F0;
        font-weight: bold;
    }
    
    .mq_set_box .set_name .set_desc {
        display: block;
        color: #837F7F;
        font-weight: normal;
        font-family: "宋体";
        padding-top: 5px;
    }
    
    .mq_set_box .set_body {
        padding: 10px;
    }
    
    .mq_set_box .set_body textarea,
    .mq_set_box .set_body input[type="text"] {
        width: 760px;
        border: 1px solid #ccc;
        box-shadow: inset 0 0 1px #ccc;
        outline: none;
        padding: 10px;
        border-radius: 4px;
    }
    
    .mq_set_submit {
        margin: 25px 0 10px;
    }
    
    .mq_set_submit input {
        width: auto;
        height: auto;
        border: 0;
        padding: 15px 20px;
        font-size: 12px;
        margin: 0 10px 0 0;
        border-radius: 4px;
        color: #fff;
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-size: 30px 30px;
        box-shadow: 0 0 4px 1px rgba(16, 160, 249, 0.3);
        background-color: #20a2de;
        cursor: pointer;
        outline: none;
    }
    
    .mq_set_submit input:hover {
        background-color: #00aff0;
    }
    
    .tipss {
        background-color: #FF8686;
        border-radius: 2px;
        padding: 15px;
        margin-top: 10px;
        letter-spacing: 1px;
    }
    
    .tipss p {
        margin: 0;
        color: #fff;
    }
    
    .tipss a {
        color: #fff;
    }
    
    .conbox {
        width: 1000px;
        border: 0;
        padding: 20px;
        border: 1px solid #ccc;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        background: #fff;
        margin: 20px;
        overflow: auto
    }
    
    .ds-themes li {
        display: inline-block;
        margin-right: 10px;
        overflow: hidden;
        padding: 10px 10px 10px 0;
        vertical-align: top;
        width: 280px;
        text-align: center
    }
    
    .other {
        border-top: #dfdfdf solid 1px;
        padding-top: 15px
    }
    
    #meiqia-remote-window p {
        margin: 10px 20px
    }
    
    #meiqia-remote-window .title {
        font-weight: bold;
        border-bottom: solid 1px #ccc;
        padding-bottom: 8px;
        margin-top: 25px;
    }
    
    .tips li {
        list-style: none;
    }
    
    .conbox .tip {
        margin: 10px 20px;
        color: #aaa;
    }
    
    .conbox .tips {
        line-height: 22px;
    }
    
    .conbox p a {
        padding: 0 5px;
    }
</style>

<div id="meiqia-remote-window" class="conbox">
   <div class="containertitle"><b>美洽在线客服设置</b><span class="actived">设置成功</span>
   </div>
   
   <div class=line></div>
   <div class="tipss">
      <p>美恰插件 V1.0.0</p>
      <p>开 发 者： <a href="http://lvlvl.cn/" target="_blank">鹿乃 - LVLVL.CN</a> [1696674719@qq.com]</p>
      <p>最后更新：2016年6月4日</p>
      <p>其它说明：
      </p>
      <p>请前往美洽注册登陆，在后台左下角点击设置按钮，进入ID查询页面会看到当前帐号的ID，把ID填写到这个下方设置里。</p>
      <p>在美洽后台美观设置里可找到ID且可以修改外观，还可以设置聊天窗口的样式等操作。</p>
      <p>美洽注册地址：<a href="https://app.meiqia.com/signup" target="_blank">https://app.meiqia.com/signup</a></p>
      <p>美洽外观地址：<a href="https://app.meiqia.com/setting/web-widget" target="_blank">https://app.meiqia.com/setting/web-widget</a></p>
      <p>美洽注册地址：<a href="https://app.meiqia.com/signup" target="_blank">https://app.meiqia.com/signup</a></p>
      <p>美洽下载地址：<a href="http://meiqia.com/downloads" target="_blank">http://meiqia.com/downloads</a></p>
      </div>

   <div class="mq_set_box">
        <div class="set_name">美洽ID设置
            <div class="set_desc">登陆美洽后台，点击左下角设置按钮，在ID查询里可以看到当前登陆帐号的ID。获取ID后点击下面后进行设置</div><strong><a href="./options-plugin.php?config=Meiqia" target="_blank">点击这里</a></strong>
        </div>
   </div>



</div>';
					break;
			}
			?>
		</div>
	</div>
</div>
<?php
include 'copyright.php';
include 'common-js.php';
include 'table-js.php';
?>


<?php include 'footer.php'; ?>