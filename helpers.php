<?php

/**
 * @return \App\Models\User|\Illuminate\Contracts\Auth\Authenticatable|null
 */
function getUser()
{
    return auth()->user();
}
