<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Student",
 *     title="Student",
 *     type="object",
 *     required={"name", "email", "nim"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Budi"),
 *     @OA\Property(property="email", type="string", example="budi@example.com"),
 *     @OA\Property(property="nim", type="string", example="123456789"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class Student {}
