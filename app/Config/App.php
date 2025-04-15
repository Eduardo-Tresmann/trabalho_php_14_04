<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    public string $baseURL = 'http://localhost:8080/';

    public array $allowedHostnames = [];

    public string $indexPage = '';

    public string $uriProtocol = 'REQUEST_URI';

    public bool $urlSuffix = false;

    public string $defaultLocale = 'en';

    public array $negotiateLocale = [];

    public array $supportedLocales = ['en'];

    public string $charset = 'UTF-8';

    public string $timeZone = 'UTC';

    public string $encryptionKey = '';

    public string $sessionDriver = 'CodeIgniter\Session\Handlers\FileHandler';

    public string $sessionCookieName = 'ci_session';

    public int $sessionExpiration = 7200;

    public string $sessionSavePath = '';

    public string $sessionMatchIP = false;

    public bool $sessionTimeToUpdate = 300;

    public bool $sessionRegenerateDestroy = false;

    public string $csrfTokenName = 'csrf_test_name';

    public string $csrfHeaderName = 'X-CSRF-TOKEN';

    public bool $csrfProtect = false;

    public bool $csrfRandomize = false;

    public string $csrfCookieName = 'csrf_cookie_name';

    public string $csrfExpire = 7200;

    public string $csrfSecure = false;

    public string $csrfSameSite = 'Lax';

    public string $proxyIPs = '';
}