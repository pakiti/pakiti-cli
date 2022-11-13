<?php

it('can make new *', function () {
    $this->artisan('new')->assertExitCode(0);
});
