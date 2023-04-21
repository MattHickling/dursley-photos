<?php

$api_key = 'fb74a60e4102e46c9d7b0b2998a2e94b';

$search_query = $_GET['query'];

$api_endpoint = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key='.$api_key.'&text='.$search_query.'%20dursley&format=json&nojsoncallback=1&per_page=18';


$response = file_get_contents($api_endpoint);

$data = json_decode($response, true);

if ($data['stat'] == 'ok') {
    $photos = array();
    foreach ($data['photos']['photo'] as $photo) {
   
        $photo_url = 'https://live.staticflickr.com/'.$photo['server'].'/'.$photo['id'].'_'.$photo['secret'].'.jpg';
        $photo_title = $photo['title'];
        $photo_description = $photo['description']['_content'];
        $photos[] = array(
            'url' => $photo_url,
            'title' => $photo_title,
            'description' => $photo_description
        );
    }
    // Encode $photos array as JSON and return it
    echo json_encode($photos);
} else {
    echo 'Error: '.$data['message'];
}
