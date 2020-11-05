<?php
include "fcm.php";

$chaveServidor = 'AAAAZjr88Ps:APA91bG-QDMHGKjMET2iU9LFRoIaZESOU6A2Xn_YpCDebJ8V7XewfT2lbD3_Ook3DwfV-a4q2CF2Q3EgP4WPtv9zDczeHsO-9X6lF_3KPK5ceIE7Pw2RfHkIlWaUAkZcL2cUaJqswoFU';

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
?>