<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DrupalElasticsearch {

    static $query = array();
    static $lastNative = "";
    static $lastValue = "";
    static $lastNativeNext = 0;
    static $tables = array();
    
    static function becomeES($query) {
        /*self::newQuery();
        self::explainQuery($query);
        self::normalizeQuery();
        print_r(self::$query);*/
    }
    
    static function newQuery() {
        self::$query = array();
        self::$lastNative = "";
        self::$lastValue = "";    
        self::$lastNativeNext = 0;
        self::$tables = array();
    }
    
    static function normalizeQuery() {
        self::$lastNativeNext = 0;
        self::$lastNative = "";
        self::$lastValue = "";
        
        if (isset(self::$query['from'])) {
            self::$query['from'][0] = str_replace(array('{', '}'), '', self::$query['from'][0]);
            if(count(self::$query['from']) == 2) {
                self::$tables[self::$query['from'][1]] = self::$query['from'][0];
                unset(self::$query['from'][1]);
            } else {
                self::$tables['default'] = self::$query['from'][0];
            }
        }
        
        $joins = array();
        if(isset(self::$query['innerjoin'])) $joins = array_merge(self::$query['innerjoin'], $joins);
        if(isset(self::$query['rightjoin'])) $joins = array_merge(self::$query['rightjoin'], $joins);
        if(isset(self::$query['outerjoin'])) $joins = array_merge(self::$query['outerjoin'], $joins);
        if(isset(self::$query['leftjoin'])) $joins = array_merge(self::$query['leftjoin'], $joins);
        if(isset(self::$query['crossjoin'])) $joins = array_merge(self::$query['crossjoin'], $joins);
        
        foreach($joins as $join) {
            
        }
        
        if (isset(self::$query['select'])) {
            $total = count(self::$query['select'])-1;
            foreach(self::$query['select'] as $key => $part) {
                echo $key . "\n";
                echo $part . "\n";
                $table = self::$tables['default'];
                if(strstr($part, '.')) {
                    $parts = explode('.', $part);
                    $part = $parts[1];
                    $table = self::$tables[$parts[0]];
                }
                if(is_numeric($part)) {
                    // do nothing
                } else if(strstr($part, ',') && !self::$lastValue) {
                    $value = $table  . '.' . str_replace(',', '', $part);
                    self::$query['select'][$key] = $value . ' as ' . $value;
                    self::$lastNativeNext = 0;
                } else if(!self::$lastValue && $total == $key && self::$lastNativeNext == 0) {
                    $value = $table . '.' . $part;
                    self::$query['select'][$key] = $value . ' as ' . $value;
                } else if(self::$lastValue && $part == "as") {
                    unset(self::$query['select'][$key]);
                } else if(self::$lastValue) {
                    self::$query['select'][$key] = self::$lastValue . ' as ' . $part;
                    $value = $table . '.' . $part;https://github.com/moxiecode/plupload/ 
                   self::$lastValue = "";
                } else {
                    self::$lastValue = $table . '.' . $part;
                    unset(self::$query['select'][$key]);
                }
            }
        }
    }
    
    static function explainQuery($query) {
        $parts = explode(" ", str_replace("\n", " ", $query));
        foreach ($parts as $part) {
            if(!$part) continue;
            $lpart = trim(strtolower($part));
            switch($lpart) {
                case "update":
                case "select":
                case "from":
                case "where":
                case "join":
                case "by":
                case "table":
                case "straight_join":
                case "limit":
                    self::isNative($lpart);
                    break;
                case "group":
                case "inner":
                case "right":
                case "left":
                case "insert":
                case "outer":
                case "create":
                case "cross":
                case "order":
                    self::$lastNative = "";
                    self::isNativeNext($lpart);
                    break;
                case "natural":
                    self::$lastNative = "";
                    self::isNativeNext($lpart, 2);
                    break;
                default:
                    self::newValue($lpart);
                    break;
            }
        }       
    }
    
    static function isNative($name) {
        if (self::$lastNativeNext) {
            $name = self::$lastNative . $name;
            self::$lastNativeNext--;
        }
        self::$query[$name] = array();
        self::$lastNative = $name;
    }
    
    static function isNativeNext($name, $iterate = 1) {
        self::$lastNative = self::$lastNative . $name;
        self::$lastNativeNext = $iterate;
    }
    
    static function newValue($name) {
        self::$query[self::$lastNative][] = $name;
        self::$lastValue = $name;
    }

}
