<?php
function curl_data($data){
        $url = $data['url'];
        $post = $data['post'];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,1);
        curl_setopt($ch, CURLOPT_USERAGENT, "MCTBot checking {$this->url}"); 
        if($post){
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        }
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    $url = "http://www.yahoo.co.jp/";  // Change with Your Website URL

    $post_data = '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"'.rawurldecode($url).'","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]';

    $data = array(
        "url"=>$url,
        "post"=>$post_data
    ); //Creating an array

    $curl = curl_data($data); //Return the Fetched data

    $json = json_decode($curl,true);   //It will convert the JSON Object into array

    $gcount = (isset($json[0]['result']['metadata']['globalCounts']['count'])) ? $json[0]['result']['metadata']['globalCounts']['count'] : 0;  //It will return Actual Share Count or 0

    echo "Total Google+ Share:" .$gcount;

    ?>
