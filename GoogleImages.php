<?php

class GoogleImages {

    //google gives 4 images per request
    private $count = 4;
    //random result page
    private $random = 3;
    //enter your key here
    private $key = 'AIzaSyCOvqMhOJRMBkGCLMLdfAq_0MpI9z67DnU';
    //Random default query 
    private $randomquery = array(
        'cats', 'animal', 'dog', 'nature', 'space','street','design','3d', 'city', 'women', 'baby', 'men', 'star', 'sport', 'ice', 'sea', 'beach', 'love',);

    public function __construct() {
        $this->random = rand(0, 9);
    }

    private function multi_curl($urls) {
        // for curl handlers
        $curl_handlers = array();
        $images = array();

        //for storing contents
        $content = array();
        //setting curl handlers
        foreach ($urls as $url) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $curl_handlers[] = $curl;
        }
        //initiating multi handler
        $multi_curl_handler = curl_multi_init();

        // adding all the single handler to a multi handler
        foreach ($curl_handlers as $key => $curl) {
            curl_multi_add_handle($multi_curl_handler, $curl);
        }

        // executing the multi handler
        do {
            $multi_curl = curl_multi_exec($multi_curl_handler, $active);
        } while ($multi_curl == CURLM_CALL_MULTI_PERFORM || $active);

        foreach ($curl_handlers as $curl) {
            //checking for errors
            if (curl_errno($curl) == CURLE_OK) {
                //if no error then getting content
                $content = curl_multi_getcontent($curl);
                $result = json_decode($content, true);
                foreach ($result['responseData']['results'] as $img) {
                    $images[] = $img;
                }
            } else {
                $images[] = curl_error($curl);
            }
        }
        curl_multi_close($multi_curl_handler);
        return $images;
    }

    private function output($images, $cols = 4, $rows = 5) {
        //creating table
        $output = array();
        for ($i = 0; $i < $rows; $i++) {

            for ($j = 0; $j < $cols; $j++) {
                $output[$i][$j]['url'] = $images[($i * $this->count) + $j]['url'];
                $output[$i][$j]['tmb'] = $images[($i * $this->count) + $j]['tbUrl'];
                $output[$i][$j]['title'] = $images[($i * $this->count) + $j]['title'];
            }
        }
        return $output;
    }

    public function get_images($query = null, $cols = 4, $rows = 5) {

        if (empty($query))
            $query = $this->randomquery ();

        //calculating amount of requests
        $requests = floor(($cols * $rows) / $this->count);
        //creating array with urls
        $urls = array();

        for ($i = $this->random; $i < $requests + $this->random; $i++) {
            $urls[$i] = 'http://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=';
            $urls[$i] .= urlencode($query) . '&start=' . ($i * $this->count) . '&key=' . $this->key;
        }
        //performing multiple requests
        $images = $this->multi_curl($urls);
        //outputting results
        return $this->output($images, $cols, $rows);
    }

    private function randomquery() {
        $size = count($this->randomquery);
        $randomq = rand(0,$size);
        return $this->randomquery[$randomq].' wallpaper';
    }

}

?>