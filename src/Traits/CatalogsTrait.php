<?php

namespace Pyrus\Traits;

trait CatalogsTrait
{
    public function getCatalog(int $catalog_id, ?string $callback_class = null): ?array
    {
        $path = "catalogs/{$catalog_id}";
        $this->response = $this->pyrus->get($path);
        return $this->getResponse($callback_class);
    }

    public function updateCatalog(int $catalog_id, $data, ?string $callback_class = null): ?array
    {
        $path = "catalogs/{$catalog_id}";
        $this->response = $this->pyrus->post($path, $data);
        return $this->getResponse($callback_class);
    }
}