<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalarySlip extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'employee_name',
        'salary_month',
        'basic_salary',
        'transport_allowances',
        'income_tax',
        'absent_deduction',
        'other_deduction',
        'other_allowances',
        // Add other fields as needed
    ];

    protected $casts = [
        'other_allowances' => 'array',
        'other_deduction' => 'array',
    ];

    /**
     * Get all of the comments for the SalarySlip
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
    
}
