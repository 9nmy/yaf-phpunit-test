<?php

require_once APPLICATION_PATH . '/tests/application/library/Test/PHPUnit/ControllerTestCase.php';

class IndexTest extends \Test\PHPUnit\ControllerTestCase {

    public function testIndex() {
        $request = new \Yaf\Request\Simple("CLI", "Index", "Index", 'index');
        $response = $this->_application->getDispatcher()
                ->returnResponse(true)
                ->dispatch($request);
        $content = $response->getBody();
        $this->assertEquals('index phtml', $content);
    }

}