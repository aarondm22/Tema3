$(function() {

  /**
   * Función que ejecuta otras funciones que deben ser inicializadas al cargar el script.
   */
  function init() {
    setupElements();
  }

  /**
   * Función para configurar la interfaz de los elementos
   */
  function setupElements() {
    setupDialog();
    setupAccordion();
  }

  /**
   * Configuramos un dialogo de forma visual
   */
  function setupDialog(){
    $( "#wrapper_dialog" ).dialog({
      autoOpen: false,
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
    $( "#show_dialog_button" ).on( "click", function() {
      checkAnswers();
    });
  }

  function setupAccordion(){
    $( "#wrapper_accordion" ).accordion({
      collapsible: true
    });
  }

  /**
   * Función que obtiene el número de respuestas correcta y las muestras.
   */
  function checkAnswers() {
      var cont_ok_answers = 0;
      cont_ok_answers += checkFirstQuestion();
      cont_ok_answers += checkSecondQuestion();
      cont_ok_answers += checkThirdQuestion();
      setResult(cont_ok_answers);
      showDialog(cont_ok_answers);
  }

  /*
   * Questions: Figura y fondo. Marca la incorrecta.
   * Ok Answer: Ninguna es correcta
   * @return int
   */
  function checkFirstQuestion() {
    var cont = 0;
    if ($('#question1_answer3').prop('checked')) {
      cont++;
    }
    return cont;
  }

  /*
   * Questions: Marca las leyes de Gestalt
   * Ok Answer: 1 y 4
   * @return int
   */
  function checkSecondQuestion() {
    var cont = 0;
    if ($("#question2_answer1").is(':checked')) {
        cont++;
    }
    if ($("#question2_answer4").is(':checked')) {
        cont++;
    }
    return cont++;
  }


  /*
   * Questions: Psicología de cada color, elige la opción correcta
   * Ok Answer: 1, 3, 4
   * @return int
   */
  function checkThirdQuestion() {
    var cont = 0;
    if ($( "#blanco option:selected" ).val() == "question3a_answer1") {
        cont++;
    }
    if ($( "#rojo option:selected" ).val() == "question3b_answer3") {
        cont++;
    }
    if ($( "#naranja option:selected" ).val() == "question3c_answer4") {
        cont++;
    }
    return cont++;
  }

  /**
   * Establece el resultado en un elemento HTML.
   */
  function setResult(total_ok_answers){
        $("#text_result").html(total_ok_answers)
  }

  /**
   * Muestra el dialogo con el resultado final.
   */
  function showDialog(){
    $("#wrapper_dialog").dialog( "open" );
  }

  /**
   * Inicializo los scripts necesarios para la aplicación. Configuración, etc.
   */
  init()
});
