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

/**
 * Validate is a static class that can be used to validate form inputs from view layer
 *
 * @author Jario Rocha <rochajario@gmail.com>
 */

namespace rochajario\commonTools\src;

class Validate
{
    private static $output;

    public static function vString($input)
    {
        if (filter_var($input, FILTER_SANITIZE_STRING)) :
            self::$output = strip_tags($input);
        endif;
        return self::$output;
    }
    public static function vInt($input)
    {
        if (filter_var($input, FILTER_SANITIZE_NUMBER_INT)) :
            self::$output = (filter_var($input, FILTER_VALIDATE_INT));
        endif;
        return self::$output;
    }
}
