<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TimeController extends Controller
{
    public function index(): JsonResponse
    {
        $times = Time::all();
        return response()->json($times);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:128',
            'estadio' => 'nullable|string|max:128',
            'cidade' => 'nullable|string|max:128'
        ]);

        $time = Time::create($validated);
        return response()->json($time, 201);
    }

    public function show(Time $time): JsonResponse
    {
        return response()->json($time);
    }

    public function update(Request $request, Time $time): JsonResponse
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:128',
            'estadio' => 'nullable|string|max:128',
            'cidade' => 'nullable|string|max:128'
        ]);

        $time->update($validated);
        return response()->json($time);
    }

    public function destroy(Time $time): JsonResponse
    {
        $time->delete();
        return response()->json(null, 204);
    }
}
