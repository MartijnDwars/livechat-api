<?php

namespace Gufy\LivechatApi\Models;

class Ticket extends Base
{
    public $baseUrl = 'tickets';
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
        return $this->request('PUT', '/'.$id.'/tags', $data);
    }
}
