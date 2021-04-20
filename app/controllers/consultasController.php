<?php

class consultasController extends Controller
{
  function __construct()
  {
  }

  function index()
  {
    Redirect::to('consultas/agendar');
  }
  function agendar()
  {
    $data=['title'=>'Agenda tu consulta'];
    View::render('index',$data);
  }
  function post_agendar()
  {
    if (!Csrf::validate($_POST['csrf'])) {
      Flasher::new('Token no válido', 'danger');
      Redirect::back();
    }
    $nombres = clean($_POST['nombres']);
    $apellidos = clean($_POST['apellidos']);
    $nombre_completo=sprintf('%s %s',$nombres, $apellidos );
    $email = clean($_POST['email']);
    $telefono = clean($_POST['telefono']);
    $sexo = clean($_POST['sexo']);
    $edad = clean($_POST['edad']);
    $notas = clean($_POST['notas']);
    $fecha = clean($_POST['fecha']);
    $body='Hola %s, <br>
    Recibimos tu consulta, tu información es:<br><br>
    <b>Nombre(s): </b> %s <br>
    <b>Apellido(s): </b> %s <br>
    <b>Email: </b> %s <br>
    <b>Telefono: </b> %s <br>
    <b>Sexo: </b> %s <br>
    <b>Edad: </b> %s <br>
    <b>Sintomas: </b> %s <br>
    <b>Fecha: </b> %s <br>';
    $body=sprintf($body,$nombre_completo,$nombres,$apellidos,$email,$telefono,$sexo,$edad,$notas,format_date($fecha));

    echo $body;
    try {
      $subject = sprintf('[%s] Recibimos tu consulta',get_sitename());
      $alt     = 'Tu consulta fue recibida con éxito.';
      send_email(get_siteemail(), $email, $subject, $body, $alt);
      Flasher::new(sprintf('Correo electrónico enviado con éxito a %s', $email),'success');
      Redirect::back();
    } catch (Exception $e) {
      Flasher::new($e->getMessage(),'danger');
      Redirect::back();
    
    }
  }
}
