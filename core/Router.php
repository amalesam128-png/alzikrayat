<?php

class Router {
    private $routes = [];

    public function add($method, $path, $controller, $action = null) {
        if ($action === null && is_string($controller)) {
            $parts = explode('@', $controller);
            $controller = $parts[0];
            $action = $parts[1] ?? 'index';
        }

        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                $controllerName = $route['controller'];
                $actionName = $route['action'];

                if (class_exists($controllerName)) {
                    $controller = new $controllerName();
                    $id = $_GET['id'] ?? null;
                    
                    if ($id !== null && method_exists($controller, $actionName)) {
                        $controller->$actionName($id);
                    } else if (method_exists($controller, $actionName)) {
                        $controller->$actionName();
                    } else {
                        echo "Method $actionName not found in $controllerName";
                    }
                    return;
                }
            }
        }

        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
