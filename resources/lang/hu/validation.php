<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | A(z) following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'A(z) :attribute must be accepted.',
    'accepted_if' => 'A(z) :attribute must be accepted when :other is :value.',
    'active_url' => 'A(z) :attribute is not a valid URL.',
    'after' => 'A(z) :attribute must be a date after :date.',
    'after_or_equal' => 'A(z) :attribute must be a date after or equal to :date.',
    'alpha' => 'A(z) :attribute must only contain letters.',
    'alpha_dash' => 'A(z) :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'A(z) :attribute must only contain letters and numbers.',
    'array' => 'A(z) :attribute must be an array.',
    'before' => 'A(z) :attribute must be a date before :date.',
    'before_or_equal' => 'A(z) :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'A(z) :attribute must be between :min and :max.',
        'file' => 'A(z) :attribute must be between :min and :max kilobytes.',
        'string' => 'A(z) :attribute must be between :min and :max characters.',
        'array' => 'A(z) :attribute must have between :min and :max items.',
    ],
    'boolean' => 'A(z) :attribute field must be true or false.',
    'confirmed' => 'A(z) :attribute confirmation does not match.',
    'current_password' => 'A(z) password is incorrect.',
    'date' => 'A(z) :attribute is not a valid date.',
    'date_equals' => 'A(z) :attribute must be a date equal to :date.',
    'date_format' => 'A(z) :attribute does not match the format :format.',
    'declined' => 'A(z) :attribute must be declined.',
    'declined_if' => 'A(z) :attribute must be declined when :other is :value.',
    'different' => 'A(z) :attribute and :other must be different.',
    'digits' => 'A(z) :attribute must be :digits digits.',
    'digits_between' => 'A(z) :attribute must be between :min and :max digits.',
    'dimensions' => 'A(z) :attribute has invalid image dimensions.',
    'distinct' => 'A(z) :attribute field has a duplicate value.',
    'email' => 'A(z) :attribute must be a valid email address.',
    'ends_with' => 'A(z) :attribute must end with one of the following: :values.',
    'enum' => 'A(z) selected :attribute is invalid.',
    'exists' => 'A(z) selected :attribute is invalid.',
    'file' => 'A(z) :attribute must be a file.',
    'filled' => 'A(z) :attribute field must have a value.',
    'gt' => [
        'numeric' => 'A(z) :attribute must be greater than :value.',
        'file' => 'A(z) :attribute must be greater than :value kilobytes.',
        'string' => 'A(z) :attribute must be greater than :value characters.',
        'array' => 'A(z) :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'A(z) :attribute must be greater than or equal to :value.',
        'file' => 'A(z) :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'A(z) :attribute must be greater than or equal to :value characters.',
        'array' => 'A(z) :attribute must have :value items or more.',
    ],
    'image' => 'A(z) :attribute must be an image.',
    'in' => 'A(z) selected :attribute is invalid.',
    'in_array' => 'A(z) :attribute field does not exist in :other.',
    'integer' => 'A(z) :attribute must be an integer.',
    'ip' => 'A(z) :attribute must be a valid IP address.',
    'ipv4' => 'A(z) :attribute must be a valid IPv4 address.',
    'ipv6' => 'A(z) :attribute must be a valid IPv6 address.',
    'mac_address' => 'A(z) :attribute must be a valid MAC address.',
    'json' => 'A(z) :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'A(z) :attribute must be less than :value.',
        'file' => 'A(z) :attribute must be less than :value kilobytes.',
        'string' => 'A(z) :attribute must be less than :value characters.',
        'array' => 'A(z) :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'A(z) :attribute must be less than or equal to :value.',
        'file' => 'A(z) :attribute must be less than or equal to :value kilobytes.',
        'string' => 'A(z) :attribute must be less than or equal to :value characters.',
        'array' => 'A(z) :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'A(z) :attribute must not be greater than :max.',
        'file' => 'A(z) :attribute must not be greater than :max kilobytes.',
        'string' => 'A(z) :attribute must not be greater than :max characters.',
        'array' => 'A(z) :attribute must not have more than :max items.',
    ],
    'mimes' => 'A(z) :attribute must be a file of type: :values.',
    'mimetypes' => 'A(z) :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'A(z) :attribute must be at least :min.',
        'file' => 'A(z) :attribute must be at least :min kilobytes.',
        'string' => 'A(z) :attribute must be at least :min characters.',
        'array' => 'A(z) :attribute must have at least :min items.',
    ],
    'multiple_of' => 'A(z) :attribute must be a multiple of :value.',
    'not_in' => 'A(z) selected :attribute is invalid.',
    'not_regex' => 'A(z) :attribute format is invalid.',
    'numeric' => 'A(z) :attribute must be a number.',
    'password' => 'A(z) password is incorrect.',
    'present' => 'A(z) :attribute field must be present.',
    'prohibited' => 'A(z) :attribute field is prohibited.',
    'prohibited_if' => 'A(z) :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'A(z) :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'A(z) :attribute field prohibits :other from being present.',
    'regex' => 'A(z) :attribute format is invalid.',
    'required' => 'A(z) :attribute field is required.',
    'required_if' => 'A(z) :attribute field is required when :other is :value.',
    'required_unless' => 'A(z) :attribute field is required unless :other is in :values.',
    'required_with' => 'A(z) :attribute field is required when :values is present.',
    'required_with_all' => 'A(z) :attribute field is required when :values are present.',
    'required_without' => 'A(z) :attribute field is required when :values is not present.',
    'required_without_all' => 'A(z) :attribute field is required when none of :values are present.',
    'same' => 'A(z) :attribute and :other must match.',
    'size' => [
        'numeric' => 'A(z) :attribute must be :size.',
        'file' => 'A(z) :attribute must be :size kilobytes.',
        'string' => 'A(z) :attribute must be :size characters.',
        'array' => 'A(z) :attribute must contain :size items.',
    ],
    'starts_with' => 'A(z) :attribute must start with one of the following: :values.',
    'string' => 'A(z) :attribute must be a string.',
    'timezone' => 'A(z) :attribute must be a valid timezone.',
    'unique' => 'A(z) :attribute has already been taken.',
    'uploaded' => 'A(z) :attribute failed to upload.',
    'url' => 'A(z) :attribute must be a valid URL.',
    'uuid' => 'A(z) :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | A(z) following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
