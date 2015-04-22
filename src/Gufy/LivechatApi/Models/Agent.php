<?php namespace Gufy\LivechatApi\Models;

class Agent extends Base
{
  protected $baseUrl = 'agents';
  public function get()
  {
    return $this->request('GET','/');
  }
  public function find($login)
  {
    return $this->request('GET', '/'.$login);
  }
  public function create($data=[])
  {
    return $this->request('POST', '/', $data);
  }
  public function update($login, $data)
  {
    return $this->request('PUT', '/'.$login, $data);
  }
  public function reset($login)
  {
    return $this->request('PUT', '/'.$login.'/reset_api_key');
  }
  public function delete($login)
  {
    return $this->request('DELETE', '/'.$login);
  }
}
