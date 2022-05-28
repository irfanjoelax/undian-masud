<?php

function b_encode($string)
{
  $encrypt_text = '412' . rand(111111111, 999999999) . '020' . $string;
  $encrypt_result = base64_encode($encrypt_text);
  return $encrypt_result;
}

function b_decode($string, $length = 15)
{
  $decrypt_text = base64_decode($string);
  $decrypt_result = substr($decrypt_text, $length);
  return $decrypt_result;
}
