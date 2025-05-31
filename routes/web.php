<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Repository;

Route::get('/', function () {
    return view('index');
});

Route::post('/github/webhook', function (Request $request) {
    $data = $request->all();

    // Validar que el evento sea "repository created"
    if ($request->header('X-GitHub-Event') === 'repository' && $data['action'] === 'created') {
        $repo = $data['repository'];

        Repository::updateOrCreate(
            ['github_id' => $repo['id']],
            [
                'name' => $repo['name'],
                'html_url' => $repo['html_url'],
                'description' => $repo['description'] ?? null,
            ]
        );
    }

    return response()->json(['status' => 'ok']);
});
