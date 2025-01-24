<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    public function index(Request $request)
    {

        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        $query = Tour::query();

        if ($startDate && $endDate) {
            $query->whereBetween('start_date', [$startDate, $endDate]);
        }

        // Tüm turları al
        $tours = $query->get();

        // JSON formatında döndür
        return response()->json([
            'success' => true,
            'data' => $tours
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'location' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'price' => 'required|numeric',
        ]);

        $tour = Tour::create(array_merge(
            $request->all(),
            ['user_id' => Auth::id()]
        ));

        return response()->json($tour, 201);
    }

    public function update(Request $request, Tour $tour)
    {
        $this->authorize('update', $tour);

        $tour->update($request->only(['name', 'description', 'location', 'start_date', 'end_date', 'price']));

        return response()->json($tour);
    }

    public function destroy(Tour $tour)
    {
        $this->authorize('delete', $tour);

        $tour->delete();

        return response()->json(['message' => 'Tour deleted successfully']);
    }
}

