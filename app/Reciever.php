<?php

namespace App;

use App\Mail\RecieverMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reciever extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];


    /**
     * Scope a query to search trough product table on the search param
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string  $search
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $search)
    {
        if ($search) {
            return  $query->where(function ($query) use ($search) {
                        $query->where('name', 'like', "%{$search}%")
                              ->orWhere('email', 'like', "%{$search}%");
            });
        }
    }

    /**
     * Send the mail to the reciever
     *
     * @param  App\Mailing  $mail
     * @return void
     */
    public function sendMailing($mail) {
        Mail::to($this)->queue(new RecieverMail($mail));
    }
}
