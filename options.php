<?php
/*
  Yahoo Firehose research interface
  Interface of social sources 
  Homepage: http://github.com/codepo8/firehose-research
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
$ycheck = in_array('y.',$_POST['sources']);
$check = $ycheck ? 'checked="checked"' : '';
$class = $ycheck ? 'class="on"' : '';
$options = "<li $class>
              <input type=\"checkbox\" $check value=\"y.\"
                     name=\"sources[]\" id=\"y\">
              <label for=\"y\">Yahoo</label>
            </li>";
$i = 0;
foreach(json_decode($sources) as $s){
  if(!strpos($s->n,'ahoo')){
    $ycheck = in_array($s->s, $_POST['sources']);
    $check = $ycheck ? 'checked="checked"' : '';
    $class = $ycheck ? 'class="on"' : '';
    $options .= "<li $class>
                   <input type=\"checkbox\" $check
                          value=\"{$s->s}\"
                          name=\"sources[]\" id=\"s$i\">
                   <label for=\"s$i\">{$s->n}</label>
                 </li>";
    $i++;
  }
}
echo $options;
?>