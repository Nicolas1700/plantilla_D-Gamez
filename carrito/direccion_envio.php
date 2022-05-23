<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Dirección de envio</h4>
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Primer nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Su nombre es requerido.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Apellidos</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Su apellido es requerido
              </div>
            </div>
          </div>
  
          <div class="mb-3">
            <label for="username">Nombre de usuario</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback" style="width: 100%;">
                Su nombre de usuario es requerido.
              </div>
            </div>
          </div>
  
          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Opcional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
            <div class="invalid-feedback">
              Ingrese una dirección de correo electrónico válido para el envío.
            </div>
          </div>
  
          <div class="mb-3">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Por favor ingrese su correo electronico.
            </div>
          </div>
  
          <div class="mb-3">
            <label for="address2">Dirección 2 <span class="text-muted">(Opcional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>
  
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Pais</label>
              <select class="custom-select d-block w-100" id="country" required>
                <option value="">Seleccione</option>
                <option>Colombia</option>
              </select>
              <div class="invalid-feedback">
                Selecciones un pais valido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">State</label>
              <select class="custom-select d-block w-100" id="state" required>
                <option value="">Departamento</option>
                <option>Bogotá</option>
              </select>
              <div class="invalid-feedback">
                Proporcione un estado valido.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="zip">Codigo postal</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                El codigo postal es requerido.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">La dirección de envío es la misma que mi dirección de facturación</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Guarda esta información para una próxima vez</label>
          </div>
          <hr class="mb-4">
  
          <h4 class="mb-3">Pago</h4>
  
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Tarjeta de credito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Tarjeta de debito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nombre de la tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
              <div class="invalid-feedback">
                El numero de tarjeta es requerido
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Numero de tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Se requiere número de tarjeta de crédito
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Fecha de vencimiento</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                La fecha de vencimiento es requerida.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Codigo de seguridad requerido.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar con el pago</button>
        </form>
      </div>
    </div>
</body>
</html>