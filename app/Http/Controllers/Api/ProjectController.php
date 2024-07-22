<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Metodo per ottenere tutti i progetti
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    // Metodo per ottenere un singolo progetto
    public function show($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return response()->json($project);
    }
}