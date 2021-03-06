<?php
/**
 *  Copyright 2011 Wordnik, Inc.
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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class UserApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * saveUser
	 * create or update a user name by id
   * id, int: id (required)
   * name, string: name (required)
   * @return User
	 */

   public function saveUser($id, $name) {

  		//parse inputs
  		$resourcePath = "/user";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = '*/*';
      $headerParams['Content-Type'] = 'application/json';

      if($id != null) {
  		  $queryParams['id'] = $this->apiClient->toQueryValue($id);
  		}
  		if($name != null) {
  		  $queryParams['name'] = $this->apiClient->toQueryValue($name);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'User');
  		return $responseObject;

      }
  /**
	 * getUser
	 * read User by ID
   * id, int: id (required)
   * @return User
	 */

   public function getUser($id) {

  		//parse inputs
  		$resourcePath = "/user";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = '*/*';
      $headerParams['Content-Type'] = 'application/json';

      if($id != null) {
  		  $queryParams['id'] = $this->apiClient->toQueryValue($id);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'User');
  		return $responseObject;

      }
  
}

