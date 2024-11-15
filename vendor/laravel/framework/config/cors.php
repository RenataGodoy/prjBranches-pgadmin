return [

/*
|--------------------------------------------------------------------------
| Allowed Origins
|--------------------------------------------------------------------------
|
| You can specify which domains are allowed to send requests to your
| application. You can use "*" to allow any domain to send requests
| to your application.
|
*/

'allowed_origins' => [*],

'allowed_origins_patterns' => [],

/*
|--------------------------------------------------------------------------
| Allowed Methods
|--------------------------------------------------------------------------
|
| Specify which HTTP methods are allowed to be used when accessing your
| application.
|
*/

'allowed_methods' => ['*'], // Pode usar '*' para permitir todos os métodos

/*
|--------------------------------------------------------------------------
| Allowed Headers
|--------------------------------------------------------------------------
|
| Specify which HTTP headers are allowed to be sent by the client.
|
*/

'allowed_headers' => ['*'], // Pode usar '*' para permitir todos os cabeçalhos

/*
|--------------------------------------------------------------------------
| Exposed Headers
|--------------------------------------------------------------------------
|
| Specify which HTTP headers are exposed to the browser.
|
*/

'exposed_headers' => false,

/*
|--------------------------------------------------------------------------
| Max Age
|--------------------------------------------------------------------------
|
| Specify the maximum age (in seconds) for which the results of a preflight
| request can be cached by the browser.
|
*/

'max_age' => 0,

/*
|--------------------------------------------------------------------------
| Supports Credentials
|--------------------------------------------------------------------------
|
| If you are handling cookies or authentication, you may want to allow the
| browser to send credentials (cookies, authorization headers, etc) with
| the requests.
|
*/

'supports_credentials' => true,
];
