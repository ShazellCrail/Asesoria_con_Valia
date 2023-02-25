var pos = 0,test,test_status,question,choice,choices,chA,chB,chC,correct=0;

questions = [
  ["Es una causa de la inflación","Falta de programas sociales","El aumento de la demanda","Bajo nivel educativo","B"],
  ["Es un tipo de inflación","Deflación","Inflación acelerada","Subinflación","A"],
  ["Se da en el caso de que existan inflaciones desmedidas","Inflación galopante","Inflación moderada","Hiperinflación","A"],
  ["Una manera de calcular la inflación es mediante el deflactor del PIB","No","No sé","Sí","C"]
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
