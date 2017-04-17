<?php
if (! function_exists('anon')) {
    /**
     * Anonymize an IPv4 or IPv6 address.
     *
     * @param  string  $address
     * @return string
     */
    function anon($address)
    {
        $ipv4NetMask = "255.255.255.0";
        $ipv6NetMask = "ffff:ffff:ffff:ffff:0000:0000:0000:0000";

        $packedAddress = inet_pton($address);
        if (strlen($packedAddress) == 4) {
            return inet_ntop(inet_pton($address) & inet_pton($ipv4NetMask));
        } elseif (strlen($packedAddress) == 16) {
            return inet_ntop(inet_pton($address) & inet_pton($ipv6NetMask));
        } else {
            return "";
        }
    }
}

if (! function_exists('isDevelopment')) {
    /**
     * Check if we're not in Production
     * @return string
     */
    function isDevelopment()
    {
        return (env('APP_ENV') !== 'production' && env('APP_ENV') !== 'staging') ? 'true' : 'false';
    }
}

if (! function_exists('isProduction')) {
    /**
     * Check if we're in Production
     * @return string
     */
    function isProduction()
    {
        return (env('APP_ENV') === 'production' || env('APP_ENV') === 'staging') ? 'true' : 'false';
    }
}

if (! function_exists('titleCase')) {
    /**
     * Convert String to Title Case
     * @param $string
     * @return string
     */
    function titleCase($string)
    {
        $title = str_replace('-', ' ', $string);
        $title = str_replace('_', ' ', $title);

        $regx = '/<(code|var)[^>]*>.*?<\/\1>|<[^>]+>|&\S+;/';

        preg_match_all($regx, $title, $html, PREG_OFFSET_CAPTURE);

        $title = preg_replace($regx, '', $title);

        preg_match_all('/[\w\p{L}&`\'‘’"“\.@:\/\{\(\[<>_]+-? */u', $title, $m1, PREG_OFFSET_CAPTURE);

        foreach ($m1[0] as &$m2) {
            list ($m, $i) = $m2;

            $i = mb_strlen(substr ($title, 0, $i), 'UTF-8');

            $m = $i > 0 && mb_substr($title, max(0, $i-2), 1, 'UTF-8') !== ':' && !preg_match('/[\x{2014}\x{2013}] ?/u', mb_substr($title, max(0, $i-2), 2, 'UTF-8')) &&

            preg_match('/^(a(nd?|s|t)?|b(ut|y)|en|for|i[fn]|o[fnr]|t(he|o)|vs?\.?|via)[ \-]/i', $m)
                ? mb_strtolower($m, 'UTF-8')
                : (preg_match('/[\'"_{(\[‘“]/u', mb_substr($title, max(0, $i-1), 3, 'UTF-8'))
                    ? mb_substr($m, 0, 1, 'UTF-8') . mb_strtoupper(mb_substr($m, 1, 1, 'UTF-8'), 'UTF-8') . mb_substr($m, 2, mb_strlen($m, 'UTF-8')-2, 'UTF-8')
                    : (preg_match ('/[\])}]/', mb_substr($title, max (0, $i-1), 3, 'UTF-8')) || preg_match('/[A-Z]+|&|\w+[._]\w+/u', mb_substr($m, 1, mb_strlen($m, 'UTF-8')-1, 'UTF-8'))
                        ? $m
                        : mb_strtoupper (mb_substr($m, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($m, 1, mb_strlen($m, 'UTF-8'), 'UTF-8')
                    ));

            $title = mb_substr($title, 0, $i, 'UTF-8') . $m . mb_substr($title, $i + mb_strlen($m, 'UTF-8'), mb_strlen($title, 'UTF-8'), 'UTF-8');
        }

        foreach ($html[0] as &$tag) {
            $title = substr_replace ($title, $tag[0], $tag[1], 0);
        }

        // We have some Roman Numberals we need to consider too
        $title = preg_replace_callback('/\b(?=[LXIVCDM]+\b)([a-z]+)\b/i',
            function($matches) {
                return strtoupper($matches[0]);
            }, ucwords(strtolower($title))
        );

        $title = preg_replace('/\s+/', ' ', $title);
        return $title;
    }
}

if (! function_exists('truncateText')) {
    /**
     * Truncate Text
     * @param $string
     * @param $limit
     * @param string $break
     * @param string $pad
     * @return string
     */
    function truncateText($string, $limit, $break=" ", $pad=" ...")
    {
        // return with no change if string is shorter than $limit
        if(strlen($string) <= $limit) return $string;

        // is $break present between $limit and the end of the string?
        if(false !== ($breakpoint = strpos($string, $break, $limit))) {
            if($breakpoint < strlen($string) - 1) {
                $string = substr($string, 0, $breakpoint) . $pad;
            }
        }

        return $string;
    }
}

if (! function_exists('pageClass')) {
    /**
     * Convert Current Page to Class
     * @param string $url
     * @return string
     */
    function pageClass($url)
    {
        list($page, $sub) = array_pad(explode('/', $url), 2, '');
        $classes = array();

        if ($page) {
            $classes[] = 'page-' . $page;
        } else {
            $classes[] = 'page-home';
        }

        if ($sub) {
            $classes[] = 'sub-page-' . $sub;
        }

        return implode(' ', $classes);
    }
}

if (! function_exists('removeEmpty')) {

    function removeEmpty($data, $key_name)
    {
        $clean = array();
        $arr = (array) $data;
        foreach ($arr as $key => $item) {
            $arr = (array) $item;
            $check = trim($arr[$key_name]);

            if (isset($arr[$key_name]) && !empty($check) && strlen($check) > 0) {
                $clean[] = $item;
            }
        }

        return $clean;
    }
}

if (! function_exists('trackData')) {

    function trackData($category, $action, $label = null, $value = null)
    {
        $data = array('data-track');

        if ( !empty($category)) {
            $data[] = 'data-category="' . $category . '"';
        }

        if ( !empty($action)) {
            $data[] = 'data-action="' . $action . '"';
        }

        if ( !empty($label)) {
            $data[] = 'data-label="' . $label . '"';
        }

        if ( !empty($value)) {
            $data[] = 'data-value="' . $value . '"';
        }

        return join(' ', $data);
    }
}