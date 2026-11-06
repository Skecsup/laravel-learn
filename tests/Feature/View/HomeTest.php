<?php

it('can render', function () {
    $contents = $this->view('home', [
        //
    ]);

    $contents->assertSee('');
});
