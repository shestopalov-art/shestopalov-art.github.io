<?php

require_once 'vendor/autoload.php';

$container = Illuminate\Container\Container::getInstance();

// we have to bind our app class to the interface
// as the blade compiler needs the `getNamespace()` method to guess Blade component FQCNs
$container->instance(\Illuminate\Contracts\Foundation\Application::class, $container);

// Configuration
// Note that you can set several directories where your templates are located
$pathsToTemplates = [__DIR__ . '/templates'];
$pathToCompiledTemplates = __DIR__ . '/compiled';

// Dependencies
$filesystem = new \Illuminate\Filesystem\Filesystem;
$eventDispatcher = new \Illuminate\Events\Dispatcher($container);

// Create View Factory capable of rendering PHP and Blade templates
$viewResolver = new \Illuminate\View\Engines\EngineResolver;
$bladeCompiler = new \Illuminate\View\Compilers\BladeCompiler($filesystem, $pathToCompiledTemplates);

$viewResolver->register('blade', function () use ($bladeCompiler) {
    return new \Illuminate\View\Engines\CompilerEngine($bladeCompiler);
});

$viewFinder = new \Illuminate\View\FileViewFinder($filesystem, $pathsToTemplates);
$viewFactory = new \Illuminate\View\Factory($viewResolver, $viewFinder, $eventDispatcher);
$viewFactory->setContainer($container);

\Illuminate\Support\Facades\Facade::setFacadeApplication($container);

$container->instance(\Illuminate\Contracts\View\Factory::class, $viewFactory);

$container->alias(
    \Illuminate\Contracts\View\Factory::class,
    (new class extends \Illuminate\Support\Facades\View {
        public static function getFacadeAccessor() { return parent::getFacadeAccessor(); }
    })::getFacadeAccessor()
);

$container->instance(\Illuminate\View\Compilers\BladeCompiler::class, $bladeCompiler);
$container->alias(
    \Illuminate\View\Compilers\BladeCompiler::class,
    (new class extends \Illuminate\Support\Facades\Blade {
        public static function getFacadeAccessor() { return parent::getFacadeAccessor(); }
    })::getFacadeAccessor()
);


$images = collect(scandir('images'))
    ->filter(fn(string $file) => \Illuminate\Support\Str::of($file)->endsWith('.JPG'))
    ->map(fn(string $file) => '/images/' . $file);


// Render template with page.blade.php
echo $viewFactory->make('page', [
    'title'  => 'Title',
    'text'   => 'This is my text!',
    'images' => $images,
])->render();
