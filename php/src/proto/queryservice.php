<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: queryservice.proto
//   Date: 2015-10-27 20:47:05

namespace queryservice {

  class QueryClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts) {
      parent::__construct($hostname, $opts);
    }
    /**
     * @param query\GetSessionIdRequest $input
     */
    public function GetSessionId(\query\GetSessionIdRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/queryservice.Query/GetSessionId', $argument, '\query\GetSessionIdResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\ExecuteRequest $input
     */
    public function Execute(\query\ExecuteRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/queryservice.Query/Execute', $argument, '\query\ExecuteResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\ExecuteBatchRequest $input
     */
    public function ExecuteBatch(\query\ExecuteBatchRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/queryservice.Query/ExecuteBatch', $argument, '\query\ExecuteBatchResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\StreamExecuteRequest $input
     */
    public function StreamExecute($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/queryservice.Query/StreamExecute', $argument, '\query\StreamExecuteResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\BeginRequest $input
     */
    public function Begin(\query\BeginRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/queryservice.Query/Begin', $argument, '\query\BeginResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\CommitRequest $input
     */
    public function Commit(\query\CommitRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/queryservice.Query/Commit', $argument, '\query\CommitResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\RollbackRequest $input
     */
    public function Rollback(\query\RollbackRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/queryservice.Query/Rollback', $argument, '\query\RollbackResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\SplitQueryRequest $input
     */
    public function SplitQuery(\query\SplitQueryRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/queryservice.Query/SplitQuery', $argument, '\query\SplitQueryResponse::deserialize', $metadata, $options);
    }
    /**
     * @param query\StreamHealthRequest $input
     */
    public function StreamHealth($argument, $metadata = array(), $options = array()) {
      return $this->_serverStreamRequest('/queryservice.Query/StreamHealth', $argument, '\query\StreamHealthResponse::deserialize', $metadata, $options);
    }
  }
}
