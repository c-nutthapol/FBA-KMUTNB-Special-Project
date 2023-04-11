<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'ต้องยอมรับ :attribute',
    'accepted_if' => 'ต้องยอมรับ :attribute เมื่อ :other เป็น :value',
    'active_url' => ':attribute ไม่ใช่ URL ที่ถูกต้อง',
    'after' => ':attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal' => ':attribute ต้องเป็นวันที่หลังหรือเท่ากับ :date',
    'alpha' => ':attribute ต้องมีตัวอักษรเท่านั้น',
    'alpha_dash' => ':attribute ต้องประกอบด้วยตัวอักษร ตัวเลข ขีดกลาง และขีดล่างเท่านั้น',
    'alpha_num' => ':attribute ต้องมีตัวอักษรและตัวเลขเท่านั้น',
    'array' => ':attribute ต้องเป็นอาร์เรย์',
    'ascii' => ':attribute ต้องมีอักขระและสัญลักษณ์ที่เป็นตัวอักษรและตัวเลขคละกันแบบไบต์เดี่ยวเท่านั้น',
    'before' => ':attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => ':attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date',
    'between' => [
        'array' => ':attribute ต้องมีรายการระหว่าง :min และ :max',
        'file' => ':attribute ต้องอยู่ระหว่าง :min และ :max กิโลไบต์',
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max',
        'string' => ':attribute ต้องอยู่ระหว่าง :min และ :max ตัวอักษร',
    ],
    'boolean' => ':attribute ต้องเป็นจริงหรือเท็จ',
    'confirmed' => 'การยืนยัน :attribute ไม่ตรงกัน',
    'current_password' => 'รหัสผ่านไม่ถูกต้อง',
    'date' => ':attribute ไม่ใช่วันที่ที่ถูกต้อง',
    'date_equals' => ':attribute ต้องเป็นวันที่เท่ากับ :date',
    'date_format' => ':attribute ไม่ตรงกับรูปแบบ :format',
    'decimal' => ':attribute ต้องมี :decimal ตำแหน่งทศนิยม',
    'declined' => ':attribute ต้องถูกปฏิเสธ',
    'declined_if' => ':attribute จะต้องถูกปฏิเสธเมื่อ :other เป็น :value',
    'different' => ':attribute และ :other จะต้องแตกต่างกัน',
    'digits' => ':attribute ต้องเป็น :digits หลัก',
    'digits_between' => ':attribute ต้องอยู่ระหว่าง :min และ :max หลัก',
    'dimensions' => ':attribute มีขนาดภาพที่ไม่ถูกต้อง',
    'distinct' => 'ฟิลด์ :attribute มีค่าซ้ำกัน',
    'doesnt_end_with' => ':attribute อาจไม่ลงท้ายด้วยหนึ่งในสิ่งต่อไปนี้: :values',
    'doesnt_start_with' => ':attribute ต้องไม่ขึ้นต้นด้วยค่าใดค่าหนึ่งต่อไปนี้: :values',
    'email' => ':attribute ต้องเป็นที่อยู่อีเมลที่ถูกต้อง',
    'ends_with' => ':attribute ต้องลงท้ายด้วยหนึ่งในสิ่งต่อไปนี้: :values',
    'enum' => ':attribute ที่เลือกไม่ถูกต้อง',
    'exists' => ':attribute ที่เลือกไม่ถูกต้อง',
    'file' => ':attribute ต้องเป็นไฟล์',
    'filled' => 'ฟิลด์ :attribute ต้องมีค่า',
    'gt' => [
        'array' => ':attribute ต้องมีมากกว่า :value รายการ',
        'file' => ':attribute ต้องมากกว่า :value กิโลไบต์',
        'numeric' => ':attribute ต้องมากกว่า :value',
        'string' => ':attribute ต้องมากกว่า :value ตัวอักษร',
    ],
    'gte' => [
        'array' => ':attribute ต้องมี :value รายการขึ้นไป',
        'file' => ':attribute ต้องมากกว่าหรือเท่ากับ :value กิโลไบต์',
        'numeric' => ':attribute ต้องมากกว่าหรือเท่ากับ :value',
        'string' => ':attribute ต้องมากกว่าหรือเท่ากับ :value ตัวอักษร',
    ],
    'image' => ':attribute ต้องเป็นรูปภาพ',
    'in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array' => 'ฟิลด์ :attribute ไม่มีอยู่ใน :other',
    'integer' => ':attribute ต้องเป็นจำนวนเต็ม',
    'ip' => ':attribute ต้องเป็นที่อยู่ IP ที่ถูกต้อง',
    'ipv4' => ':attribute ต้องเป็นที่อยู่ IPv4 ที่ถูกต้อง',
    'ipv6' => ':attribute ต้องเป็นที่อยู่ IPv6 ที่ถูกต้อง',
    'json' => ':attribute ต้องเป็นสตริง JSON ที่ถูกต้อง',
    'lowercase' => ':attribute ต้องเป็นตัวพิมพ์เล็ก',
    'lt' => [
        'array' => ':attribute ต้องมีน้อยกว่า :value รายการ',
        'file' => ':attribute ต้องน้อยกว่า :value กิโลไบต์',
        'numeric' => ':attribute ต้องน้อยกว่า :value',
        'string' => ':attribute ต้องน้อยกว่า :value ตัวอักษร',
    ],
    'lte' => [
        'array' => ':attribute ต้องไม่มีมากกว่า :value รายการ',
        'file' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
        'numeric' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value',
        'string' => ':attribute ต้องน้อยกว่าหรือเท่ากับอักขระ :value',
    ],
    'mac_address' => ':attribute ต้องเป็นที่อยู่ MAC ที่ถูกต้อง',
    'max' => [
        'array' => ':attribute ต้องไม่มีมากกว่า :max รายการ',
        'file' => ':attribute ต้องไม่เกิน :max กิโลไบต์',
        'numeric' => ':attribute ต้องไม่เกิน :max',
        'string' => ':attribute ต้องไม่เกิน :max อักขระ',
    ],
    'max_digits' => ':attribute ต้องไม่เกิน :max หลัก',
    'mimes' => ':attribute ต้องเป็นไฟล์ประเภท: :values',
    'mimetypes' => ':attribute ต้องเป็นไฟล์ประเภท: :values',
    'min' => [
        'array' => ':attribute ต้องมีอย่างน้อย :min รายการ',
        'file' => ':attribute ต้องมีอย่างน้อย :min กิโลไบต์',
        'numeric' => ':attribute ต้องมีอย่างน้อย :min',
        'string' => ':attribute ต้องมีอักขระอย่างน้อย :min',
    ],
    'min_digits' => ':attribute ต้องมี :min หลักเป็นอย่างน้อย',
    'missing' => ':attribute ต้องขาดหายไป',
    'missing_if' => ':attribute ต้องขาดหายไปเมื่อ :other เป็น :value',
    'missing_unless' => ':attribute ต้องขาดหายไป เว้นแต่ :other คือ :value',
    'missing_with' => ':attribute ต้องขาดหายไปเมื่อ :values มีอยู่',
    'missing_with_all' => ':attribute ต้องขาดหายไปเมื่อ :values มีอยู่',
    'multiple_of' => ':attribute ต้องเป็นผลคูณของ :value',
    'not_in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'not_regex' => 'รูปแบบ :attribute ไม่ถูกต้อง',
    'numeric' => ':attribute ต้องเป็นตัวเลข',
    'password' => [
        'letters' => ':attribute ต้องมีอย่างน้อยหนึ่งตัวอักษร',
        'mixed' => ':attribute ต้องมีตัวพิมพ์ใหญ่และตัวพิมพ์เล็กอย่างน้อยหนึ่งตัว',
        'numbers' => ':attribute ต้องมีตัวเลขอย่างน้อยหนึ่งตัว',
        'symbols' => ':attribute ต้องมีอย่างน้อยหนึ่งสัญลักษณ์',
        'uncompromised' => ':attribute ที่ระบุปรากฏในการรั่วไหลของข้อมูล โปรดเลือก :attribute อื่น',
    ],
    'present' => ':attribute จะต้องมีอยู่',
    'prohibited' => ':attribute เป็นสิ่งต้องห้าม',
    'prohibited_if' => ' :attribute ไม่ได้รับอนุญาตเมื่อ :other คือ :value',
    'prohibited_unless' => 'ห้ามใช้ :attribute เว้นแต่ว่า :other จะอยู่ใน :values',
    'prohibits' => ':attribute ห้าม :other ไม่ให้มีอยู่',
    'regex' => 'รูปแบบ :attribute ไม่ถูกต้อง',
    'required' => 'โปรดระบุข้อมูล :attribute',
    'required_array_keys' => ':attribute ต้องมีรายการสำหรับ: :values',
    'required_if' => ':attribute จำเป็นเมื่อ :other เป็น :value',
    'required_if_accepted' => ':attribute จำเป็นเมื่อ :other ได้รับการยอมรับ',
    'required_unless' => ':attribute จำเป็น ยกเว้น :other อยู่ใน :values',
    'required_with' => ':attribute จำเป็นเมื่อ :values มีอยู่',
    'required_with_all' => ':attribute จำเป็นเมื่อ :values มีอยู่',
    'required_without' => ':attribute จำเป็นเมื่อ :values ไม่มีอยู่',
    'required_without_all' => ':attribute จำเป็นเมื่อไม่มี :values อยู่',
    'same' => ':attribute และ :other ต้องตรงกัน',
    'size' => [
        'array' => ':attribute ต้องมี :size รายการ',
        'file' => ':attribute ต้องเป็น :size กิโลไบต์',
        'numeric' => ':attribute ต้องเป็น :size',
        'string' => ':attribute ต้องเป็น :size ตัวอักษร',
    ],
    'starts_with' => ':attribute ต้องเริ่มต้นด้วยหนึ่งในสิ่งต่อไปนี้: :values',
    'string' => ':attribute ต้องเป็นสตริง',
    'timezone' => ':attribute ต้องเป็นเขตเวลาที่ถูกต้อง',
    'unique' => ':attribute ได้ถูกนำไปใช้แล้ว',
    'uploaded' => ':attribute ล้มเหลวในการอัปโหลด',
    'uppercase' => ':attribute ต้องเป็นตัวพิมพ์ใหญ่',
    'url' => ':attribute ต้องเป็น URL ที่ถูกต้อง',
    'ulid' => ':attribute ต้องเป็น ULID ที่ถูกต้อง',
    'uuid' => ':attribute ต้องเป็น UUID ที่ถูกต้อง',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
