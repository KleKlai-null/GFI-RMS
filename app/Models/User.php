<?php

namespace App\Models;

use App\Models\Form\Memorandum;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Models\Form\ServiceCall;
use App\Models\Form\WithdrawalSlip\Wsdm;
use App\Models\Form\WithdrawalSlip\Wsfa;
use App\Models\Form\WithdrawalSlip\Wsfg;
use App\Models\Form\WithdrawalSlip\Wsma;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Models\Form\WithdrawalSlip\Wsmro;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\UUID;
use Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'is_required_setup',
        'last_password_change_at',
        'setup_skip',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at'         => 'datetime',
        'last_password_change_at'   => 'datetime',
    ];

    protected $with =[
        'permissions',
        'roles'
    ];

    public function avatarUrl()
    {
        return 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }

    public function fullName()
    {
        return ucwords($this->first_name. ' ' . $this->last_name);
    }

    public function firstRole()
    {
        return ucwords(auth()->user()->getRoleNames()->first());
    }

    public function memorandums() : HasMany
    {
        return $this->hasMany(Memorandum::class);
    }

    public function servicecalls() : HasMany
    {
        return $this->hasMany(ServiceCall::class);
    }

    public function wsmis() : HasMany
    {
        return $this->hasMany(Wsmi::class);
    }

    public function wsmros() : HasMany
    {
        return $this->hasMany(Wsmro::class);
    }

    public function wsdms() : HasMany
    {
        return $this->hasMany(Wsdm::class);
    }

    public function wsfgs() : HasMany
    {
        return $this->hasMany(Wsfg::class);
    }

    public function wsfas() : HasMany
    {
        return $this->hasMany(Wsfa::class);
    }

    public function wsmas() : HasMany
    {
        return $this->hasMany(Wsma::class);
    }

    public function returnslips() : HasMany
    {
        return $this->hasMany(ReturnSlip::class);
    }
}
