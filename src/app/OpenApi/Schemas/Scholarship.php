<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Scholarship",
 *     title="Scholarship",
 *     type="object",
 *     required={"name"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Beasiswa Prestasi"),
 *     @OA\Property(property="description", type="string", example="Untuk siswa berprestasi"),
 *     @OA\Property(property="provider", type="string", example="Kemendikbud"),
 *     @OA\Property(property="start_date", type="string", format="date", example="2025-08-01"),
 *     @OA\Property(property="end_date", type="string", format="date", example="2025-12-31"),
 *     @OA\Property(property="is_active", type="boolean", example=true),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class Scholarship {}
