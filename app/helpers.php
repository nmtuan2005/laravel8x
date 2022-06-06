<?php
/**
 * @param boolean $status
 * @param array $data
 * @param array $error
 * @param string $message
 * @param int $httpStatus
 */
function ResponseApi($status, $data, $error, $message, $httpStatus)
{
    return response()->json([
        'status' => $status,
        'data' => $data,
        'error' => $error,
        'message' => $message,
    ], $httpStatus);
}
