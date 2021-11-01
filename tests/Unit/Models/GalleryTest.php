<?php

use App\Models\Gallery;

it('can see galleries page', function () {
    $response = $this->get('/galleries');

    $response->assertStatus(200);
});

it('only shows enabled galleries', function(){
   Gallery::factory()->times(3)->enabled()->create();
   Gallery::factory()->times(3)->enabled(false)->create();
   $galleryCount = Gallery::enabled()->count();
   expect($galleryCount)->toBe(3);
});
