<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Scholarships",
 *     description="Manajemen Beasiswa"
 * )
 */
class ScholarshipController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/scholarships",
     *     tags={"Scholarships"},
     *     summary="Ambil semua beasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Response(response=200, description="Berhasil"),
     * )
     */
    public function index()
    {
        return response()->json(Scholarship::all());
    }

    /**
     * @OA\Post(
     *     path="/api/scholarships",
     *     tags={"Scholarships"},
     *     summary="Simpan beasiswa baru",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="description", type="string"),
     *             @OA\Property(property="provider", type="string"),
     *             @OA\Property(property="start_date", type="string", format="date"),
     *             @OA\Property(property="end_date", type="string", format="date"),
     *             @OA\Property(property="is_active", type="boolean")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Beasiswa disimpan")
     * )
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'provider' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'is_active' => 'boolean',
        ]);

        $scholarship = Scholarship::create($data);

        return response()->json($scholarship, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/scholarships/{id}",
     *     tags={"Scholarships"},
     *     summary="Ambil detail beasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Berhasil"),
     *     @OA\Response(response=404, description="Tidak ditemukan")
     * )
     */
    public function show($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        return response()->json($scholarship);
    }

    /**
     * @OA\Put(
     *     path="/api/scholarships/{id}",
     *     tags={"Scholarships"},
     *     summary="Update beasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(@OA\JsonContent(
     *         @OA\Property(property="name", type="string"),
     *         @OA\Property(property="description", type="string"),
     *         @OA\Property(property="provider", type="string"),
     *         @OA\Property(property="start_date", type="string", format="date"),
     *         @OA\Property(property="end_date", type="string", format="date"),
     *         @OA\Property(property="is_active", type="boolean")
     *     )),
     *     @OA\Response(response=200, description="Berhasil diupdate")
     * )
     */
    public function update(Request $request, $id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->update($request->all());

        return response()->json($scholarship);
    }

    /**
     * @OA\Delete(
     *     path="/api/scholarships/{id}",
     *     tags={"Scholarships"},
     *     summary="Hapus beasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=204, description="Berhasil dihapus")
     * )
     */
    public function destroy($id)
    {
        Scholarship::destroy($id);
        return response()->json(null, 204);
    }
}
