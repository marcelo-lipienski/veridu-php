<?php

namespace Veridu\Signature\Exception;

use Veridu\Exception\Exception;

class NonceMismatch extends Exception {
	protected $message = 'Request and response nonce mismatch.';
}