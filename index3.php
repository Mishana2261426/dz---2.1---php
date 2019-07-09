<?php


  $html = "<a href='ssl'>ссылка</a> asd <a href='Men'>ссылка</a> ";

  preg_match_all("/<[Aa][\s]{1}[^>]*[Hh][Rr][Ee][Ff][^=]*=[ '\"\s]*([^ \"'>\s#]+)[^>]*>/", $html, $matches);


  $urls = $matches[1]; 
  
  for ($i = 0; $i < count($urls); $i++)
    echo $urls[$i]."\n";