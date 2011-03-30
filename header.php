<?php 
$languages = array(
  'new'=>'dummy',
  'ar'=>'&#x639;&#x631;&#x628;&#x649;',
  'en'=>'English',
  'cn'=>'中文',
  'cns'=>'正體中文',
  'ct'=>'Català',
  'cy'=>'Cymraeg',
  'de'=>'Deutsch',
  'dk'=>'Dansk',
  'et'=>'Eesti',
  'es'=>'Español',
  'fil'=>'Filipino',
  'fr'=>'Français',
  'id'=>'Indonesian',
  'it'=>'Italiano',
  'lt'=>'Lietuvių',
  'nl'=>'Nederlands',
  'no'=>'Norsk',
  'pl'=>'Polska',
  'pt'=>'Portuguesa',
  'br'=>'Portuguesa (Brasil)',
  'ro'=>'Română',
  'ru'=>'Русский',
  'sk'=>'Slovenský',
  'rs'=>'Srpski',
  'se'=>'Svenska',
  'fi'=>'Suomi'
);
$language = 'en';
if(isset($_GET['lang']) && in_array($_GET['lang'],array_keys($languages))){
  $language = $_GET['lang'];
}
include('languages/'.$language.'.php');
?>