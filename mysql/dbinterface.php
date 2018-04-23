<?php

require 'DBMS.php';

class DBInterface {

    ##########################################################
    #                                                        #
    #                 DEFINED USER FUNCTIONS                 #
    #                                                        #
    ##########################################################

    public function insertUserData($userData) {

    }

    public function fetchUserData($a0) {
        if (!is_array($a0)) return;

        $dataType = null;

        switch ($a0[0]) {
            case 'uuid':
                $dataType = 'uuid';
                break;
            case 'steamid':
                $dataType = 'steamid';
                break;
            default: break;
        }

        $userData = array('uuid', 'personaname', 'avatar');
        $row = $this->fetchMultipleDataTypes($userData, 'account', $dataType, $a0[1]);

        return $row;
    }

    public function userExists($steamId) {
        if (!isset($_SESSION['STEAMAUTH'])) return;
        $row = $this->fetchDataRow('steamid', 'account', 'steamid', $steamId);
        return $row != null ? true : false;
    }

    ##########################################################
    #                                                        #
    #               PREDEFINED FETCH FUNCTIONS               #
    #                                                        #
    ##########################################################

    private function fetchDataRow($a0, $a1, $a2, $a3) {
        $sql = "SELECT $a0 FROM $a1 WHERE $a2 = '$a3'";
        if ($result = DBMS::getInstance()->getConnection()->query($sql)) {
            $row = $result->fetch_row()[0];

            $result->close();
            return $row;
        } else {
            echo DBMS::getInstance()->getConnection()->error;
        }
    }

    #   Fetch datatype with multiple rows as multidimensional array
    #   @param a0 is select type, define as string
    #   @param a1 database table
    #   @param a2 in where clause
    #   @param a3 value
    private function fetchDataRows($a0, $a1, $a2, $a3) {
        $sql = "SELECT $a0 FROM $a1 WHERE $a2 = '$a3'";
        if ($result = DBMS::getInstance()->getConnection()->query($sql)) {
            $data[][] = array();
            $itr = 0;

            while ($row = $result->fetch_array(MYSQLI_NUM)) {
                $row_size = count($row); // count does faster calculations than sizeof alias
                for ($i = 0; $i < $row_size; $i++) {
                    $data[$itr][$i] = $row[$i];
                }
                $itr++;
            }

            $result->close();
            return $data;
        }
    }

    #   Fetch a row with multiple datatypes as array
    #   @param a0 is select type, needs to be defined as array()
    #   @param a1 database table
    #   @param a2 in where clause
    #   @param a3 value
    private function fetchMultipleDataTypes($a0, $a1, $a2, $a3) {
        $sql = "SELECT " . implode(', ', $a0) . " FROM $a1 WHERE $a2 = '$a3'";
        if ($result = DBMS::getInstance()->getConnection()->query($sql)) {

            $data[] = array();
            $dataRows = count($a0);

            while ($row = $result->fetch_array(MYSQLI_NUM)) {
                for ($i = 0; $i < $dataRows; $i++) {
                    $data[$i] = $row[$i];
                }
            }

            $result->close();
            return $data;
        }
    }
}
