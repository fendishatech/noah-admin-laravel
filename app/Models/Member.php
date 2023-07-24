<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->hasOne(MemberAddress::class);
    }

    public function emergencyContact()
    {
        return $this->hasOne(MemberEC::class);
    }

    public function Edu()
    {
        return $this->hasOne(MemberEdu::class);
    }

    public function Id()
    {
        return $this->hasOne(MemberId::class);
    }

    public function job()
    {
        return $this->hasOne(MemberJob::class);
    }
}
