<?php

use TightenCo\Jigsaw\Jigsaw;
use TightenCo\Jigsaw\Parsers\JigsawMarkdownParser;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

function changelog() {
    $path = __DIR__.'/CHANGELOG.md';

    return (new JigsawMarkdownParser)->parse(
        file_get_contents($path)
    );
}

$events->afterBuild(App\Listeners\GenerateSitemap::class);