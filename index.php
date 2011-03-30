<?php include('header.php');?>
<!DOCTYPE html>
<html lang="<?php echo $language;?>" <?php if($language=='ar'){echo 'dir="rtl"';}?>>
<head>
  <meta charset="UTF-8">
  <title><?php echo $title;?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="header"><header><h1<?php if($language=='ar'){echo ' dir="ltr" ';}?>><?php echo $heading;?></h1></header></div>

<div class="container">

<div class="article"><article>
<?php echo $content;?>
</article></div>

<div class="aside"><aside>
<h1><?php echo $sideheader;?></h1>
<p><?php echo $sidecontent;?></p>

<nav><ul class="downloads">
<?php
$links=array(
'<li><a href="http://www.mozilla.com/en-US/firefox/all.html">Firefox</a></li>',
  '<li><a href="http://www.google.com/chrome/">Chrome</a></li>',
  '<li><a href="http://www.opera.com/browser">Opera</a></li>',
  '<li><a href="http://www.apple.com/safari/">Safari</a></li>');
$link = shuffle($links);
echo join($links);
?>
</ul></nav>
</aside></div>

</div>

<div class="footer"><footer>
  <?php $lang="en";include('nav.php');?>
  <?php echo $footer;?>
  <a href="http://www.w3.org/html/logo/">
    <img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
    </a>
</footer></div>

<?php include('counterandshit.php');?>
</body>
</html>