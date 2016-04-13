<? 
$type= $_POST['TYPE'];
$app_id= $_POST['APP_ID'];
$link= $_POST['LINK'];
$image= $_POST['IMAGE'];
$name= urlencode($_POST['NAME']);
$caption= urlencode($_POST['CAPTION']);
$description= urlencode($_POST['DESCRIPTION']);
$message= urlencode($_POST['MESSAGE']);
$redirect_uri= $_POST['REDIRECT_URI'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facebook Share URL Generator</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js.js"></script>
</head>
<body>
<div id="header">
  <h2><b>facebook</b> share URL generator</h2>
</div>
<div id="container">
  <p>Fill out the fields below with the information provided by the client (they should have received a "FB Share" questionnaire form us). Once you click submit, the code will appear in the textarea below.</p>
  <form action="<?=$_SERVER['PHP_SELF']?>#output" method="POST">
    <div class="form_item">
      <label><b>Is this for a Convio donation thank you page?</b></label>
       <br />
      <p>Selecting yes will add a Convio conditional for personal, team and general donation pages.</p>
      <input type="radio" name="TYPE" value="y" checked onchange="show_mssg('y');"/>
      <span>Yes</span><br />
      <input type="radio" name="TYPE" value="n" <? if($type=="n"){echo "checked";} ?> onchange="show_mssg('n');"/>
      <span>No</span> </div>
      <hr />
    <div class="form_item">
      <label>App Id:</label>
      <input type="text"  name="APP_ID" id="APP_ID" value="<?= $app_id ?>" />
    </div>
    <div class="form_item">
      <label>Link:</label>
      <input type="text"  name="LINK" id="LINK" value="<?= $link ?>" />
    </div>
    <div id="mssg1" class="footnotes">enter <b>only</b> the main url, and make sure to add "http://www" example: http://www.google.com</div>
    <div id="mssg2" class="footnotes">make sure to add "http://www" example: http://www.google.com</div>
    <div class="form_item">
      <label>URL to image:</label>
      <input type="text"  name="IMAGE" id="IMAGE" value="<?= $image ?>" />
    </div>
    <div class="footnotes">make sure to add "http://www" example: http://www.google.com</div>
    <div class="form_item">
      <label>Title:</label>
      <input type="text"  name="NAME" id="NAME" value="<?= urldecode($name); ?>" />
    </div>
    <div class="form_item">
      <label>Caption:</label>
      <textarea  name="CAPTION" id="CAPTION"><?= urldecode($caption); ?>
</textarea>
    </div>
    <div class="form_item">
      <label>Description:</label>
      <textarea name="DESCRIPTION" id="DESCRIPTION"><?= urldecode($description); ?>
</textarea>
    </div>
    <!--div class="form_item">
      <label>Message:</label>
      <textarea name="MESSAGE" id="MESSAGE"><?# = $message ?>
</textarea>
    </div-->
    <div class="form_item">
      <label>Redirect URL:</label>
      <input type="text"  name="REDIRECT_URI" id="REDIRECT_URI" value="<?= $redirect_uri ?>" />
    </div>
    <div id="mssg1b" class="footnotes">enter <b>only</b> the main url, and make sure to add "http://www" example: http://www.google.com</div>
    <div id="mssg2b" class="footnotes">make sure to add "http://www" example: http://www.google.com</div>
    <br />
    <input type="submit" value="Generate" />
  </form>
  <? 
if(!empty($app_id)){
	if($type=="n"){
        echo '<textarea id="output"><a href="https://www.facebook.com/dialog/feed?app_id=',
		      $app_id,'&link='.$link.'&amp;picture='.$image.'&amp;name='.$name.'&amp;caption='.
			  $caption.'&amp;description='.$description.'&amp;message='.$message.'&amp;redirect_uri='.
			  $redirect_uri,'">THIS IS A PLACE HOLDER</a></textarea>';
	}else{
        echo '<textarea id="output">[[?[[S8]]::TYPE=20::<a href="https://www.facebook.com/dialog/feed?app_id=',
             $app_id.'&amp;link='.$link.'/site/TR?px=[[S334:PROXY_ID]]%26pg=personal%26fr_id=[[S334:FR_ID]]%26s_src=FB_Donate_Share&picture='.
			 $image.'&amp;name='.$name.'&amp;caption='.$caption.'&amp;description='.$description.'&amp;message='.$message.'&amp;redirect_uri='.
			 $redirect_uri.'/site/TR?px=[[S334:PROXY_ID]]%26pg=personal%26fr_id=[[S334:FR_ID]]%26s_src=FB_Donate_Share">THIS IS A PLACE HOLDER</a>::[[?[[S8]]::TYPE=22::<a href="https://www.facebook.com/dialog/feed?app_id=',
			 $app_id.'&amp;link='.$link.'%2Fsite%2FTR%3Fteam_id%3D[[S334:PROXY_ID]]%26pg%3Dteam%26fr_id%3D[[S334:FR_ID]]%26s_src=FB_Donate_Share&picture='.
			 $image.'&amp;name='.$name.'&amp;caption='.$caption.'&amp;description='.$description.'&amp;message='.
			 $message.'&amp;redirect_uri='.$redirect_uri.'%2Fsite%2FTR%3Fteam_id%3D[[S334:PROXY_ID]]%26pg%3Dteam%26fr_id%3D[[S334:FR_ID]]%26s_src=FB_Donate_Share">THIS IS A PLACE HOLDER</a>::<a href="https://www.facebook.com/dialog/feed?app_id=',  
			 $app_id.'&amp;link='.$link.'/site/Donation2?idb=0%26df_id=[[S334:df_id]]%26[[S334:df_id]].donation=form1%26FR_ID=[[S334:FR_ID]]%26PROXY_ID=[[S334:PROXY_ID]]%26PROXY_TYPE=21%26s_src=FB_Donate_Share&picture='.
			 $image.'&amp;name='.$name.'&amp;caption='.$caption.'&amp;description='.$description.'&amp;message='.
			 $message.'&amp;redirect_uri='.
			 $redirect_uri.'/site/Donation2?idb=0%26df_id=[[S334:df_id]]%26[[S334:df_id]].donation=form1%26FR_ID=[[S334:FR_ID]]%26PROXY_ID=[[S334:PROXY_ID]]%26PROXY_TYPE=21%26s_src=FB_Donate_Share">THIS IS A PLACE HOLDER</a>]]]]','</textarea>';
   }
}else{
    echo '<textarea id="output"></textarea>';
}
?>
</div>
</body>
</html>
