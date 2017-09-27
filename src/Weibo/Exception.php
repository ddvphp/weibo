<?php
namespace DdvPhp\Weibo;

class Exception extends \DdvPhp\DdvException\Error
{
  // 魔术方法
  public function __construct( $message = 'Weibo Error', $code = '400', $errorId = 'WEIBO_ERROR' , $errorData = array() )
  {
    parent::__construct( $message , $errorId , $code, $errorData );
  }
}
