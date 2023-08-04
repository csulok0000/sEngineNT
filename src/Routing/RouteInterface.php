<?php

/**
 * 
 * @author Tibor Csik <csulok0000@gmail.com>
 */

namespace Csulok0000\sEngineNT\Routing;

interface RouteInterface {
    
    /**
     * Route nevének beállítása
     * 
     * @param string|null $name
     * @return static
     */
    public function setName(?string $name = null): static;
    
    /**
     * Route nevének lekérése
     * 
     * @return string
     */
    public function getame(): string;
}