<?php 
function make($url)
{
    return parse_url($url);
}
function setScheme(&$data, $scheme)
{
    $data['scheme'] = $scheme;
}
function getScheme($data)
{
    return $data['scheme'];
}
function setHost(&$data, $host)
{
    $data['host'] = $host;
}
function getHost($data)
{
    return $data['host'];
}
function setPath(&$data, $path)
{
    $data['path'] = $path;
}
function getPath($data)
{
    return $data['path'];
} 
function setQueryParam(&$data, $key, $value)
{
    parse_str($data['query'], $query);
    $query[$key] = $value;
    $data['query'] = http_build_query($query);
}
function getQueryParam($data, $paramName, $default = null)
{
    parse_str($data['query'], $query);
    return array_key_exists($paramName, $query) ? $query[$paramName] : $default;
}
function toString(&$data)
{   
    $scheme = $data['scheme'] ?? $data['scheme'] = null;
    $host = $data['host'] ?? $data['host'] = null;
    $path = $data['path'] ?? $data['path'] = null;
    $query = $data['query'] ?? $data['query'] = null;
    return isset($data['query']) ? "{$scheme}://{$host}{$path}?{$query}" : "{$scheme}://{$host}{$path}";
}

$url = make('ht.io/community?q=low');
print ('ht.io/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";
print ('https' === getScheme($url)) ? "true" : "false";
print "<br>";
print ('ht.io' === getHost($url)) ? "true" : "false";
print "<br>";
print ('/community' === getPath($url)) ? "true" : "false";
print "<br>";

setScheme($url, 'http');
print ('http://ht.io/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setHost($url, 'code-basics.com');
print ('http://code-basics.com/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setScheme($url, 'https');
setHost($url, 'ht.io');
setPath($url, '/404');
print ('https://ht.io/404?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'page', 5);
print ('https://ht.io/404?q=low&page=5' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', 'high');
print ('https://ht.io/404?q=high&page=5' === toString($url)) ? "true" : "false";
print "<br>";
print ('high' === getQueryParam($url, 'q')) ? "true" : "false";
print "<br>";
print ('guest' === getQueryParam($url, 'user', 'guest')) ? "true" : "false";
print "<br>";
print is_null(getQueryParam($url, 'b')) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', null);
print ('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', null);
print ('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
print "<br>";

$url = make('https://ht.io/community');
print ('https://ht.io/community' === toString($url)) ? "true" : "false";
print "<br>";

$url = make('https://ht.io/?q=high&page=5');
print ('https://ht.io/?q=high&page=5' === toString($url)) ? "true" : "false";
print "<br>";