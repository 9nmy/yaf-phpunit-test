<?php

require_once APPLICATION_PATH . '/tests/application/library/Test/PHPUnit/ModelTestCase.php';

class UserModelTest extends \Test\PHPUnit\ModelTestCase {
    private static $_model = NULL;

    public function __construct() {
        if (!self::$_model)
            self::$_model = $this->getModelObject('UserModel');
    }


    public function testGetUserName() {
		$userId = 1;
		$result = self::$_model->getUserName($userId);
		$this->assertEquals('iceup', $result);

		$userId = 100;
		$result = self::$_model->getUserName($userId);
		$this->assertFalse($result);
    }
}