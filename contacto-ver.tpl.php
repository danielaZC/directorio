<!-- <div>
	<?php dsm($contacto); 
//	print 'Nombre: ' . $contacto->nombre . " " . $contacto->apellido_paterno . " " . $contacto->apellido_materno . '<br>';
//	print 'Departamento: ' . $contacto->departamento . '<br>';
//	print 'Email del trabajo: ' . $contacto->email_trabajo . '<br>';
//	print 'Email personal: ' . $contacto->email_personal . '<br>';
//	print 'Telefono de oficina: ' . $contacto->telefono_oficina . '<br>';
//	print 'Telefono de casa: ' . $contacto->telefono_casa . '<br>';
//	print 'Telefono celular: ' . $contacto->telefono_celular . '<br>';
	?> 

	 Fecha de ultimo acceso: <?php $mifecha //= time(); print $mifecha;?>
	<br>
	Fecha de ultimo acceso: <?php //print $ultimaConsulta;?> 
	
	*Fecha de ultimo acceso(Preprocess): <?php //print $ultimaconsulta;?>

</div> -->

<?php if(isset($contacto->nombre)): ?>
	Nombre: <?php print $contacto->nombre; ?><br>
<?php endif; ?>

<?php if(isset($contacto->apellido_paterno)): ?>
	Apellido Paterno: <?php print $contacto->apellido_paterno; ?><br>
<?php endif; ?>

<?php if(isset($contacto->apellido_materno)): ?>
	Apellido materno: <?php print $contacto->apellido_materno; ?><br>
<?php endif; ?>

<?php if(isset($contacto->departamento)): ?>
	Departamento: <?php print $contacto->departamento; ?><br>
<?php endif; ?>

<?php if(isset($contacto->telefono_oficina)): ?>
	Telefono oficina: <?php print $contacto->telefono_oficina; ?><br>
<?php endif; ?>

<?php if(isset($contacto->oficina_extension)): ?>
	Extension de oficina: <?php print $contacto->oficina_extension; ?><br>
<?php endif; ?>

<?php if(isset($contacto->email_personal)): ?>
	Email personal: <?php print $contacto->email_personal; ?><br>
<?php endif; ?>

<?php if(isset($contacto->telefono_casa)): ?>
	Telefono de casa: <?php print $contacto->telefono_casa; ?><br>
<?php endif; ?>

<?php if(isset($contacto->email_trabajo)): ?>
	Email del trabajo: <?php print $contacto->email_trabajo; ?><br>
<?php endif; ?>

<?php if(isset($contacto->telefono_celular)): ?>
	Telefono celular: <?php print $contacto->telefono_celular; ?><br>
<?php endif; ?>

