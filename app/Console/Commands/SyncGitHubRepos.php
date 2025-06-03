<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Repository;

class SyncGitHubRepos extends Command
{
//    nombre del comando
//    php artisan github:sync-repos
    protected $signature = 'github:sync-repos';
    protected $description = 'Comando para syncronizar datos de los repositorios';

    public function handle(): int
    {
        $url = 'https://api.github.com/users/ferrer67/repos';

        $response = Http::get($url);

        if (!$response->successful()) {
            $this->error('Error al obtener los datos de GitHub.');
            return 1;
        }

        $repos = $response->json();


        foreach ($repos as $repo) {
            if ($repo['description'] == null) {
                $repo['description'] = "Repositorio sin descripción.";
            }

            Repository::updateOrCreate(
                ['github_id' => $repo['id']],
                [
                    'name' => $repo['name'],
                    'url' => $repo['html_url'],
                    'description' => $repo['description'] ?? null,
                ]
            );
        }

        $this->info('Repositorios sincronizados correctamente.');
        return 0;
    }
}
