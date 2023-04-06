<?php

function setProductCode() 
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $code = '';
  
  // Loop 6 times to generate a 6-digit code
  for ($i = 0; $i < 8; $i++) 
  {
    // Generate a random index to select a character from the $characters string
    $index = rand(0, strlen($characters) - 1);
    // Append the selected character to the $code string
    $code .= $characters[$index];
  }

  $code = 'EPDT-' . $code;
  return $code;
}

?>