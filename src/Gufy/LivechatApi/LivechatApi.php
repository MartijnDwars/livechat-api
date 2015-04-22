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
   'group',
   'report',
   'status',
   'visitor',
   'ticket'
  );
  public function __construct($user, $api_key)
  {
    $this->user = $user;
    $this->api_key = $api_key;
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
}
