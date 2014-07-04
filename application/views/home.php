<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>

<ht<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>the art blog, free css template</title>
<meta name="keywords" content="free css template, the art blog, black, dark gray" />
<meta name="description" content="The Art Blog is a free CSS template, 2-column blog style layout" />
<link href="<?php echo base_url(); ?>css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="menu">
<ul>
    <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/index.jsp" accesskey="1" title="">Blog</a></li>
<li><a href="<?php echo base_url(); ?>index.php/welcome/gallery.jsp" accesskey="2" title="">Photos</a></li>
<li><a href="#" accesskey="3" title="">Links</a></li>
<li><a href="#" accesskey="4" title="">About</a></li>
<li><a href="<?php echo base_url(); ?>index.php/login/sign_up.jsp" accesskey="5" title="">Sign Up</a></li>
</ul>
</div>
<!-- end #menu -->
<?php if (isset($header)){?>

<div id="header">
<h1>The Green House</h1>
<h2>By Free CSS Templates</h2>
</div>    

<?php }?>
<!-- end #header -->
<div id="wrapper">
<div id="content">
<div id="posts">
    <?php echo $maincontent;?> 
</div>
<!-- end #posts -->
<div id="links">
<ul>
	<?php if(isset($archive)) {?>
<li>


   
    <h2>Archives</h2>
<ul>
<li><a href="#">February 2007</a> <i>(22)</i></li>
<li><a href="#">January 2007</a> <i>(31)</i></li>
<li><a href="#">December 2006</a> <i>(31)</i></li>
<li><a href="#">November 2006</a> <i>(30)</i></li>
<li><a href="#">October 2006</a> <i>(31)</i></li>
</ul>
<?php } ?>
</li>
<li>
<h2>Categories</h2>
<ul>
<li><a href="#">Donec Dictum Metus</a></li>
<li><a href="#">Etiam Rhoncus Volutpat</a></li>
<li><a href="#">Integer Gravida Nibh</a></li>
<li><a href="#">Maecenas Luctus Lectus</a></li>
<li><a href="#">Mauris Vulputate Dolor Nibh</a></li>
<li><a href="#">Nulla Luctus Eleifend</a></li>
<li><a href="#">Posuere Augue Sit Nisl</a></li>
</ul>
</li>
<li>
<h2>Blog Roll</h2>
<ul>
<li><a href="#">Donec Dictum Metus</a></li>
<li><a href="#">Etiam Rhoncus Volutpat</a></li>
<li><a href="#">Integer Gravida Nibh</a></li>
<li><a href="#">Maecenas Luctus Lectus</a></li>
<li><a href="#">Mauris Vulputate Dolor Nibh</a></li>
<li><a href="#">Nulla Luctus Eleifend</a></li>
<li><a href="#">Posuere Augue Sit Nisl</a></li>
</ul>
</li>
</ul>
</div>
<!-- end #links -->
<div style="clear: both;">&nbsp;</div>
</div>
</div>
<!-- end #content -->
<div id="footer">
<p id="legal">Copyright � 2007 The Green House. Designed
by <a href="http://www.freecsstemplates.org/">Free CSS
Templates</a></p>
<p id="brand">The Green House</p>
</div>
<!-- end #footer -->
<div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">Design
downloaded from <a href="http://www.freewebtemplates.com/">Free
Templates</a> - your source for free web templates<br />
Supported by <a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a>
</div>
</body></html>
