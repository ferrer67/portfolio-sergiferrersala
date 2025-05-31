<?php

// app/Models/Job.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Si tu tabla se llama 'jobs', no necesitas especificar nada más
    // Si no, puedes especificarla así:
    // protected $table = 'nombre_de_tu_tabla';

    // Campos que pueden ser asignados masivamente (opcional)
    protected $fillable = [
        'title',
        'description',
        'salary',
        'employer_id', // Si tienes relaciones
    ];

    // Relación con el modelo Employer (si existe)
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
