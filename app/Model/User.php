<?php

App::uses('AppModel', 'Model');

class User extends AppModel
{
    public $validate = array(
        'first_name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'First Name is required'
            ),
            'alphaOnly' => array(
                'rule' => 'alphaOnly',
                'required' => true,
                'message' => 'First Name must contain alphabetic characters only'
            )
        ),
        'last_name' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Last name is required'
            ),
            'alphaOnly' => array(
                'rule' => 'alphaOnly',
                'required' => true,
                'message' => 'Last name must contain alphabetic characters only'
            )
        ),
        'number' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Contact number must be numeric'
            ),
            'length' => array(
                'rule' => array('minLength', 10),
                'message' => 'Contact number must be 10 digits long'
            ),
            'startWithNonZero' => array(
                'rule' => array('startWithNonZero'),
                'message' => 'Contact number must not start with 0'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Email is required'
            ),
            'email' => array(
                'rule' => 'email',
                'message' => 'Please enter a valid email address'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'This email is already taken'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Password is required'
            ),
            'minLength' => array(
                'rule' => array('minLength', 6),
                'message' => 'Password must be at least 6 characters long'
            )
        ),
        // 'confirm_password' => array(
        //     'required' => array(
        //         'rule' => 'notBlank',
        //         'message' => 'Please confirm your password'
        //     ),
        //     'match' => array(
        //         'rule' => array('compareFields', 'password'),
        //         'message' => 'Passwords do not match'
        //     )
        // ),
        'address' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Address is required'
            )
        ),
    );

    public function alphaOnly($check)
    {
        $value = array_values($check);
        $value = $value[0];
        return preg_match('/^[a-zA-Z]+$/', $value);
    }

    public function softDelete($id)
    {
        return $this->updateAll(
            array('deleted' => true),
            array('User.id' => $id)
        );
    }

    public function startWithNonZero($check)
    {
        $value = array_values($check);
        $contactNumber = $value[0];
        return $contactNumber[0] != '0';
    }


    public function compareFields($field = array(), $compare_field = null)
    {
        foreach ($field as $key => $value) {
            $v1 = $value;
            $v2 = $this->data[$this->name][$compare_field];
            if ($v1 !== $v2) {
                return false;
            } else {
                continue;
            }
        }
        return true;
    }
}
