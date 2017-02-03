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
