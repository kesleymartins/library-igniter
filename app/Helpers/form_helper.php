<?php

function form_with($baseUrl, $entity, $attributes)
{
    $url = $baseUrl . ($entity->id ? "/{$entity->id}" : '');

    return form_open($url, $attributes);
}
