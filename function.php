<?php
  require 'db.php';

  /**
   * sanitize
   * Sanitizes data from a form submission
   * @param array $data
   * @return array
   */
  function sanitize ($data) {
    foreach ($data as $key => $value) {
      if ($key === 'phone') {
        $value = preg_replace('/[^0-9]/', '', $value);
      } 

      $data[$key] = htmlspecialchars(stripslashes(trim($value)));
    }

    return $data;
  }


  /**
   * validate
   * Validates data from a form submission
   * @param array $data
   * @return array $errors
   */
  function validate ($data) {
    $fields = ['title', 'email', 'date'];
    $errors = [];

    foreach ($fields as $field) {
      
      switch ($field) {
        case 'title':

          // update the conditions to match the requirements
          if (false) { // title cannot be empty
            $errors[$field] = 'Title is required';
          } else if (false) { // title must have at least 5 characters and no more than 50 characters
            $errors[$field] = 'Title is invalid';
          } 
          break;
        
        case 'email':
          
          // update the conditions to match the requirements
          if (false) { // email cannot be empty
            $errors[$field] = 'Email is required';
          } else if (false) { // email must be a valid email address
            $errors[$field] = 'Email is invalid';
          }
          break;
        
        case 'date':

          // update the conditions to match the requirements
          if (false) { // date cannot be empty
            $errors[$field] = 'Date is required';
          } else if (false) { // date must be a valid date: YYYY-MM-DD
            $errors[$field] = 'Date is invalid';
          }
          break;
      }
    }

    return $errors;
  }


  /**
   * getEvents
   * Gets all events from the database
   * @return array
   */
  function getEvents () {
    return [
      "id" => 1,
      "title" => "Event 1",
      "email" => "test@example.com",
      "date" => "2023-10-10"
    ];
  }

  
  /**
   * createEvent
   * Creates an event in the database
   * @param array $data
   * @return int
   */
  function createEvent ($data) {
    
  }


  /**
   * deleteEvent
   * Deletes an event from the database
   * @param int $id
   * @return int
   */
  function deleteEvent ($id) {
    
  }
