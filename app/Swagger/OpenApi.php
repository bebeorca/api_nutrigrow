<?php

/**
 * @OA\Info(
 *     title="Nutrigrow API",
 *     version="1.0.0",
 *     description="API untuk manajemen child dan user"
 * )
 * 
 * @OA\Server(
 *     url="http://localhost:8000/api",
 *     description="Local API Server"
 * )
 * 
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 */