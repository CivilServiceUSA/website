<?php
if (! function_exists('meta')) {
    /**
     * Return the meta value for a given key
     *
     * @param  string  $key
     * @return mixed
     */
    function meta($key)
    {
        return app(CivilServices\SiteMetaData::class)->get($key);
    }
}

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