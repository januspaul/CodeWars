<?php
function remove_exclamation_marks($string) {
  return str_ireplace('!', '', $string);
}