<?php

namespace Swoole\Coroutine;

class PostgreSQL
{
    public $error;

    public $errCode;

    public $resultStatus;

    public $resultDiag;

    public $notices;

    public function __construct()
    {
    }

    /**
     * @param mixed $conninfo
     * @return bool
     */
    public function connect($conninfo)
    {
    }

    /**
     * @param mixed $string
     * @return string|false
     */
    public function escape($string)
    {
    }


    /**
     * @param mixed $string [required]
     * @return string|false
     */
    public function escapeLiteral($string)
    {
    }

    /**
     * @param mixed $string [required]
     * @return string|false
     */
    public function escapeIdentifier($string)
    {
    }

    /**
     * @param string $query
     * @return resource
     */
    public function query($query = null)
    {
    }

    /**
     * @param string $stmtname
     * @param string $query
     * @return mixed
     */
    public function prepare($stmtname, $query)
    {
    }

    /**
     * @param string $stmtname
     * @param array $pv_param_arr
     * @return resource
     */
    public function execute($stmtname, $pv_param_arr)
    {
    }

    /**
     * @param resource $query_result
     * @return int|false
     */
    public function affectedRows($query_result = null)
    {
    }

    /**
     * @param resource $query_result
     * @return int|false
     */
    public function numRows($query_result = null)
    {
    }

    /**
     * @param resource $query_result
     * @return int|false
     */
    public function fieldCount($query_result = null)
    {
    }

    /**
     * @param string $table_name
     * @return array
     */
    public function metaData($table_name)
    {
    }

    /**
     * @param resource $query_result
     * @param int|null $result_type
     * @return array|false
     */
    public function fetchAll($query_result, $result_type = null)
    {
    }

    /**
     * @param resource $query_result
     * @param int|null $row
     * @param string|null $class_name
     * @param array|null $ctor_params
     * @return object|false
     */
    public function fetchObject($query_result, $row = null, $class_name = null, $ctor_params = null)
    {
    }

    /**
     * @param resource $query_result
     * @param int|null $row
     * @return array|false
     */
    public function fetchAssoc($query_result, $row = null)
    {
    }

    /**
     * @param resource $query_result
     * @param int|null $row
     * @param int|null $result_type
     * @return array|false
     */
    public function fetchArray($query_result, $row = null, $result_type = null)
    {
    }

    /**
     * @param resource $query_result
     * @param int|null $row
     * @param int|null $result_type
     * @return array|false
     */
    public function fetchRow($query_result, $row = null, $result_type = null)
    {
    }

    public function __destruct()
    {
    }
}