<?php declare(strict_types=1);

/**
 * Renders the specified template with the provided data.
 *
 * @param string     $template The name of the template file to render.
 * @param array|null $data     An associative array of data to be used within the template. Optional.
 *
 * @return void
 * @throws Exception
 */
function render(string $template, ?array $data = []): void
{
    extract($data);

    $_tmpl = APP_TEMPLATES . DIRECTORY_SEPARATOR . $template;

    if (! file_exists($_tmpl))
        throw new Exception('Template not found: ' . $_tmpl);

    require $_tmpl;
}
