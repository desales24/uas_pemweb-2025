<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="Students",
 *     description="Manajemen Mahasiswa"
 * )
 */
class StudentController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/students",
     *     tags={"Students"},
     *     summary="Ambil semua data mahasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Response(response=200, description="Berhasil")
     * )
     */
    public function index()
    {
        return response()->json(Student::with('scholarships')->get());
    }

    /**
     * @OA\Post(
     *     path="/api/students",
     *     tags={"Students"},
     *     summary="Tambah mahasiswa baru",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "nim"},
     *             @OA\Property(property="name", type="string", example="Budi"),
     *             @OA\Property(property="email", type="string", example="budi@mail.com"),
     *             @OA\Property(property="nim", type="string", example="123456789")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Mahasiswa disimpan")
     * )
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email|unique:students',
            'nim'   => 'required|string|unique:students',
        ]);

        $student = Student::create($data);
        return response()->json($student, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/students/{id}",
     *     tags={"Students"},
     *     summary="Lihat detail mahasiswa berdasarkan ID",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Berhasil"),
     *     @OA\Response(response=404, description="Tidak ditemukan")
     * )
     */
    public function show($id)
    {
        $student = Student::with('scholarships')->findOrFail($id);
        return response()->json($student);
    }

    /**
     * @OA\Put(
     *     path="/api/students/{id}",
     *     tags={"Students"},
     *     summary="Update data mahasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="Nama Baru"),
     *             @OA\Property(property="email", type="string", example="emailbaru@example.com"),
     *             @OA\Property(property="nim", type="string", example="987654321")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Data diperbarui")
     * )
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $data = $request->validate([
            'name'  => 'string',
            'email' => 'email|unique:students,email,' . $id,
            'nim'   => 'string|unique:students,nim,' . $id,
        ]);

        $student->update($data);
        return response()->json($student);
    }

    /**
     * @OA\Delete(
     *     path="/api/students/{id}",
     *     tags={"Students"},
     *     summary="Hapus mahasiswa",
     *     security={{"ApiKeyAuth": {}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=204, description="Berhasil dihapus")
     * )
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return response()->json(null, 204);
    }
}
