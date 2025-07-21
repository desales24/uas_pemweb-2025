<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="StudentScholarship",
 *     title="StudentScholarship",
 *     type="object",
 *     required={"student_id", "scholarship_id"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="student_id", type="integer", example=1),
 *     @OA\Property(property="scholarship_id", type="integer", example=2),
 *     @OA\Property(property="awarded_at", type="string", format="date", example="2025-07-21"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class StudentScholarship {}
