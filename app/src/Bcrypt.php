<?php

/*
 * The MIT License
 *
 * Copyright 2021 Jario Rocha.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace rochajario\commonTools\src;

class Bcrypt
{
    private static $output;
    private static $status;

    public static function encrypt($input)
    {
        $cost = '08';
        $salt = bin2hex(random_bytes(13));
        self::$output = (crypt($input, '$2a$' . $cost . '$' . $salt . '$'));
        return self::$output;
    }
    public static function validate($input, $hash)
    {
        if (crypt($input, $hash) === $hash) :
            self::$status = true;
        else :
            self::$status = false;
        endif;
        return self::$status;
    }
}
