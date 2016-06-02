<?php

session_start();
require ('db.php');

class CosineSimilarity {

    public function similarity(array $user1, array $user2) {
        return $this->_dotProduct($user1, $user2) / ($this->_absVector($user1) * $this->_absVector($user2));
    }

    protected function _dotProduct(array $user1, array $user2) {


        foreach (array_keys($user1) as $key1) {
            foreach (array_keys($user2) as $key2) {
                if ($key1 === $key2) {
                    $result += $user1[$key1] * $user2[$key2];
                }
            }
        }

        return $result;
    }

    protected function _absVector(array $user) {


        foreach (array_values($user) as $value) {
            $result += $value * $value;
        }

        return sqrt($result);
    }

}

$firstuser = "SELECT * FROM responses where user_name = '" . $_SESSION['username'] . "'";
$firstUserResponses = $db->query("$firstuser");

foreach ($firstUserResponses as $firstUserResponse) {

    $firstUserque = $firstUserResponse['question_number'];
    $firstUserresp = $firstUserResponse['response'];
    for ($i = $firstUserque; $i <= $firstUserque; $i++) {
        $firstUser[$i] = $firstUserresp;
    }
}

$otherUsers = "Select * from login_info where user_name NOT IN('" . $_SESSION['username'] . "')";
$allUsers = $db->query("$otherUsers");


foreach ($allUsers as $user) {
    $usern = $user['user_name'];
    $a = 0;
    $responseTable = "SELECT * FROM responses where user_name = '" . $usern . "'";
    $responses = $db->query("$responseTable");

    foreach ($responses as $response) {
        $que = $response['question_number'];
        $resp = $response['response'];
        for ($i = $que; $i <= $que; $i++) {
            $array[$i] = $resp;
        }
    }
    $userResponse[$usern] = $array;
}

$cs = new CosineSimilarity();

foreach ($userResponse as $user => $array) {
    $a = $cs->similarity($firstUser, $array);
    $results[$user] = $a;
}

arsort($results);

$temp = array();
$counter = 1;
foreach ($results as $key => $value) {
    if ($counter > 3) {
        //to make sure loop does not run more than three times
        break;
    }
    $counter++;
    $temp[] = $key;
}


