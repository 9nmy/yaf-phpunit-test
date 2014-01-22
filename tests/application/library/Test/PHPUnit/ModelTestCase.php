<?php

namespace Test\PHPUnit;

require_once APPLICATION_PATH . '/tests/application/library/Test/PHPUnit/TestCase.php';

class ModelTestCase extends \Test\PHPUnit\TestCase {
    
	public function getModelObject($className){
		require_once APPLICATION_PATH . '/application/models/'.$className.'.php';
		return new $className();
	}
}