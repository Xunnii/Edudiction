<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'siswa_id';
    protected $table = 'siswa';

    protected $fillable = [
        'name',
        'phone',
        'alamat',
        'kelas',
        'mataPelajaran',
        'tanggal',
        'pukul',
    ];

    public function scopeFilter(Builder $query, $request, array $filterableColumns, array $searchableColumns)
    {
        foreach ($filterableColumns as $column) {
            if ($request->filled($column)) {
                $query->where($column, $request->input($column));
            }
        }
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request, $searchableColumns) {
                foreach ($searchableColumns as $column) {
                    $q->orWhere($column, 'LIKE', '%' . $request->input('search') . '%');
                }
            });
        }
        return $query;
    }
}
