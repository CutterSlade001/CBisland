<?php declare(strict_types=1);

/**
 * Renders a template with the provided data and either returns or outputs the result.
 *
 * @param string     $template     The name of the template file to render.
 * @param array|null $data         An optional associative array of data to pass to the template.
 * @param bool|null  $returnOutput Whether to return the rendered output as a string (if true) or output it directly (if false).
 *
 * @return string|null The rendered template as a string if $returnOutput is true, or null if it is displayed directly.
 * @throws Exception
 */
function render(string $template, ?array $data = [], ?bool $returnOutput = false): string|null
{
    /**
     *
     *
     * @param string     $template
     * @param array|null $data
     * @return string
     */
    $_render = function (string $template, ?array $data = []): string {
        ob_start();
        extract($data);
        require $template;

        return ob_get_clean();
    };

    $_tmpl = APP_TEMPLATES . DIRECTORY_SEPARATOR . $template;

    if (!file_exists($_tmpl)) {
        throw new Exception('Template not found: ' . $_tmpl);
    }

    if ($returnOutput) {
        return $_render($_tmpl, $data);
    }

    print $_render($_tmpl, $data);

    return null;
}



function redirect(string $url, ?int $code = 302, ?bool $exit = true): void{
    http_response_code($code);
    header('Location: ' . $url);
    
    if ($exit) {
        exit();
    }
}


function isLoggedIn(): bool{
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        return false;
    };
    
    return true;
}
