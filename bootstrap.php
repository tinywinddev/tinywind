<?php

use TightenCo\Jigsaw\Jigsaw;
use TightenCo\Jigsaw\Parsers\JigsawMarkdownParser;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

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