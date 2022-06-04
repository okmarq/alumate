<?php

if (!function_exists('unique_api_token')) {
    /**
     * Generate unique API token
     * @return mixed|string
     * @throws Exception
     */
    function unique_api_token()
    {
        $token = bin2hex(random_bytes(30));
        if (!is_null(\App\User::whereApiToken($token)->first())) {
            return call_user_func(unique_api_token());
        }

        return $token;
    }
}
