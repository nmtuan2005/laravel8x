<?php
function ResponseApi($status, $data, $error, $message, $httpStatus)
{
    return response()->json([
        'status' => $status,
        'data' => $data,
        'error' => $error,
        'message' => $message,
    ], $httpStatus);
}
