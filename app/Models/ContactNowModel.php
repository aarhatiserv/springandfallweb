<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactNowModel extends Model
{
    protected $table = 'contact_now_leads';
    protected $allowedFields = ['name', 'email', 'phone', 'service', 'country', 'message'];

    public function getLeads($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
}