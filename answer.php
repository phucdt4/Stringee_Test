$userId = @$_GET['userId'];
$from = @$_GET['from'];
$to = @$_GET['to'];
$fromInternal = @$_GET['fromInternal'];
$uuid = @$_GET['uuid'];


if($userId){
        $callTo = $userId;
}else{
        $callTo = 'USER_ID';
}

$scco = '[{
			"action": "connect",
			"from": {
				"type": "internal",
				"number": "user1",
				"alias": "user1"
			},
			"to": {
				"type": "internal",
				"number": "user2",
				"alias": "user2"
			}
		}]';

header('Content-Type: application/json');
echo $scco;
