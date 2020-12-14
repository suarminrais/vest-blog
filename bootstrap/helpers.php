<?php

  function removeTags($str) {
    if (($str === null) || ($str === ''))
      return false;
    else
      $str = strval($str);

    // Regular expression to identify HTML tags in
    // the input string. Replacing the identified
    // HTML tag with a null string.
    //str.replace(/(<([^>]+)>)/ig, '')
    return preg_replace('/(<([^>]+)>)/i','',$str);
  }