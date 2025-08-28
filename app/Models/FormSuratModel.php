<?php

namespace App\Models;

use App\Models\SuratModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormSuratModel extends Model
{
    use HasFactory;

    protected $table = 'form_surat';

    protected $fillable = [
        'form_id',
        'name',
        'label',
        'type',
        'required',
        'options',
    ];

    protected $casts = [
        'required' => 'boolean',
        'options' => 'array',
    ];

    public function subSuratType(): BelongsTo
    {
        return $this->belongsTo(SubSuratTypeModel::class, 'form_id');
    }

    public function surat(): BelongsTo
    {
        return $this->belongsTo(SuratModel::class, 'sub_surat_type_id');
    }
}