<?php
    require('apipractice.php');
    //$data = array('username'=>'ankit5','password'=>'ankit','first_name'=>'Ankit','last_name'=>'Patel','email'=>'ankitpatel@qainfotech.com');
    
    
    //$data = array('test_session'=>165,'output'=>array("wordCount"=>60),'challenge'=>2);
    //$data = array('test_session'=>165,'output'=>array('a'=> 4,'e'=> 3,"i"=> 0,"o"=> 0,"u"=> 0),'challenge'=>4);
    //$data = array('test_session'=>165,'output'=>array('count'=>206),'challenge'=>1);
    //$data = array('test_session'=>165,'output'=>array('sentenceCount'=>2),'challenge'=>3);
    //$data = array('test_session'=>165,'output'=>array('list'=>array(1,6,7,9,2)),'challenge'=>5);
    //$data = array('test_session'=>165,'output'=>array('list'=>array(101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197)),'challenge'=>6);
    $data = array('test_session'=>165,'output'=>array('winner'=>'player1'),'challenge'=>7);
    
    
    //$data = array('candidate'=>'136');
    
    
    $data_json = json_encode($data);
    $url = 'https://code-riddler.herokuapp.com/api/v1/testsessionchallenges/output/';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
    curl_setopt($ch, CURLOPT_USERPWD, 'ankit5' . ":" . 'ankit');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    curl_close($ch);
    print_r ($response);
    
?>
