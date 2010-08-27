<?php
/*
  Yahoo Firehose research interface
  Homepage: http://github.com/codepo8/firehose-research
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
  include_once('filter.php');
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <title>Yahoo! Firehose research interface</title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?2.8.0/build/reset-fonts-grids/reset-fonts-grids.css&2.8.0/build/base/base-min.css">
  <link rel="stylesheet" type="text/css" href="firehosesearch.css">
</head>
<body class="yui-skin-sam">
<div id="doc" class="yui-t7">
  <div id="hd" role="banner">
    <h1>Yahoo Firehose search</h1>
  </div>
  <div id="bd" role="main">
    <form method="post" id="mainform" action="index.php">
      <h2><span>1</span> Select the sources you want to get information from (default is all)</h2>
      <ul id="sources">
      <?php include('options.php');?>
      </ul>
      <h2><span>2</span> Tell us what you want to find</h2>
      <div class="bar"><label for="search">Search for:</label><input type="text" id="search" name="s" value="<?php echo $_POST['s'];?>"><input type="submit" value="search the social web" name="sent"></div>
      <?php include('lookup.php');?>
    </form>
  </div>
  <div id="ft" role="contentinfo">
    <p>Written by Christian Heilmann, powered by YQL and YUI. State retention using HTML5 local storage.</p>
  </div>
</div>
<script src="http://yui.yahooapis.com/combo?3.2.0pr1/build/yui/yui-min.js"></script>
<script>
  YUI().use('node', function(Y) {
    if(('localStorage' in window) && window['localStorage'] !== null){
      var key = 'lastyahoofirehose';
    <?php if(isset($_POST['sent']) || isset($_POST['moar'])){?>
      localStorage.setItem(key,Y.one('form').get('innerHTML'));
    <?php }else{ ?>
    if(key in localStorage){
        Y.one('#mainform').set('innerHTML',localStorage.getItem(key));
        Y.one('#hd').append('<p class="message"><strong>Notice:</strong> We restored your last search for you - not live data</span>');
    }
    <?php } ?>
    }
    Y.all('#sources li').set('tabIndex','-1');
    Y.one('#sources').delegate('click',function(event){
       Y.one(this).ancestor().toggleClass('on'); 
    },'label');
  });
</script>
</body>
</html>

