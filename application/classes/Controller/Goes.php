<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Goes extends Controller
{
    public function action_grodnoAuto()
    {
        $text = file_get_contents('http://info.21.by/transport/marshrutki-grodno.html');
        $dom = new DOMDocument();

        @$dom->loadHTML($text);
        $dom->preserveWhiteSpace = false;
        $table = $dom->getElementsByTagName('table');
        $rows = $table->item(0)->getElementsByTagName('tr');
        $result = array();
        $index = 0;
        $tag_index = 0;
        $temp_result = array();
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');

            if ($cols->length > 4) {
                if ($cols->length == 7 && $index != 0) {
                    array_push($temp_result, $temp);
                    $temp = array();
                }

                if ($cols->length == 7) {
                    $index++;
                    if ($cols->item(0) != null)
                        $temp['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp['direction'] = $cols->item(1)->nodeValue;
                    if ($cols->item(3) != null)
                        $temp['interval'] = $cols->item(3)->nodeValue;
                    if ($cols->item(2) != null)
                        $temp['time_available'] = $cols->item(2)->nodeValue;
                } else {
                    if ($cols->item(0) != null)
                        $temp['alternative'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp['alternative'] = $temp['alternative'] ." &#1082;&#1072;&#1078;&#1076;&#1099;&#1077; " . $cols->item(1)->nodeValue . " &#1084;.";
                }
            } else {
                if ($tag_index == 0) {
                    if ($cols->item(0) != null)
                        $temp['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp['direction'] = str_replace('"', "'", $cols->item(1)->nodeValue);
                    if ($cols->item(2) != null)
                        $temp['time_available'] = $cols->item(2)->nodeValue;
                    if ($cols->item(3) != null)
                        $temp['interval'] = $cols->item(3)->nodeValue;
                    $temp['alternative'] = "&#1047;&#1072;&#1084;&#1077;&#1090;&#1082;&#1080;";
                    $tag_index++;
                    $result['title'] = $temp;
                }
            }
        }
        $result['schedule'] = $temp_result;
        echo json_encode($result);
    }

    public function action_brestAuto()
    {
        $text = file_get_contents('http://info.21.by/transport/marshrutki-brest.html');
        $dom = new DOMDocument();

        @$dom->loadHTML($text);
        $dom->preserveWhiteSpace = false;
        $table = $dom->getElementsByTagName('table');
        $rows = $table->item(0)->getElementsByTagName('tr');
        $result = array();
        $index = 0;
        $temp = array();
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            $temp_time = array();
            if ($index == 0) {
                if ($cols->item(0) != null)
                    $temp_time['number'] = $cols->item(0)->nodeValue;
                if ($cols->item(1) != null)
                    $temp_time['direction'] = $cols->item(1)->nodeValue;
                if ($cols->item(2) != null)
                    $temp_time['interval'] = $cols->item(2)->nodeValue;
                $result['title'] = $temp_time;
            } else {
                if ($cols->item(0) != null)
                    $temp_time['number'] = $cols->item(0)->nodeValue;
                if ($cols->item(1) != null)
                    $temp_time['direction'] = str_replace('"', "'", $cols->item(1)->nodeValue);
                if ($cols->item(2) != null)
                    $temp_time['interval'] = $cols->item(2)->nodeValue;
                array_push($temp, $temp_time);
            }
            $index++;
        }
        $result['schedule'] = $temp;
        echo json_encode($result);
    }

    public function action_vitebskAuto()
    {
        $text = file_get_contents('http://info.21.by/transport/marshrytki-vitebsk.html');
        $dom = new DOMDocument();

        @$dom->loadHTML($text);
        $dom->preserveWhiteSpace = false;
        $table = $dom->getElementsByTagName('table');
        $rows = $table->item(0)->getElementsByTagName('tr');
        $result = array();
        $index = 0;
        $temp = array();

        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            $temp_time = array();
            if ($cols->length > 2 && $cols->item(1)->nodeValue != "№ м–та") {
                if ($index == 0) {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['direction'] = $cols->item(1)->nodeValue;
                    if ($cols->item(2) != null)
                        $temp_time['interval'] = $cols->item(2)->nodeValue;
                    $result['title'] = $temp_time;
                } else {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['direction'] = str_replace('"', "'", $cols->item(1)->nodeValue);
                    if ($cols->item(2) != null)
                        $temp_time['interval'] = $cols->item(2)->nodeValue;
                    array_push($temp, $temp_time);
                }
                $index++;
            }
        }
        $result['schedule'] = $temp;
        echo json_encode($result);
    }

    public function action_mogilevAuto()
    {
        $text = file_get_contents('http://info.21.by/transport/marshrutki-mogilev.html');
        $dom = new DOMDocument();

        @$dom->loadHTML($text);
        $dom->preserveWhiteSpace = false;
        $table = $dom->getElementsByTagName('table');
        $rows = $table->item(0)->getElementsByTagName('tr');
        $result = array();
        $index = 0;
        $temp = array();

        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            $temp_time = array();
            if ($cols->length > 2 && $cols->item(1)->nodeValue != "№ м–та") {
                if ($index == 0) {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['direction'] = $cols->item(1)->nodeValue;
                    if ($cols->item(2) != null)
                        $temp_time['interval'] = $cols->item(2)->nodeValue;
                    $result['title'] = $temp_time;
                } else {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['direction'] = str_replace('"', "'", $cols->item(1)->nodeValue);
                    if ($cols->item(2) != null)
                        $temp_time['interval'] = $cols->item(2)->nodeValue;
                    array_push($temp, $temp_time);
                }
                $index++;
            }
        }
        $result['schedule'] = $temp;
        echo json_encode($result);
    }

    public function action_gomelAuto()
    {
        $text = file_get_contents('http://info.21.by/transport/marshrutki-gomel.html');
        $dom = new DOMDocument();

        @$dom->loadHTML($text);
        $dom->preserveWhiteSpace = false;
        $table = $dom->getElementsByTagName('table');
        $rows = $table->item(0)->getElementsByTagName('tr');
        $result = array();
        $index = 0;
        $temp = array();

        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            $temp_time = array();
            if ($cols->length > 2 && $cols->item(1)->nodeValue != "№ м–та") {
                if ($index == 0) {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['direction'] = $cols->item(1)->nodeValue;
                    if ($cols->item(2) != null)
                        $temp_time['time_available'] = $cols->item(2)->nodeValue;
                    if ($cols->item(2) != null)
                        $temp_time['interval'] = $cols->item(3)->nodeValue;
                    $result['title'] = $temp_time;
                } else {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['direction'] = str_replace('"', "'", $cols->item(1)->nodeValue);
                    if ($cols->item(2) != null)
                        $temp_time['time_available'] = $cols->item(2)->nodeValue;
                    if ($cols->item(3) != null)
                        $temp_time['interval'] = $cols->item(3)->nodeValue;
                    array_push($temp, $temp_time);
                }
                $index++;
            }
        }
        $result['schedule'] = $temp;
        echo json_encode($result);
    }

    public function action_minskAuto()
    {
        $text = file_get_contents('http://info.21.by/transport/marshrutki-minsk.html');
        $dom = new DOMDocument();

        @$dom->loadHTML($text);
        $dom->preserveWhiteSpace = false;
        $table = $dom->getElementsByTagName('table');
        $rows = $table->item(0)->getElementsByTagName('tr');
        $result = array();
        $index = 0;
        $temp = array();

        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            $temp_time = array();
            if ($cols->length > 2 && $cols->item(1)->nodeValue != "№ м–та") {
                if ($index == 0) {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['name'] = $cols->item(1)->nodeValue;
                    if ($cols->item(2) != null)
                        $temp_time['direction'] = $cols->item(2)->nodeValue;
                    if ($cols->item(3) != null)
                        $temp_time['interval'] = $cols->item(3)->nodeValue;
                    $temp_time['alternative'] = "&#1047;&#1072;&#1084;&#1077;&#1090;&#1082;&#1080;";
                    if ($cols->item(4) != null)
                        $temp_time['time_available'] = $cols->item(4)->nodeValue;
                    $result['title'] = $temp_time;
                } else {
                    if ($cols->item(0) != null)
                        $temp_time['number'] = $cols->item(0)->nodeValue;
                    if ($cols->item(1) != null)
                        $temp_time['name'] = str_replace('"', "'", $cols->item(1)->nodeValue);
                    if ($cols->item(2) != null)
                        $temp_time['direction'] = str_replace('"', "'", $cols->item(2)->nodeValue);
                    if ($cols->item(3) != null)
                        $temp_time['interval'] = $cols->item(3)->nodeValue;
                    if ($cols->item(4) != null)
                        $temp_time['alternative'] = $cols->item(4)->nodeValue;
                    if ($cols->item(5) != null)
                        $temp_time['time_available'] = $cols->item(5)->nodeValue;
                    array_push($temp, $temp_time);
                }
                $index++;
            }
        }
        $result['schedule'] = $temp;
        echo json_encode($result);
    }

    public function action_getFbus() {
        $secret = $this->request->post('secret');

        if ($secret != "goes_premium_2016")
        {
            return $this->response->body(
                json_encode(
                    array(
                        'status' => 'error',
                        'code' => "403",
                        'message' => 'access denied'
                    )
                )
            );
        }
        $selected_city = $this->request->post('city');

        /*@var Model_Bus $city*/
        $city = ORM::factory('Bus')
            ->where('city', '=', $selected_city)
            ->find()
            ->as_array();

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => $city['schedule']
                )
            )
        );
    }

    public function action_getTaxi() {
        $secret = $this->request->post('secret');

        if ($secret != "goes_premium_2016")
        {
            return $this->response->body(
                json_encode(
                    array(
                        'status' => 'error',
                        'code' => "403",
                        'message' => 'access denied'
                    )
                )
            );
        }
        $selected_city = $this->request->post('city');

        /*@var Model_Taxi $taxi*/
        $taxi = ORM::factory('Taxi')
            ->where('city', '=', $selected_city)
            ->find()
            ->as_array();

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => $taxi['schedule']
                )
            )
        );
    }


    public function action_info() {
        return $this->response->body(
            json_encode(
                array(
                    array(
                        'returns_json' => '{status:{},code:{},message:{data}}'
                    ),
                    array(
                        'http' => 'http://vkcheck.hol.es/goes/getFbus',
                        'type' => "POST",
                        'params' => "{secret, city}"
                    ),
                    array(
                        'http' => 'http://vkcheck.hol.es/goes/getTaxi',
                        'type' => "POST",
                        'params' => "{secret, city}"
                    ),
                )
            )
        );
    }

    public function action_getGrodnoTaxi()
    {
        $taxi = array();

        $sites = array(
            "http://tam.by/avto/taksi/",
            "http://tam.by/avto/taksi/page2/");

        foreach($sites as $site) {
            $grodno_url = $site;

            $grodno_text = file_get_contents($grodno_url);
            $grodno_dom = new DOMDocument();

            @$grodno_dom->loadHTML($grodno_text);
            $grodno_dom->preserveWhiteSpace = false;

            $xpath = new DOMXpath($grodno_dom);
            $articles = $xpath->query('//ul[@class="catalog_items_list m-white"]');

            foreach ($articles as $container)
            {
                $lis = $container->getElementsByTagName("li");
                foreach($lis as $li) {
                    $temp_array = array();
                    $temp_phones = array();

                    $spans = $li->getElementsByTagName("span");
                    if($spans->item(0) != null){
                        $array = array('"');
                        $str = str_replace($array,"'",$spans->item(0)->nodeValue);
                        $temp_array["name"] = $str;
                    }

                    if($spans->item(1) != null){
                        $array = array('"');
                        $str = str_replace($array,"'",$spans->item(1)->nodeValue);
                        $temp_array["description"] = $str;
                    }

                    if($spans->item(2) != null){
                        $array = array('"');
                        $str = str_replace($array,"'",$spans->item(2)->nodeValue);
                        $temp_array["place"] = $str;
                    }

                    if($spans->item(5) != null)
                    {
                        $str = $spans->item(5)->nodeValue;
                        $str = preg_replace("/[^0-9]/","", $str);
                        if(strlen($str) != 0)
                            array_push($temp_phones, strlen($str) > 10 ? "+" + $str : $str);
                    }

                    if($spans->item(6) != null){
                        $str = $spans->item(6)->nodeValue;
                        $str = preg_replace("/[^0-9]/","", $str);
                        if(strlen($str) != 0)
                            array_push($temp_phones, strlen($str) > 10 ? "+" + $str : $str);
                    }


                    if($spans->item(7) != null)
                    {
                        $str = $spans->item(7)->nodeValue;
                        $str = preg_replace("/[^0-9]/","", $str);
                        if(strlen($str) != 0)
                            array_push($temp_phones, strlen($str) > 10 ? "+" + $str : $str);
                    }

                    if($spans->item(8) != null)
                    {
                        $str = $spans->item(8)->nodeValue;
                        $str = preg_replace("/[^0-9]/","", $str);
                        if(strlen($str) != 0)
                            array_push($temp_phones, strlen($str) > 10 ? "+" + $str : $str);
                    }

                    if($spans->item(9) != null)
                    {
                        $str = $spans->item(9)->nodeValue;
                        $str = preg_replace("/[^0-9]/","", $str);
                        if(strlen($str) != 0)
                            array_push($temp_phones, strlen($str) > 10 ? "+" + $str : $str);
                    }
                    if(count($temp_phones) != 0)
                        $temp_array["phone"] = $temp_phones;
                    if(count($temp_array) != 0)
                        array_push($taxi, $temp_array);
                }
            }
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => $taxi
                )
            )
        );
    }
}