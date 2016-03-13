<?php
class Smarty{
  private $arrs=array();
  function assign($key,$value){
    $this->arrs[$key]=$value;
  }
  function display($tplfile){
    $confile->$tplfile.'.php';
    $content=file_get_contents($tplfile);
   $rescontent= preg_replace($zz,$rep,$content);
   file_put_contents($confile,$rescontent);
   include $confile;
  }
}
?>