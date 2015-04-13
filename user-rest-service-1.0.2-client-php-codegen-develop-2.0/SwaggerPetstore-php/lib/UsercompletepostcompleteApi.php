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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace SwaggerPetstore;


class UsercompletepostcompleteApi {

  function __construct($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * saveUserComplete
   *
   * create or update a user name by id
   *
   * @param int $id id (required)
   * @param string $user user (required)
   * @return User
   */
   public function saveUserComplete($id, $user) {

      // parse inputs
      $resourcePath = "/user_complete_post_complete";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = '*/*';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array('application/json',);
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($id !== null) {
        $queryParams['id'] = $this->apiClient->toQueryValue($id);
      }// query params
      if($user !== null) {
        $queryParams['user'] = $this->apiClient->toQueryValue($user);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'User');
  		return $responseObject;
  }
  


}