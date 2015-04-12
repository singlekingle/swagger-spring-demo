<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */



/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace SwaggerPetstore\models;

use \ArrayAccess;

class ShowcaseDatatypePrimitives implements ArrayAccess {
  static $swaggerTypes = array(
      'single_byte' => 'string',
      'tiny_number' => 'int',
      'counter' => 'int',
      'id' => 'int',
      'budget_float' => 'int',
      'budget' => 'double',
      'deleted' => 'boolean',
      'single_character' => 'string'
  );

  static $attributeMap = array(
      'single_byte' => 'singleByte',
      'tiny_number' => 'tinyNumber',
      'counter' => 'counter',
      'id' => 'id',
      'budget_float' => 'budgetFloat',
      'budget' => 'budget',
      'deleted' => 'deleted',
      'single_character' => 'singleCharacter'
  );

  
  public $single_byte; /* string */
  public $tiny_number; /* int */
  public $counter; /* int */
  public $id; /* int */
  public $budget_float; /* int */
  public $budget; /* double */
  public $deleted; /* boolean */
  public $single_character; /* string */

  public function __construct(array $data = null) {
    $this->single_byte = $data["single_byte"];
    $this->tiny_number = $data["tiny_number"];
    $this->counter = $data["counter"];
    $this->id = $data["id"];
    $this->budget_float = $data["budget_float"];
    $this->budget = $data["budget"];
    $this->deleted = $data["deleted"];
    $this->single_character = $data["single_character"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}


