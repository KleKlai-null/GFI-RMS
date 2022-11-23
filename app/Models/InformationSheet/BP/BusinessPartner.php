<?php

namespace App\Models\InformationSheet\BP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    use HasFactory;

    //change guarded
    protected $fillable = [
        'username',
        'status',
        'username',
        'remarks',
        'bp_type',
        'document_purpose',
        'status_update',
        'date_from',
        'date_to',
        'document_no',
        'date_processed',
        'registered_name',
        'trade_name',
        'billing_address',
        'shipping_address',
        'tax_id_no',
        'telephone_no',
        'fax_no',
        'mobile_no',
        'email_address',
        'website',
        'registration_date',
        'type_of_business',
        'currency',
        'business_partner_group',
        'payment_terms',
        'payment_methods',
        'bank_details',
        'control_accounts',
        'withholding_tax',
        'wtax_codes_allowed',
        'tax_group',
        'remarks_signatory',
        'full_name',
        'position',
        'date',
        'signature',
        'bank_name',
        'bank_address',
        'account_name',
        'account_no',
        'swift_code',
        'accouts_receivable_payable',
        'down_payment_clearing_account',
        'donw_payment_interim_account',
    ];

    protected static function boot()
    {
        parent::boot();
        BusinessPartner::creating(function($model) {
            $model->user_id = auth()->user()->id;
            $model->user_name = auth()->user()->username;
        });
    }

}
