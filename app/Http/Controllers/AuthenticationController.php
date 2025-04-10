<?php

namespace App\Http\Controllers;

use App\Dtos\UserDto;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function __construct(private readonly UserService $userService) {}



    public function register(RegisterUserRequest $register): JsonResponse
    {
        $userDto = UserDto::fromAPiFormRequest($register);
        $user =  $this->userService->createUser($userDto);
        return response()->json([
            'user' => $user,
            'success' => true,
            'message' => 'User created successfully',
        ]);
    }
}
