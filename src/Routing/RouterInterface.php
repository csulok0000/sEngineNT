<?php

/**
 * 
 * @author Tibor Csik <csulok0000@gmail.com>
 */

namespace Csulok0000\sEngineNT\Routing;

use Csulok0000\sEngineNT\Routing\RouteInterface;

interface RouterInterface {
    
    /**
     * 
     * [GET] route beállítása
     * 
     * @param string $uri 
     * @param callable $callback
     * @return RouteInterface
     */
    public function get(string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * [POST] route beállítása
     * 
     * @param string $uri
     * @param callable $callback
     * @return RouteInterface
     */
    public function post(string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * [PUT] route beállítása
     * 
     * @param string $uri
     * @param callable $callback
     * @return RouteInterface
     */
    public function put(string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * [PATCH] route beállítása
     * 
     * @param string $uri
     * @param callable $callback
     * @return RouteInterface
     */
    public function patch(string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * [DELETE] route beállítása 
     * 
     * @param string $uri
     * @param callable $callback
     * @return RouteInterface
     */
    public function delete(string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * [OPTIONS] route beállítása
     * 
     * @param string $uri
     * @param callable $callback
     * @return RouteInterface
     */
    public function options(string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * Route beállítása minden HTTP metódusra
     * 
     * @param string $uri
     * @param callable $callback
     * @return RouteInterface
     */
    public function any(string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * Route beállítása egy- vagy több HTTP metódusra
     * 
     * @param array $methods
     * @param string $uri
     * @param callable $callback
     * @return RouteInterface
     */
    public function match(array $methods, string $uri, callable $callback): RouteInterface;
    
    /**
     * 
     * Köztes(elő) feldolgozók, validálók és hitelesítők beállítása
     * 
     * @param array $middlewares
     * @param callable $callback
     */
    public function middleware(array $middlewares, callable $callback);
    
    /**
     * 
     * Közös előtaggal ellátott route-ok összegyűjtése
     * 
     * @param string $prefix
     * @param callable $callback
     */
    public function prefix(string $prefix, callable $callback);
    
    /**
     * 
     * Egyedi (sub)domainekhez kötött route-ok
     * 
     * @param string $domain
     * @param callable $callback
     */
    public function domain(string $domain, callable $callback);
    
    /**
     * 
     * Route-ok csoportba szedése.
     * Üres $options esetén az átláthatóságon kívül nincs hatása.
     * Beállítható vele egyszerre több csoport művelet is:
     *  - middleware
     *  - prefix
     *  - controller
     * 
     * @param RouteOption|array $options
     * @param callable $callback
     */
    public function group(RouteOption|array $options, callable $callback);
    
}
