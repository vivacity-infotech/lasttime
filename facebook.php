<?php
//require('autoload.php');

?>
<a href="http://www.facebook.com/sharer.php?s=100&p[title]=titleheresexily&p[url]=http://vivacityinfotech.net&p[summary]=mysexysummaryhere&p[images][0]=http://vivacityinfotech.net/">link</a>
<?php $url = "http://vivacityinfotech.net"; ?>
<a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank">
    Share on Facebook
</a>
<script type="text/javascript">
function fbs_click() {
        u=location.href;
        t=document.title;
window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),
                'sharer',
                'toolbar=0,status=0,width=626,height=436');

            return false;
        }
</script>
