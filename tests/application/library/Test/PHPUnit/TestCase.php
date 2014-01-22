<?php

namespace Test\PHPUnit;

class TestCase extends \PHPUnit_Framework_TestCase {

    /**
     * ÉèÖÃapplication
     */
    public function setApplication() {
        $application = new \Yaf\Application(APPLICATION_PATH . "/conf/application.ini");
        $application->bootstrap();
        \Yaf\Registry::set('application', $application);
    }

    /**
     * »ñÈ¡application
     * 
     * @return \Yaf\Application
     */
    public function getApplication() {
        $application = \Yaf\Registry::get('application');
        if (!$application) {
            $this->setApplication();
        }

        return \Yaf\Registry::get('application');
    }

}