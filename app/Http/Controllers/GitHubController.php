<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Repository;

class GitHubController extends Controller
{
    public function sync(): string
    {
        $url = 'https://api.github.com/users/ferrer67/repos';

        $response = Http::get($url);

        if ($response->successful()) {
            $repos = $response->json();

            foreach ($repos as $repo) {
                Repository::updateOrCreate(
                    ['name' => $repo['name']], // o usar otro identificador único
                    [
                        'url' => $repo['url'],
                        'description' => $repo['description'],
                    ]
                );
            }

            return 'Repositorios sincronizados correctamente.';
        }

        return 'Error al obtener los datos de GitHub.';
    }
}
