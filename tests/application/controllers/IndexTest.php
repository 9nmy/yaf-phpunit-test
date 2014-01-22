<?php

require_once APPLICATION_PATH . '/tests/application/library/Test/PHPUnit/ControllerTestCase.php';

class IndexTest extends \Test\PHPUnit\ControllerTestCase {

    public function testIndex() {
        $request = new \Yaf\Request\Simple("CLI", "Index", "Index", 'index');
        $response = $this->getApplication()->getDispatcher()
                ->returnResponse(true)
                ->dispatch($request);
		$this->assertEquals('index phtml',$response->getBody());
    }
}