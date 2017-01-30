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
    return false;
  } else if($dotPos < $atPos) {
    return false;
  } else if( $atPos + 1 === $dotPos) {
    return false;
  } else if (preg_match('/@[A-Za-z0-9]+\.[A-Za-z0-9]/', $value) !== 1) {
    return false;
  }
  return true;
}

// id must be passed in case it is being verified against current user

function has_unique_username($username, $id=NULL) {
  global $db;
  $sql = "SELECT * FROM users WHERE username='" . mysqli_real_escape_string($db, h($username)) . "';";
  $user_result = db_query($db, $sql);
  if(!$user_result) {
    echo db_error($db);
    db_close($db);
    exit;
  } elseif(db_num_rows($user_result) !== 0) {
    if(!isset($id)) {
      return false;
    } elseif($id !== db_fetch_assoc($user_result)['id']) {
      return false;
    }
  }
  return true;
}


?>
