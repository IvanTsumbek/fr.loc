<?php

define("ROOT", dirname(__DIR__));
const DEBUG = 1;
const WWW = ROOT . '/public';
const CONFIG = ROOT . "/config";
const HELPERS = ROOT . "/helpers";
const APP = ROOT . "/app";
const CORE = ROOT . "/core";
const VIEWS = APP . "/Views";
const ERROR_LOGS = ROOT . '/tmp/error.log';
const CACHE = ROOT . "/tmp/cache";
const LAYOUT = 'default';
const PATH = 'https://fr.loc';
const DB_SETTINGS = [
    'driver' => 'mysql',
    'host' => '127.127.126.31',
    'database' => 'fr_loc',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'port' => '3306',
    'prefix' => '',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
];

const MAIL_SETTINGS = [
    'host' => 'sandbox.smtp.mailtrap.io', // smtp.gmail.com
    'auth' => true,
    'username' => 'ea0d1f25908d79', // your_email@gmail.com
    'password' => 'd7ccb9401fb745', // xxxx xxxx xxxx xxxx
    'secure' => 'tls', // ssl
    'port' => 587,
    'from_email' => '17925a9965-1e269c+user1@inbox.mailtrap.io', // your_email@gmail.com
    'from_name' => 'My Framework',
    'is_html' => true,
    'charset' => 'UTF-8',
    'debug' => 0, // 0 - 4
];

const PAGINATION_SETTINGS = [
    'per_page' => 3,
    'mid_size' => 2,
    'max_pages' => 7,
    'tpl' => 'pagination/base2',
];

const MULTILANGS = 1;

const LANGS = [
    'ru' => [
        'id' => 1,
        'code' => 'ru',
        'title' => 'Русский',
        'base' => 1,
    ],
    'en' => [
        'id' => 2,
        'code' => 'en',
        'title' => 'English',
        'base' => 0,
    ],
    'fr' => [
        'id' => 3,
        'code' => 'fr',
        'title' => 'France',
        'base' => 0,
    ],
];