<?php
    use OpenApi\Annotations as OA;

    /**
 * @OA\Info(
 * version="1.0.0",
 * title="API de Login",
 * description="API para autenticação de usuários com JWT e opção de 'manter conectado'.",
 * @OA\Contact(
 * name="Seu Nome",
 * email="seu_email@exemplo.com"
 * )
 * )
 */

/**
 * @OA\Post(
 * path="/api/login",
 * summary="Autentica um usuário e gera um token JWT",
 * @OA\RequestBody(
 * required=true,
 * @OA\MediaType(
 * mediaType="application/json",
 * @OA\Schema(
 * @OA\Property(property="email", type="string", example="usuario@email.com"),
 * @OA\Property(property="password", type="string", example="minhasenha123"),
 * @OA\Property(property="remember_me", type="boolean", example=true)
 * )
 * )
 * ),
 * @OA\Response(
 * response=200,
 * description="Autenticação bem-sucedida",
 * @OA\JsonContent(
 * @OA\Property(property="message", type="string", example="Login successful."),
 * @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...")
 * )
 * ),
 * @OA\Response(
 * response=401,
 * description="Credenciais inválidas",
 * @OA\JsonContent(
 * @OA\Property(property="message", type="string", example="Invalid credentials.")
 * )
 * )
 * )
 */