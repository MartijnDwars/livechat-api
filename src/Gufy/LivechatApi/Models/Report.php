<?php

namespace Gufy\LivechatApi\Models;

class Report extends Base
{
    public $baseUrl = 'reports';
    public function totalChats($data = [])
    {
        return $this->request('GET', '/chats/total_chats', $data);
    }
    public function chatSources($data = [])
    {
        return $this->request('GET', '/chats/source', $data);
    }
    public function chatRatings($data = [])
    {
        return $this->request('GET', '/chats/ratings', $data);
    }
    public function chatRanking($data = [])
    {
        return $this->request('GET', '/chats/ratings/ranking', $data);
    }
    public function queuedVisitors($data = [])
    {
        return $this->request('GET', '/chats/queued_visitors', $data);
    }
    public function queueWaitingTimes($data = [])
    {
        return $this->request('GET', '/chats/queued_visitors/waiting_times', $data);
    }
    public function availability($data = [])
    {
        return $this->request('GET', '/availability', $data);
    }
    public function chattingTime($data = [])
    {
        return $this->request('GET', '/chats/chatting_time', $data);
    }
    public function chatFirstResponseTime($data = [])
    {
        return $this->request('GET', '/chats/first_response_time', $data);
    }
    public function chatResponseTime($data = [])
    {
        return $this->request('GET', '/chats/response_time', $data);
    }
    public function chatGoals($data = [])
    {
        return $this->request('GET', '/chats/goals', $data);
    }
    public function ticketFirstResponseTime($data = [])
    {
        return $this->request('GET', '/tickets/first_response_time', $data);
    }
    public function solvedTickets($data = [])
    {
        return $this->request('GET', '/tickets/solved_tickets', $data);
    }
    public function ticketResolutionTime($data = [])
    {
        return $this->request('GET', '/tickets/resolution_time', $data);
    }
    public function ticketSources($data = [])
    {
        return $this->request('GET', '/tickets/ticket_sources', $data);
    }
    public function ticketRatings($data = [])
    {
        return $this->request('GET', '/tickets/ratings', $data);
    }
    public function ticketRanking($data = [])
    {
        return $this->request('GET', '/tickets/ratings/ranking', $data);
    }
    public function greetingConvertions($data = [])
    {
        return $this->request('GET', '/greetings', $data);
    }
    public function chatOccupancy($data = [])
    {
        return $this->request('GET', '/chats/greetings', $data);
    }
}
