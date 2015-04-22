<?php namespace Gufy\LivechatApi\Models;

class Goal extends Base
{
  public $baseUrl = 'goals';
  public function get()
  {
    return $this->request('GET', '/');
  }
  public function find($id)
  {
    return $this->request('GET', '/'.$id);
  }
  public function create($data)
  {
    return $this->request('POST', '/', $data);
  }
  public function update($id, $data)
  {
    return $this->request('PUT', '/'.$id, $data);
  }
  public function delete($id)
  {
    return $this->request('DELETE', '/'.$id);
  }
  public function setSuccess($id, $data=[])
  {
    return $this->request('POST', '/'.$id.'/mark_as_successfull', $data);
  }
}
