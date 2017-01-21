<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_valid_email_format('test@test.com')
  // custom validation
  function has_valid_email_format($value) {
    // Function can be improved later to check for
    // more than just '@'.
    //
    $atPos = strpos($value, '@'); 
    $dotPos = strpos($value, '.');
    if(($atPos && $dotPos) === false) {
      echo '1here';
      return false;
    } else if($dotPos < $atPos) {
      echo '2here';
      return false;
    } else if( $atPos + 1 === $dotPos) {
      echo '3here';
      return false;
    } else if (preg_match('/@[A-Za-z0-9]+\.[A-Za-z0-9]/', $value) !== 1) {
      echo '4here';
      return false;
    }
    return true;
  }


?>
