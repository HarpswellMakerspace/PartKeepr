<?php
namespace de\RaumZeitLabor\PartKeepr\Auth\Exceptions;

use de\RaumZeitLabor\PartKeepr\Util\SerializableException,
	de\RaumZeitLabor\PartKeepr\PartKeepr;

class UserDoesNotExistException extends SerializableException {
	public function __construct () {
		parent::__construct(PartKeepr::i18n("The given user doesn't exist. Maybe the user was already deleted."));
	}
}
?>