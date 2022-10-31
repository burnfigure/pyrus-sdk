<?php

namespace Pyrus\Traits;

trait CatalogsTrait
{
    public function getCatalog(int $catalog_id, callable $callback = null): ?array
    {
        $path = "catalogs/{$catalog_id}";
        $this->response = $this->pyrus->get($path);
        return $this->getResponse($callback);
    }

    public function updateCatalog(int $catalog_id, $data, callable $callback = null): ?array
    {
        $path = "catalogs/{$catalog_id}";
        $this->response = $this->pyrus->post($path, $data);
        return $this->getResponse($callback);
    }
}