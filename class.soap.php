<?php


class itemDTO{
var $cantidad;//int
var $idSku;//string
var $importe;//double
}

class transaccionDTO{
var $autorizacion;//string
var $codErrorBC;//string
var $codErrorSIN;//string
var $codRetorno;//string
var $fechaInicioTransaccion;//string
var $idServCobrado;//string
var $informacionFormaDePago;//informacionFormaDePagoDTO
var $items;//itemDTO
var $noBoleta;//string
var $noServicio;//string
var $noTienda;//string
var $origen;//string
var $regCompleto;//int
var $terminalBC;//string
var $tipoArticulo;//string
var $tipoTransaccion;//string
var $importe;//double
var $nombreCliente;//string
var $referencia;//string
var $servicio;//string
var $terminalVAD;//string
var $total;//double
var $totalOriginal;//double

}

class informacionFormaDePagoDTO{
var $fecExp;//string
var $noTarjeta;//string
var $plan;//string
var $sc;//string
var $tipoTarjeta;//string
}


class compraAV{
var $arg0;//agViajeDTO
}







class wsdlviajes 
 {
private static   $soapClient;
 
private static $classmap = array('itemDTO'=>'itemDTO'
,'agViajeDTO'=>'agViajeDTO'
,'transaccionDTO'=>'transaccionDTO'
,'compraAV'=>'compraAV'


);


 function __construct()
 {}

 

public  static function compraAV(compraAV $compraAV)
{

	$soapClient = new SoapClient('http://agenciabtbybcdes.liverpool.com.mx/bcAgenciaBtByWS/serviceViajes?wsdl', array(
	"classmap"=>self::$classmap,
    "exceptions" => 0, 
    "trace" => 1, 
    'stream_context' => stream_context_create(array(
        'http' => array(
            'header' => "username: avBBy \n password: 4vBB7"
        ),
    )),
));


return $compraAVResponse = $soapClient->compraAV($compraAV);


//return  $compraAVResponse = "Response:\n" . $soapClient->__getLastResponse() . "\n";

//return  $compraAVResponse = "request:\n" . $soapClient->__getLastRequest() . "\n";



}

}





