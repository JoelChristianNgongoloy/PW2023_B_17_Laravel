<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    /**
     * Menampilkan daftar semua review.
     */
    public function index()
    {
        try {
            $reviews = Review::with('pemesanan')->get();
            return response()->json(['data' => $reviews], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /**
     * Menyimpan review baru.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pemesanan' => 'required|exists:pemesanans,id',
            'tulis_review' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $review = Review::create($request->all());
            return response()->json(['message' => 'Review added successfully', 'data' => $review], 201);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /**
     * Menampilkan detail review tertentu.
     */
    public function show($id)
    {
        try {
            $review = Review::with('pemesanan')->findOrFail($id);
            return response()->json(['data' => $review], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Review not found'], 404);
        }
    }

    /**
     * Memperbarui review yang ada.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tulis_review' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $review = Review::findOrFail($id);
            $review->update($request->all());
            return response()->json(['message' => 'Review updated successfully', 'data' => $review], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /**
     * Menghapus review.
     */
    public function destroy($id)
    {
        try {
            $review = Review::findOrFail($id);
            $review->delete();
            return response()->json(['message' => 'Review deleted successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Review not found'], 404);
        }
    }
}
