<?php
// Sanitize html content:
function e($dirty) {
    return htmlspecialchars($dirty, ENT_QUOTES, 'UTF-8');
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <?php if($page['title'] === false): ?>
            <title><?php echo e(APP_NAME) ?></title>
        <?php else: ?>
            <title><?php echo e($page['title']) ?> - <?php echo e(APP_NAME) ?></title>
        <?php endif ?>

<link rel="stylesheet" href="/static/css/bootstrap.min.css">
<link rel="stylesheet" href="/static/css/vagrant.css">

<link rel="stylesheet" href="/static/css/prettify.css">
<link rel="stylesheet" href="/static/css/codemirror.css">
<link rel="stylesheet" href="/static/css/newmain.css">
<meta name="description" content="raphael shu <?php echo e($page['description']) ?>">
<meta name="keywords" content="raphael shu <?php echo e(join(',', $page['tags'])) ?>">

<?php if(!empty($page['author'])): ?>
    <meta name="author" content="<?php echo e($page['author']) ?>">
<?php endif; ?>

<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/prettify.js"></script>
<script src="/static/js/codemirror.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/highlight.min.js"></script>

<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      processEscapes: true
    }
  });
</script>

<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>

<style type="text/css">
h1, h2, h3, h4, h5, h6 {
  color: #000;     /* black */
  color: #999;     /* gray */
  color: #005580;  /* dark blue */
  color: #08c;     /* characteristic blue */
}
</style>
</head>
<body>

<div class="container">
 <div class="row Header with-border">
  <div class="span3 Module logo">
   <h1><a href="/">Raphael_Shu<span class="subtitle">Pages</span></a></h1>
  </div>
  <div class="span9">
   <div class="Module navigation">
   <!-- Navigation at the top of the page -->
    <ul>
    <li></li>
     <li> <a href="http://raphael.uaca.com/files/Personal_CV.pdf" target="_blank">Download CV</a></li>
    </ul>
   </div>
  </div>
 </div>




<div class="row">
 <div class="span3 Module sidebar">
  <div class="well" style="padding: 8px 0px;">
   <div id="sidebar">
        <div class="inner">
            <?php include('tree.php') ?>
        </div>
    </div>
  </div>
 </div>

 <script type="text/javascript">
 if (window.location.href.endsWith(".html") || window.location.href.endsWith(".htm")) {
   $(".sidebar").css("position", "absolute");
   $(".sidebar").css("left", "0");
 }
 </script>

 <div class="span9">
<?php echo $content; ?>

 </div>
</div>

<div class="row Footer">
    <div class="span12">
    Raphael Shu &copy; 2014
    </div>
</div>

</div>
</body>
</html>
