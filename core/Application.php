<?php

namespace PHPFramework;

use Illuminate\Database\Capsule\Manager as Capsule;

class Application
{
    protected string $uri;
    public Request $request;
    public Response $response;
    public Router $router;
    public View $view;
    public Database $db;
    public Session $session;
    public Cache $cache;

    public static Application $app;
    protected array $container = [];

    public function __construct()
    {
        self::$app = $this;
        // $this->uri = $_SERVER['QUERY_STRING'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->request = new Request($this->uri);
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->view = new View(LAYOUT);
        $this->session = new Session();
        $this->cache = new Cache;
        $this->generateCsrfToken();
        // $this->setDbConnection();
        $this->db = new Database();
        Auth::setUser();
    }

    public function run(): void
    {
        // $this->cache->remove('/users');
        // $page = $this->cache->get($this->request->rawUri);
        // if (!$page) {
        //     $page = $this->router->dispatch();
        //     $this->cache->set($this->request->rawUri, $page);
        // }

        // echo $page;
        echo $this->router->dispatch();
    }

    public function generateCsrfToken(): void
    {
        if (!session()->has('csrf_token')) {
            session()->set('csrf_token', md5(uniqid(mt_rand(), true)));
        }
    }

    // public function setDbConnection()
    // {
    //     $capsule = new Capsule;
    //     $capsule->addConnection(DB_SETTINGS);
    //     $capsule->setAsGlobal();
    //     $capsule->bootEloquent();
    // }

    public function set($key, $value): void
    {
        $this->container[$key] = $value;
    } 
    
    public function get($key, $defaut = null)
    {
        return $this->container[$key] ?? $defaut;
    } 
}
