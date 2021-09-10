<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx4d60d8192e1ffb65", "62c18c023a36e192f30562b9341d2dd3");
$signPackage = $jssdk->GetSignPackage();
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>微信分享</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name=keywords content="微信分享">
    <script src=http://res.wx.qq.com/open/js/jweixin-1.4.0.js charset=utf-8 async defer></script>
    <script>
        setTimeout(() => {
          wx.config({
            debug: false,
            appId: '<?php echo $signPackage["appId"];?>',
            timestamp: <?php echo $signPackage["timestamp"];?>,
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList:['onMenuShareTimeline','onMenuShareAppMessage']
          });
          wx.ready(function(){
            wx.onMenuShareTimeline({
              imgUrl:'http://img.xiyoumai.com/audi_christmas_share.jpeg',
              title:'标题',
              desc: '微信分享描述',
              link: 'http://activity.xiyoumai.com/audi_chrismas/'
            });
            wx.onMenuShareAppMessage({
              imgUrl:'http://img.xiyoumai.com/audi_christmas_share.jpeg',
              title:'标题',
              desc: '微信分享描述',
              link: 'http://activity.xiyoumai.com/audi_chrismas/'
            });
          })
        }, 500)
    </script>
    <!-- Link  CSS -->

    <!-- styles -->
    <style></style>
</head>

<body>
    <!-- Dom -->

    <!-- Libs -->
    
    <!-- JS -->

</body>

</html>