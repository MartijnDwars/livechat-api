<?php namespace Gufy\LivechatApi;
use Exception;
class LivechatApi
{
  private $user;
  private $api_key;
  protected $models = array(
   'agent',
   'cannedResponse',
   'chat',
   'goal',
   'greeting',
   'group',
   'report',
   'status',
   'tag',
   'ticket',
   'visitor',
   'webhook',
  );
  private static $_instance;

  public function __construct($user, $api_key)
  {
    $this->user = $user;
    $this->api_key = $api_key;
    LivechatApi::setInstance($this);
  }

  public function __get($var)
  {
    if(!in_array($var, $this->models))
    throw new Exception("Model not found. Available model is ".json_encode($this->models));
    $var = ucfirst($var);
    $class = "Gufy\\LivechatApi\\Models\\{$var}";
    $model = new $class($this->user, $this->api_key);

    return $model;
  }
  public static function setInstance($instance)
  {
    return static::$_instance = $instance;
  }
  public static function getInstance()
  {
    return static::$_instance;
  }
  public function getUser()
  {
    return $this->user;
  }
  public function getApiKey()
  {
    return $this->api_key;
  }
}
