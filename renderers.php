<?php
/*
  Yahoo Firehose research interface
  Rendering function for results
  Homepage: http://github.com/codepo8/firehose-research
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/

function render($u){
  echo "<!-- $u->source -->";
  $when = date(DATE_RFC822,$u->lastUpdated);
  if($u->title == '' && $u->loc_longForm){
    $u->title = $u->loc_longForm;
  }
  if($u->title != '' && $u->description == '' && $u->loc_longForm){
    $u->description = $u->loc_longForm;
  }
  switch ($u->source){
    case 'agg.pandora':
    case 'agg.lastfm':
    $out = "<li>
              <p class=\"person\">
                <a href=\"{$u->profile_profileUrl}\">
                  <img src=\"{$u->profile_displayImage}\"
                       alt=\"{$u->profile_nickname}\">
                  <span>{$u->profile_nickname}</span>
                </a>
              </p>
              <div class=\"content\">
                <h3><a href=\"{$u->link}\">{$u->artisttxt}:
                                           {$u->title}</a></h3>
                <p>{$u->description}</p>
                <p class=\"via\">{$when} via {$u->loc_localizedName}</p>
              </div>
            </li>"; 
    break;
    case 'agg.vimeo':
    case 'agg.picasa':
    case 'agg.youtube':
    case 'y.flickr':
    case 'agg.smugmug':
    case 'agg.netflix':
    $out = "<li>
              <p class=\"person\">
                <a href=\"{$u->profile_profileUrl}\">
                  <img src=\"{$u->profile_displayImage}\"
                       alt=\"{$u->profile_nickname}\">
                  <span>{$u->profile_nickname}</span>
                </a>
              </p>
              <div class=\"content\">
                <h3><a href=\"{$u->link}\">{$u->title}</a></h3>
                <p><a href=\"{$u->link}\">
                  <img src=\"{$u->imgURL}\" alt=\"{$u->title}\"
                       width=\"{$u->imgWidth}\" height=\"{$u->imgHeight}\">
                </a></p>
                <p>{$u->description}</p>
                <p class=\"via\">{$when} via {$u->loc_localizedName}</p>
              </div>
            </li>"; 
    break;
    case 'agg.twitter':
    $out = "<li>
              <p class=\"person\">
                <a href=\"{$u->profile_profileUrl}\">
                  <img src=\"{$u->profile_displayImage}\"
                       alt=\"{$u->profile_nickname}\">
                  <span>{$u->profile_nickname[0]} / 
                        {$u->profile_nickname[1]}</span>
                </a>
              </p>
              <div class=\"content\">
                <h3><a href=\"{$u->link}\">{$u->title}</a></h3>
                <p>{$u->description}</p>
                <p class=\"via\">{$when} via {$u->loc_localizedName}</p>
              </div>
            </li>"; 
    break;
    case 'y.delicious':
    $out = "<li>
              <p class=\"person\">
                <a href=\"{$u->profile_profileUrl}\">
                  <img src=\"{$u->profile_displayImage}\"
                       alt=\"{$u->profile_nickname}\">
                  <span>{$u->profile_nickname}</span>
                </a>
              </p>
              <div class=\"content\">
                <h3><a href=\"{$u->link}\">{$u->title}</a></h3>
                <p>{$u->description}</p>
                <p class=\"via\">{$when} via {$u->loc_localizedName}</p>
              </div>
            </li>"; 
    break;
    default:
    $out = "<li>
              <p class=\"person\">
                <a href=\"{$u->profile_profileUrl}\">
                  <img src=\"{$u->profile_displayImage}\"
                       alt=\"{$u->profile_nickname}\">
                  <span>{$u->profile_nickname}</span>
                </a>
              </p>
              <div class=\"content\">
                <h3><a href=\"{$u->link}\">{$u->title}</a></h3>
                <p>{$u->description}</p>
                <p class=\"via\">{$when} via {$u->loc_localizedName}</p>
              </div>
            </li>"; 
    break;
  }
  return $out;
}
?>