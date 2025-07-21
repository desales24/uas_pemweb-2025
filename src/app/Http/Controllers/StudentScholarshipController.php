<?php

namespace App\Http\Controllers;

use App\Models\StudentScholarship;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="StudentScholarships",
 *     description="Manajemen Beasiswa Mahasiswa"
 * )
 */
class StudentScholarshipController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/student-scholarships",
     *     tags={"StudentScholarships"},
     *     summary="Ambil semua data relasi mahasiswa-beasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Response(response=200, description="Berhasil")
     * )
     */
    public function index()
    {
        return response()->json(StudentScholarship::with(['student', 'scholarship'])->get());
    }

    /**
     * @OA\Post(
     *     path="/api/student-scholarships",
     *     tags={"StudentScholarships"},
     *     summary="Berikan beasiswa ke mahasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"student_id", "scholarship_id"},
     *             @OA\Property(property="student_id", type="integer", example=1),
     *             @OA\Property(property="scholarship_id", type="integer", example=2),
     *             @OA\Property(property="awarded_at", type="string", format="date", example="2025-07-21")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Beasiswa diberikan")
     * )
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => 'required|exists:students,id',
            'scholarship_id' => 'required|exists:scholarships,id',
            'awarded_at' => 'nullable|date',
        ]);

        $studentScholarship = StudentScholarship::create($data);
        return response()->json($studentScholarship, 201);
    }

    /**
     * @OA\Delete(
     *     path="/api/student-scholarships/{id}",
     *     tags={"StudentScholarships"},
     *     summary="Hapus relasi mahasiswa-beasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=204, description="Relasi dihapus")
     * )
     */
    public function destroy($id)
    {
        StudentScholarship::destroy($id);
        return response()->json(null, 204);
    }
}
