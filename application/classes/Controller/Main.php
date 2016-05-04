<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller
{
    public function action_index()
    {

    }

    public function action_countAnswers()
    {
        /*@var Model_Buynewapp*/
        $newapp = ORM::factory('Buynewapp', 2);


        $this->response->body(json_encode(array('yes' => $newapp->yes, 'no' => $newapp->no)));
    }

    public function action_getUserCount()
    {
        $users = ORM::factory('User')
            ->find_all();

        $user = ORM::factory('User')
            ->order_by('id', 'desc')
            ->limit(1)
            ->find();

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => "All count: " . count($users) . "\nLast user added: " . $user->created_at
                )
            )
        );
    }

    public function action_getApiCode()
    {
        /*@var Model_Buynewapp $noanswers*/
        ORM::factory('Code')
            ->values(array('code' => $this->request->query('code')))
            ->save();
    }

    public function action_getAccessToken()
    {
        /* $secret = $this->request->param('secret');

         if ($secret != "mozolevski999")
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
         }*/

        /*@var Model_Code $code*/
        $code = ORM::factory('Code')
            ->where('id', '=', 1)
            ->find()
            ->as_array();

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => $code['code']
                )
            )
        );
    }

    public function action_addSee()
    {
        /*@var Model_Buynewapp $yesanswers*/
        $rev = ORM::factory('Buynewapp', 2);

        ORM::factory('Buynewapp', 2)
            ->values(array('yes' => $rev->yes + 1))
            ->save();
    }

    public function action_getLastHistoryRow()
    {
        $history = ORM::factory('History')
            ->order_by('id', 'desc')
            ->limit(1)
            ->find();

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => $history->created_at
                )
            )
        );
    }

    public function action_addUser()
    {
        $user_uid = $this->request->post('uid');
        $secret = $this->request->post('secret');
        if ($secret != "mozolevski999") {
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

        $user_check = ORM::factory('User', array('uid' => $user_uid));

        if (!($user_check->loaded())) {
            $values = array(
                'uid' => $user_uid,
                'count' => '1'
            );

            /*@var Model_User*/
            ORM::factory('User')
                ->values($values)
                ->save();

            return $this->response->body(
                json_encode(
                    array(
                        'status' => 'success',
                        'code' => "201",
                        'message' => 'successfull created'
                    )
                ));
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'error',
                    'code' => "404",
                    'message' => 'user exist'
                )
            ));
    }

    public function action_removeUser()
    {
        $user_uid = $this->request->post('uid');
        $secret = $this->request->post('secret');
        if ($secret != "mozolevski999") {
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

        $user_check = ORM::factory('User', array('uid' => $user_uid));

        if ($user_check->loaded()) {
             $user_check->delete();

            return $this->response->body(
                json_encode(
                    array(
                        'status' => 'success',
                        'code' => "201",
                        'message' => 'successfull delete'
                    )
                ));
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'error',
                    'code' => "404",
                    'message' => 'user doesnt exist'
                )
            ));
    }

    public function action_getUser()
    {
        $user_uid = $this->request->post('uid');
        $secret = $this->request->post('secret');
        if ($secret != "mozolevski999") {
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

        $user_check = ORM::factory('User', array('uid' => $user_uid));

        if ($user_check->loaded()) {
            $values = array(
                'uid' => $user_uid,
                'count' => ($user_check->count + 1)
            );

            /*@var Model_User*/
            ORM::factory('User', $user_check->id)
                ->values($values)
                ->save();

            return $this->response->body(
                json_encode(
                    array(
                        'status' => 'success',
                        'code' => "201",
                        'message' => 'successfull get'
                    )
                ));
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'error',
                    'code' => "404",
                    'message' => 'user not exist'
                )
            ));
    }

    public function action_getUserHistory()
    {
        $user_uid = $this->request->post('uid');
        $secret = $this->request->post('secret');

        if ($secret != "mozolevski999") {
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

        $user_check = ORM::factory('User', array('uid' => $user_uid));

        if ($user_check->loaded()) {
            $values = array(
                'uid' => $user_uid,
                'count' => ($user_check->count + 1)
            );

            /*@var Model_User*/
            ORM::factory('User', $user_check->id)
                ->values($values)
                ->save();

            $history = ORM::factory("History")
                ->where("user_id", "=", $user_uid)
                ->order_by('time', 'desc')
                ->limit(200)
                ->find_all();

            $result = array();

            foreach ($history as $hist) {
                array_push($result,
                    array(
                        "type" => $hist->type,
                        "time" => $hist->time,
                        "device" => $hist->device
                    ));
            }

            return $this->response->body(
                json_encode(
                    array(
                        'status' => 'success',
                        'code' => "201",
                        'message' => json_encode($result)
                    )
                ));
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'error',
                    'code' => "404",
                    'message' => 'user not exist'
                )
            ));
    }

    public function action_getUsers()
    {
        $users = ORM::factory('User')
            ->order_by('created_at', 'desc')
            ->find_all();

        $users_string = "";
        foreach ($users as $user) {
            $users_string = $users_string . $user->uid . ',';
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => substr($users_string, 0, strlen($users_string) - 1)
                )
            ));
    }


    public function action_reloadHistory()
    {

        $history = $this->request->post('history');
        $secret = $this->request->post('secret');

        if ($secret != "mozolevski999") {
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

        $index = 0;

        /*$characters = str_replace("response", "\"response\"", $history );
        $characters = str_replace("uid", "\"uid\"", $characters);
        $characters = str_replace("first_name", "\"first_name\"", $characters);
        $characters = str_replace("last_name", "\"last_name\"", $characters);
        $characters = str_replace("online:", "\"online\":", $characters);
        $characters = str_replace("last_seen", "\"last_seen\"", $characters);
        $characters = str_replace("time", "\"time\"", $characters);
        $characters = str_replace("platform", "\"platform\"", $characters );
        $characters = str_replace("hidden", "\"hidden\"", $characters);
        $characters = str_replace("online_app", "\"online_app\"", $characters);
        $characters = str_replace("online_mobile", "\"online_mobile\"", $characters);
        $characters = str_replace("deactivated", "\"deactivated\"", $characters);
        $characters = str_replace(" ", "", $history);*/
        $json = json_decode($history);
        //echo json_decode($characters)->response;

        foreach ($json->response as $obj) {
            $check_history = ORM::factory("History")
                ->where("user_id", '=', $obj->uid)
                ->limit(1)
                ->order_by("created_at", "desc")
                ->find();
            if (empty($obj->deactivated)) {
                if ($check_history->loaded() && $obj->last_seen->time == $check_history->time && $obj->online != $check_history->type && !empty($obj->uid)) {
                    echo $obj->uid . "\n";
                       ORM::factory("History", $check_history->id)
                        ->values(
                            array(
                                "type" => '1',
                                "time" => $obj->last_seen->time - rand(60, 450)
                            )
                        )
                        ->save();

                    $index++;

                    ORM::factory("History")
                        ->values(
                            array(
                                "user_id" => $obj->uid,
                                "type" => $obj->online,
                                "time" => $obj->last_seen->time,
                                "device" => $obj->last_seen->platform
                            )
                        )
                        ->save();

                    /*return $this->response->body(
                        json_encode(
                            array(
                                'status' => 'success',
                                'code' => "201",
                                'message' => "updated"
                            )
                        ));*/
                } else

                    if (!$check_history->loaded() || $obj->online != $check_history->type) {
                        if (empty($obj->deactivated)) {
                            $value = array(
                                "user_id" => $obj->uid,
                                "type" => $obj->online,
                                "time" => $obj->last_seen->time,
                                "device" => $obj->last_seen->platform
                            );
                            $index++;
                            ORM::factory("History")
                                ->values($value)
                                ->save();
                        }
                    }
            }
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => "updated " . $index++ . " users"
                )
            ));
    }

    public function action_getMessage()
    {
        $type = $this->request->post("type");

        if (empty($type)) {
            return $this->response->body(
                json_encode(
                    array(
                        'status' => 'error',
                        'code' => "403",
                        'message' => 'access denied'
                    )
                ));
        }
        $message = ORM::factory('Message')
            ->where("type", "=", $type)
            ->limit(1)
            ->order_by('id', 'DESC')
            ->find()
            ->as_array();

        return $this->response->body(
            json_encode(
                array(
                    'status' => 'success',
                    'code' => "201",
                    'message' => json_encode($message)
                )
            ));
    }

    public function action_templateCheck() {
        $secret = $this->request->post('secret');
        if ($secret != "mozolevski999") {
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
        $status = "";
        $code = "0";
        $message = "";

        $app = $this->request->post('app');
        if($app == "template"){
            $code_post = $this->request->post('code');
            if($code_post == "#4234dw231!") {
                $status = "true";
                $code = "201";
                $message = "access applied";
            } else {
                $status = "false";
                $code = "403";
                $message = "access blocked";
            }
        }

        return $this->response->body(
            json_encode(
                array(
                    'status' => $status,
                    'code' => $code,
                    'message' => $message
                )
            )
        );
    }
}