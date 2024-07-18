<div class="col-md-8">
  
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>Registro de Usuario</b></h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php echo WEB_ROOT; ?>views/process.php?cmd=create" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <span id="sprytf_name">
        <input type="text" name="name" class="form-control input-sm" placeholder="Nombre de Usuario">
        <span class="textfieldRequiredMsg">El nombre es obligatorio.</span>
        <span class="textfieldMinCharsMsg">El nombre debe tener al menos 6 caracteres.</span>
        </span>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Dirección</label>
        <span id="sprytf_address">
        <textarea name="address" class="form-control input-sm" placeholder="Dirección"></textarea>
        <span class="textareaRequiredMsg">La dirección es obligatoria.</span>
        <span class="textareaMinCharsMsg">La dirección debe tener al menos 10 caracteres.</span>  
        </span>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Teléfono</label>
        <span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm" placeholder="Número de Teléfono">
        <span class="textfieldRequiredMsg">El número de teléfono es obligatorio.</span>
        </span>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Correo Electrónico</label>
        <span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder="Ingrese el correo electrónico">
        <span class="textfieldRequiredMsg">El correo electrónico es obligatorio.</span>
        <span class="textfieldInvalidFormatMsg">Por favor, ingrese un correo válido (usuario@dominio.com).</span>
        </span>
      </div>
    
      <div class="form-group">
        <label for="exampleInputEmail1">Tipo de Usuario</label>
        <span id="sprytf_type">
        <select name="type" class="form-control input-sm">
            <option value=""> -- seleccione el tipo de usuario --</option>
            <option value="student">Estudiante</option>
            <option value="teacher">Profesor</option>
        </select>
        <span class="selectRequiredMsg">Por favor, seleccione el tipo de usuario.</span>
        </span>
      </div>
              
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</div>
<!-- /.box -->
<script type="text/javascript">
<!--
var sprytf_name     = new Spry.Widget.ValidationTextField("sprytf_name", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_address  = new Spry.Widget.ValidationTextarea("sprytf_address", {minChars:10, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone    = new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail     = new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
var sprytf_type     = new Spry.Widget.ValidationSelect("sprytf_type");
//-->
</script>
</div>
