<?php
/*
  Yahoo Firehose research interface
  YQL lookup and results list module
  Homepage: http://github.com/codepo8/firehose-research
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/

if(isset($_POST['sent']) || isset($_POST['moar'])){
  if(isset($_POST['sent'])){
    $offset = 0;
  }
  $howmany = 20;
  $firehose = 'select * from social.updates.search('.$offset.','.$howmany.
              ') where query="'.$_POST['s'].'" and source in '.
              ' ("'.join('","',$_POST['sources']).'")';
  echo "<!-- $firehose -->";

  $data = $yahoo_session->query($firehose);

  if($data->query->results !== null){

    echo '<h2><span>3</span> Your search results</h2>';
    echo '<ul id="results">';
    if(sizeof($data->query->results->update) == 1){
     echo render($data->query->results->update); 
    } else {
      foreach($data->query->results->update as $u){
        echo render($u);
      }
    }
    echo '</ul>';
    $offset += $howmany;
    echo "<input type=\"hidden\" name=\"offset\" value=\"$offset\">
          <div class=\"more\">
            <input type=\"submit\" name=\"moar\" value=\"see more results\">
          </div>";
  } else {
    echo "<p class=\"error\">
              Sorry, but we couldn't find anything for these settings.
          </p>";
  }
}
?>