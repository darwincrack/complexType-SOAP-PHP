

<?

require('class.soap.php');



/*comienza el llamado al web service*/


$objGetCust = new transaccionDTO();

$objGetCust->importe = 10;
$objGetCust->nombreCliente = 'FUlano';
$objGetCust->referencia = '23256899652244';

$objGetCust->Autorizacion = '';
$objGetCust->codErrorBC = '';
$objGetCust->codErrorSIN = '';
$objGetCust->codRetorno = '';
$objGetCust->fechaInicioTransaccion = '';
$objGetCust->idServCobrado = '';


$objGetCust->noBoleta = '';
$objGetCust->noServicio = '';
$objGetCust->noTienda = '';
$objGetCust->origen = 'AVL';
$objGetCust->regCompleto = 0;
$objGetCust->terminalBC = '';
$objGetCust->tipoArticulo = '';
$objGetCust->tipoTransaccion = '';
$objGetCust->servicio = '';
$objGetCust->terminalVAD = '';
$objGetCust->total = 0.0;
$objGetCust->totalOriginal = 0.0;

$objGetCust->informacionFormaDePago = new informacionFormaDePagoDTO();
$objGetCust->informacionFormaDePago->fecExp ='';
$objGetCust->informacionFormaDePago->noTarjeta ='1300001353949402';
$objGetCust->informacionFormaDePago->plan ='40003';
$objGetCust->informacionFormaDePago->sc ='571';
$objGetCust->informacionFormaDePago->tipoTarjeta ='0';


$objGetCust->items = new itemDTO();

$objGetCust->items->cantidad ='1';
$objGetCust->items->idSku ='75599137';
$objGetCust->items->importe =34;

















echo "------------------";





$compraAV        = new compraAV();
$compraAV->arg0  = $objGetCust;

$wsdlviajes      = new wsdlviajes();

$response        = @$wsdlviajes::compraAV($compraAV);

echo "respuesta: <br>";

print_r($response);

                             
                            