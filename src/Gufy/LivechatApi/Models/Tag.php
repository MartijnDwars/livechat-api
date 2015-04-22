<?php namespace Gufy\LivechatApi\Models;

class Tag extends Base
{
  public $baseUrl = 'tags';
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
