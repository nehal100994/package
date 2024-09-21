<?php

use Nehal\Package\PackageClass;

it('renders hello world', function () {
    $helloWorld = new PackageClass();
    expect($helloWorld->render())->toBe("<html><body><h1>Hello, World!</h1></body></html>");
});

it('can test', function () {
    expect(true)->toBeTrue();
});
