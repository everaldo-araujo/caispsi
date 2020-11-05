<?php
include "fcm.php";

// Server key from Firebase Console

define('API_ACCESS_KEY', 'AIzaSyBA6WX0MSW-BZz78FNwwx1-X8uNV5cYMbc' );
$data = array("to" => "eWgrVlJ1bP4:APA91bGMHhqjKZ3U29rvbzYNkeDyKBRqCdcZ2eLOUYHc8XtnReUdd6JSO3WBxGpY8qAC_Tapi07I6pJLBxG0WnRaeVN6HjMmqvqgLvvUet7N-LY1eGk3facW4nuDrMmCHQZ7EJoS36ez", "notification" => array( "title" => "Shareurcodes.com", "body" => "A Code Sharing Blog!","icon" => "icon.png", "click_action" => "http://shareurcodes.com")); 
$data_string = json_encode($data); 
echo "The Json Data : ". $data_string; 
$headers = array ( 'Authorization: key=' . API_ACCESS_KEY, 'Content-Type: application/json'); 
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' ); 
curl_setopt( $ch,CURLOPT_POST, true ); 
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers ); 
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true ); 
curl_setopt( $ch,CURLOPT_POSTFIELDS, $data_string); 
$result = curl_exec($ch);
curl_close ($ch); 
echo "<p>&nbsp;</p>"; 
echo "Resultado: ".$result;

////////////////////////////////////////////////////////

//Chave do Servidor para o envio de Push Notificação
$chaveServidor = API_ACCESS_KEY;

$tokenDispositivo = 'ccJth9Pxb0c:APA91bEd1PfzSz-IuPmQvLoXG1_8YpTVwg9SCz8DkTsmWArfZBS87iNZu1uHP8_9_CkabU66HzlFDl6_IyEjlS4iBUQTtQOdOUcWAiadETLJ0P7g1ihAM-CA4p-W7JyaIvKjJOEr4whi';

//Classe para o envio
$fcm = new FCM($chaveServidor);

try {
$resultado = $fcm->setTitulo('Título - Dispositívo')
                    ->setTexto('Textoo - Dispositívo')
                    ->enviarPara($tokenDispositivo);

echo "Enviado com sucesso.";
echo $resultado;

} catch(Exception $e) {
echo "Erro: " . $e->getMessage();
}