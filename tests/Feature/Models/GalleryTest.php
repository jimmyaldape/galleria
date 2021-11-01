<?php

test('galleries', function () {
    $response = $this->get('/galleries');

    $response->assertStatus(200);
});
