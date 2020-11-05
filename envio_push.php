<?php
include "fcm.php";

$chaveServidor = 'BKWANsq2NiJ7r4HDbpvjb2ywbbD7Uts-esHxi1snG8SvmGc5tO6t-F6dppa9Dz5VJi1kqKg5BidAW0O4YgFfXQE';

// Chrome
$TD1 = 'eWgrVlJ1bP4:APA91bGMHhqjKZ3U29rvbzYNkeDyKBRqCdcZ2eLOUYHc8XtnReUdd6JSO3WBxGpY8qAC_Tapi07I6pJLBxG0WnRaeVN6HjMmqvqgLvvUet7N-LY1eGk3facW4nuDrMmCHQZ7EJoS36ez';

//Edge
$TD2 = 'dO4DxYSeLD4:APA91bFaeK4NBh5mGroR7RDgl272KIJa4e7ot31bFntQZCIQ9oVHirtARh0sxNXViYNhDLS1VdpgwF9QoYy9VDg74USIK78Aomil9CF7vpAwwiAjZDfAk3buXPsUm1pQSPzopLH3qWdH';

//Meu cel
$TD3 = 'fJMmNp9l3FI:APA91bF5ell403zdeGJOjMeKXby1Um4XxzE0giJXvkN_6S3NYn-LzyypvfahUGCq8UfeP5_sOUsBoPGW86YJsMuKzQYzprhCi85UcXfKs86b-_iMvXZgzfpks4pztL_xjgh-3krmlhKF';

//Classe para o envio
$fcm = new FCM($chaveServidor);

try {
$resultado = $fcm->setTitulo('Título - Dispositívo')
                    ->setTexto('Textoo - Dispositívo')
                    ->enviarPara($TD3);

echo "Enviado com sucesso.";
echo $resultado;

} catch(Exception $e) {
echo "Erro: " . $e->getMessage();
}
?>