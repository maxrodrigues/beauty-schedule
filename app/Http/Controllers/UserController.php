<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UserServiceContract;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserServiceContract $userService)
    {
        $this->userService = $userService;
    }

    public function index(): JsonResponse
    {
        try {
            $users = $this->userService->getAllUsers();
            return new JsonResponse([
                "result" => $users,
            ], 200);
        } catch (Exception $e) {
            return new JsonResponse([
                "message" => $e->getMessage(),
            ], 400);
        }
    }
}
