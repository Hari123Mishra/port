<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable=["name",
    "email",
    "mobile",
    "image",
    "resume",
    "dob",
    "course",
    "university",
    "passed_out_year",
    "company_name",
    "from",
    "to",
    "project_name",
    "project_description",
    "project_link",
];
}
