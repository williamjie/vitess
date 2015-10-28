<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: mysqlctl.proto
//   Date: 2015-10-27 20:47:03

namespace mysqlctl {

  class StartRequest extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.StartRequest');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class StartResponse extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.StartResponse');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class ShutdownRequest extends \DrSlump\Protobuf\Message {

    /**  @var boolean */
    public $wait_for_mysqld = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.ShutdownRequest');

      // OPTIONAL BOOL wait_for_mysqld = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "wait_for_mysqld";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <wait_for_mysqld> has a value
     *
     * @return boolean
     */
    public function hasWaitForMysqld(){
      return $this->_has(1);
    }
    
    /**
     * Clear <wait_for_mysqld> value
     *
     * @return \mysqlctl\ShutdownRequest
     */
    public function clearWaitForMysqld(){
      return $this->_clear(1);
    }
    
    /**
     * Get <wait_for_mysqld> value
     *
     * @return boolean
     */
    public function getWaitForMysqld(){
      return $this->_get(1);
    }
    
    /**
     * Set <wait_for_mysqld> value
     *
     * @param boolean $value
     * @return \mysqlctl\ShutdownRequest
     */
    public function setWaitForMysqld( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace mysqlctl {

  class ShutdownResponse extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.ShutdownResponse');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class RunMysqlUpgradeRequest extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.RunMysqlUpgradeRequest');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class RunMysqlUpgradeResponse extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'mysqlctl.RunMysqlUpgradeResponse');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

namespace mysqlctl {

  class MysqlCtlClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts) {
      parent::__construct($hostname, $opts);
    }
    /**
     * @param mysqlctl\StartRequest $input
     */
    public function Start(\mysqlctl\StartRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/mysqlctl.MysqlCtl/Start', $argument, '\mysqlctl\StartResponse::deserialize', $metadata, $options);
    }
    /**
     * @param mysqlctl\ShutdownRequest $input
     */
    public function Shutdown(\mysqlctl\ShutdownRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/mysqlctl.MysqlCtl/Shutdown', $argument, '\mysqlctl\ShutdownResponse::deserialize', $metadata, $options);
    }
    /**
     * @param mysqlctl\RunMysqlUpgradeRequest $input
     */
    public function RunMysqlUpgrade(\mysqlctl\RunMysqlUpgradeRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/mysqlctl.MysqlCtl/RunMysqlUpgrade', $argument, '\mysqlctl\RunMysqlUpgradeResponse::deserialize', $metadata, $options);
    }
  }
}
