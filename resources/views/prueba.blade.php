@extends("layoutsLanding.indexLanding")
@section("landing")



<html>

<head>
  <meta charset="utf-8">
  <title>Checkout</title>
  <script type="text/javascript" src="https://pay.conekta.com/v1.0/js/conekta-checkout.min.js"></script>
</head>

<body>
  <div id="conektaIframeContainer" style="height: 1350px;"></div>
  <script type="text/javascript">
    window.ConektaCheckoutComponents.Card({
      targetIFrame: "#conektaIframeContainer",
//Este componente "allowTokenization" permite personalizar el tokenizador, por lo que su valor siempre será TRUE
      allowTokenization: true, 
      checkoutRequestId: "8132d8a3-5919-4b88-a5e9-7be905f69134", // // Checkout request ID, es el mismo ID generado en el paso 1
      publicKey: "Key_LlavePUBLICA123456789", // Llaves: https://developers.conekta.com/docs/como-obtener-tus-api-keys
      options: {
        styles: {
// inputType modifica el diseño del Web Checkout Tokenizer
//        inputType: 'basic' // 'basic' | 'rounded' | 'line'
          inputType: 'rounded',
// buttonType modifica el diseño de los campos de llenado de información del  Web Checkout Tokenizer
//        buttonType: 'basic' // 'basic' | 'rounded' | 'sharp'
          buttonType: 'rounded',
//Elemento que personaliza el borde de color de los elementos            
          states: {
            empty: {
              borderColor: '#FFAA00' // Código de color hexadecimal para campos vacíos
            },
            invalid: {
              borderColor: '#FF00E0' // Código de color hexadecimal para campos inválidos
            },
            valid: {
              borderColor: '#0079c1' // Código de color hexadecimal para campos llenos y válidos
            }
          }
        },
        languaje: 'es', // 'es' Español | 'en' Ingles
//Elemento que personaliza el botón que finzaliza el guardado y tokenización de la tarjeta
        button: {
          colorText: '#ffffff', // Código de color hexadecimal para el color de las palabrás en el botón de: Alta de Tarjeta | Add Card
          //text: 'Agregar Tarjeta***', //Nombre de la acción en el botón ***Se puede personalizar
          backgroundColor: '#301007' // Código de color hexadecimal para el color del botón de: Alta de Tarjeta | Add Card
        },
//Elemento que personaliza el diseño del iframe
        iframe: {
          colorText: '#65A39B',  // Código de color hexadecimal para el color de la letra de todos los campos a llenar
          backgroundColor: '#FFFFFF' // Código de color hexadecimal para el fondo del iframe, generalmente es blanco.
        }
      },
      onCreateTokenSucceeded: function(token) {
        console.log(token)
      },
      onCreateTokenError: function(error) {
        console.log(error)
      }
    })
  </script>
</body>

</html>

@endsection