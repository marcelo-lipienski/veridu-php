<?php

namespace Veridu\SDK\Exception;

use Veridu\Exception\Exception;

class APIError extends Exception {
	protected $message = 'The API returned an error.';
}