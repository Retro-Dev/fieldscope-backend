<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailTemplate extends Model
{
    protected $table = "mail_template";

    public static function getByIdentifier($identifier){

        $query = self::select('id', 'subject', 'hint', 'body', 'wildcards', 'from')
                ->whereNull('deleted_at');
        return $query->where('identifier', $identifier)
            ->first();
    }
}
