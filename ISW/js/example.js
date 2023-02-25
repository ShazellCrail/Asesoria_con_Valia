var pos = 0,test,test_status,question,choice,choices,chA,chB,chC,correct=0;

questions = [
  ["¿Qué es el ahorro?","La acumulación de dinero para ser ricos","Se refiere al almacenaje de una parte del ingreso para utilizarlo en el futuro","Pago de intereses al Coppel","B"],
  ["¿Qué es la capacidad de pago?","Es la cantidad de dinero real del que dispones cada mes para pagar todas tus deudas","El dinero que tienes para prestar en este momento","El dinero que tengo ahorrado en el banco","A"],
  ["Ahorrar tambien significa no desperdiciar recursos como la luz o el agua","S&iacute;","No","No lo sé","A"],
  ["¿Para qué sirve ahorrar?","Alcanzar la riqueza","Alcanzar la fortuna","Alcanzar metas","C"]
];

function _(x) {
  return document.getElementById(x);
}

function renderQuestion(){
 test = _("test");

 if(pos >= questions.length){
   alert("Obtuviste "+correct+" de "+questions.length+" respuestas correctas");
  test.innerHTML = "<h2 class='text-align-center' >Obtuviste "+correct+" de "+questions.length+" respuestas correctas</h2>";
   _("test_status").innerHTML = "Evaluación Completada";
   pos = 0;
   correct = 0;
   return false;
}

 _("test_status").innerHTML = "<center>Pregunta "+(pos+1)+" de "+questions.length+"<center>";

 question = questions[pos][0];
 chA = questions[pos][1];
 chB = questions[pos][2];
 chC = questions[pos][3];

 test.innerHTML = "<center><h3>"+question+"</h3></center>"
 test.innerHTML += "<input type ='radio' name='choices' value='A'>"+chA+"<br>"
 test.innerHTML += "<input type ='radio' name='choices' value='B'>"+chB+"<br>"
 test.innerHTML += "<input type ='radio' name='choices' value='C'>"+chC+"<br><br>"
 test.innerHTML += "<button onclick ='checkAnswer()' class='btn'> Enviar Respuesta </button>"

}

function checkAnswer(){
  choices = document.getElementsByName("choices");

  for(var i=0; i<choices.length; i++){
    if(choices[i].checked){
      choice = choices[i].value;
    }
  }

  if(choice == questions[pos][4]){
    correct++;
  }
  pos++;
  renderQuestion();
}

window.addEventListener("load",renderQuestion,false);
