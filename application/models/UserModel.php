<?php

class UserModel {

	/**
     * �����û���Ż�ȡ�û���
     * 
	 * @param int $userId
     * @return string
     */
	public function getUserName($userId) {
		if ($userId == 1) {
			return "iceup";
		}
		return false;
	}
}