<?php

namespace Test\PHPUnit;

class TestCase extends \PHPUnit_Framework_TestCase {

    /**
     * 设置application
     */
    public function setApplication() {
        $application = new \Yaf\Application(APPLICATION_PATH . "/conf/application.ini");
        $application->bootstrap();
        \Yaf\Registry::set('application', $application);
    }

    /**
     * 获取application
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