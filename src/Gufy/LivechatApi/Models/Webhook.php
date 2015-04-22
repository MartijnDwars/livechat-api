<?php namespace Gufy\LivechatApi\Models;

class Webhook extends Base
{
  public $baseUrl = 'webhooks';
  public function get()
  {
    return $this->request('GET', '/');
  }
  public function create($data)
  {
    return $this->request('POST', '/', $data);
  }
  public function delete($id)
  {
    return $this->request('DELETE', '/'.$id);
  }
}
