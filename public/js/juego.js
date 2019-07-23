window.onload= function(){
  const startButton = document.getElementById('start-btn');
  const nextButton = document.getElementById('next-btn');
  const questionContainer = document.querySelector('.questionContainer');
  const questionElement = document.getElementById('question');
  const answerButtons = document.getElementById('answer-buttons');
  const salir = document.querySelector('.salir');

  let shuffleQuestions, currentQuestionIndex;

  startButton.addEventListener('click', startGame);   //cuando haga click llama a la function startGame
  nextButton.addEventListener('click', ()=>{
    currentQuestionIndex ++;
    answerButtons.style.pointerEvents = "auto";
    nextQuestion();
  })

  function startGame(){
    let time = setInterval(restarTiempo, 1000)
    console.log('started');
    answerButtons.classList.remove('hide');
    salir.classList.remove('hide');
    startButton.classList.add('hide');   //agrego el atributo hide en startButton, para que desaparezca al hacer clist en comenzar
    questionContainer.classList.remove('hide'); //Le quito el atributo
    shuffleQuestions = questions.sort(() => Math.random()); //mezcla las preguntas
    currentQuestionIndex = 0;
    nextQuestion();  //Ejecuta metodo nextQuestion, siguiente pregunta

  }

  function nextQuestion(){
    resetState();
    showQuestion(shuffleQuestions[currentQuestionIndex]);

  }

  function showQuestion(question){  //la funcion que muestra las preguntas
    questionElement.innerText = question.question;
    question.answers.forEach(answer=>{
      const button = document.createElement('button'); //creo elemento button
      button.innerText= answer.text;  //segun los answers se crea la cantidad de botones necesarios.
      button.classList.add('button');   //le doy un atributo button para que tenga los mismos estilos que los botones de html
      if (answer.correct) {
        button.dataset.correct = answer.correct;
      }
       button.addEventListener('click', selectAnswer);
       answerButtons.appendChild(button);  //agrego el boton recien creado

    })
  }
  function resetState(){
    clearStatusClass(document.querySelector('.game'));
    nextButton.classList.add('hide');
    while(answerButtons.firstChild){  //Si exite hijos del answerButtion
      answerButtons.removeChild(answerButtons.firstChild);      //removelo, sacalo
    }
  }
  function selectAnswer(e){  //permite seleccionar las respuestas
    const selectedButton = e.target;  //cuando se clickea el elemento
    const correct = selectedButton.dataset.correct;
    if(correct) {
      sumarPuntos();
    }
    setStatusClass(document.querySelector('.game'), correct);

    Array.from(answerButtons.children).forEach(button => {
      setStatusClass(button, button.dataset.correct);
    })
    if (shuffleQuestions.length >currentQuestionIndex + 1) {
        nextButton.classList.remove('hide');
    } else{
      startButton.innerText = 'Reiniciar';
      startButton.classList.remove('hide');
    }
  }

  function setStatusClass(element, correct){
    clearStatusClass(element);
    answerButtons.style.pointerEvents = "none";
      if(correct){
        element.classList.add('correct');
        document.getElementById('puntaje').innerHTML = `<strong> Puntaje: ${puntos}</strong>`;  //la respuesta correcta
        // element.onclick=function(){
        //   sumarPuntos();
        // }
      }else{
        element.classList.add('wrong');  //respuestas incorrectas
        // element.onclick=function(){
        //   restarPuntos();
        // }
      }

    }
  function clearStatusClass(element){
    element.classList.remove('correct');
    element.classList.remove('wrong');
  };


  let puntos = 0;
  function sumarPuntos(){
    // document.getElementById('puntaje').innerHTML = "<strong> Puntaje: </strong>" + puntos;
      puntos = puntos + 5;
    }
  function restarPuntos(){
      puntos = puntos - 5;
    }


  let tiempo= 60;
  function  restarTiempo(){
    tiempo--
    document.getElementById("tiempo").innerHTML = `<strong> Tiempo: ${tiempo}</strong>` ;
    if (tiempo == 0) {
      alert('se acabó el tiempo');
      alert(`su puntaje es: ${puntos}`)
      // Swal.fire(
      //   'Se acabó el tiempo!',
      //   'Su puntaje es: '+ (puntos-5) + '!',
      //   'success',
      // );
      let confirmacion = confirm('¿Queres volver a jugar?')
      if (confirmacion== true) {
        tiempo == 0;   //quiero que el tiempo vuelva en 0
        puntos == 0;
        window.location= "/juego"
      } else{
        window.location= "/juego"
      }

      // const span = document.createElement('span')
      // span.innerHTML= '<strong> Se acabo el tiempo </strong>'
      clearInterval(time);
  }
 }

 //Matriz de preguntas con las opciones
 const questions=[
   {
     question: '¿En que año nació Messi?',
     answers:[
       {text:'1980', correct: false},  //objetos literales, con sus propiedades.
       {text:'1987', correct: true},
       {text:'1989', correct: false},
       {text:'1985', correct: false}
     ],

   },
   {
     question: '¿Cuál es el lugar más frío de la tierra? ',
     answers:[
       {text:'Antártida', correct: true},
       {text:'Oymyakon', correct: false},
       {text:'North Ice', correct: false},
       {text:'Amundsen-Scott', correct: false}
     ],
   },

   {
     question: '¿Quién escribió La Odisea?  ',
     answers:[
       {text:'Eurípides', correct: false},
       {text:'Esquilo', correct: false},
       {text:'Homero', correct: true},
       {text:'Hesíodo', correct: false}
     ],
   },
  {
    question:'¿Cómo se llama la capital de Mongolia?',
    answers:[
    {text:'Bridgetown', correct: false},
    {text:'Tirana', correct: false},
    {text:'Ulan Bator', correct: true},
    {text:'Yaundé', correct: false}
  ],
},
 {
   question:'¿Cuál es el río más largo del mundo?',
   answers:[
   {text:'Nilo', correct: false},
   {text:'Amazonas', correct: true},
   {text:'Danubio', correct: false},
   {text:'Misisipi', correct: false}
 ],
},
{
  question:'¿Cómo se llama la Reina del Reino Unido?',
  answers:[
  {text:'Mary I', correct: false},
  {text:'Isabel I', correct: false},
  {text:'Isabel II', correct: true},
  {text:'Victoria', correct: false}
],
},

{
  question: '¿Dónde originaron los juegos olímpicos?',
  answers:[
    {text:'Grecia', correct: true},
    {text:'Roma', correct: false},
    {text:'Croacia', correct: false},
    {text:'Francia', correct: false}
  ],
},

{
  question:' ¿Qué cantidad de huesos en el cuerpo humano?',
  answers:[
  {text:'305', correct: false},
  {text:'206', correct: true},
  {text:'225', correct: false},
  {text:'280', correct: false}
],
},

{
  question: '¿Cuándo acabó la II Guerra Mundial?  ',
  answers:[
    {text:'1950', correct: false},
    {text:'1955', correct: false},
    {text:'1960', correct: false},
    {text:'1945', correct: true}
  ],
},

{
  question: '¿En qué país se encuentra la torre de Pisa?',
  answers:[
    {text:'Italia', correct: true},
    {text:'Francia', correct: false},
    {text:'Inglaterra', correct: false},
    {text:'España', correct: false}
  ],
},

{
  question:'¿Cómo se denomina el resultado de la multiplicación?',
  answers:[
  {text:'resto', correct: false},
  {text:'divisor', correct: false},
  {text:'producto', correct: true},
  {text:'cociente', correct: false}
],
},

{
  question:' ¿Cuál es el océano más grande? ',
  answers:[
  {text:'Océano Atlántico', correct: false},
  {text:'Océano Pacífico', correct: true},
  {text:'Océano Indico', correct: false},
  {text:'Océano Antártico', correct: false}
],
},

{
  question: '¿Cuál es el país más grande del mundo?',
  answers:[
    {text:'Estados Unidos', correct: false},
    {text:'Brasil', correct: false},
    {text:'China', correct: false},
    {text:'Rusia', correct: true}
  ],
},

{
  question:'¿Qué deporte practicaba Michael Jordan?',
  answers:[
  {text:'Rugby', correct: false},
  {text:'Fútbol', correct: false},
  {text:'Baloncesto', correct: true},
  {text:'Tennis', correct: false}
],
},

{
  question: 'Si 50 es el 100%, ¿cuánto es el 90%?',
  answers:[
    {text:'45', correct: true},
    {text:'40', correct: false},
    {text:'48', correct: false},
    {text:'42', correct: false}
  ],
},
{
  question:'¿Cuál es la ciudad de los rascacielos?',
  answers:[
  {text:'Brasilia', correct: false},
  {text:'Miami', correct: false},
  {text:'Nueva York', correct: true},
  {text:'Washington', correct: false}
],
},

{
  question:'¿Cuál fue el primer metal que empleó el hombre?',
  answers:[
  {text:'Oro', correct: false},
  {text:'Plata', correct: false},
  {text:'Cobre', correct: true},
  {text:'Bronce', correct: false}
],
},

{
  question: '¿Quién ganó el mundial de 2014?',
  answers:[
    {text:'Alemania', correct: true},
    {text:'Brasil', correct: false},
    {text:'Francia', correct: false},
    {text:'Estados Unidos', correct: false}
  ],
},

{
  question: '¿En qué país se usó la primera bomba atómica en combate? ',
  answers:[
    {text:'Estados Unidos', correct: false},
    {text:'Brasil', correct: false},
    {text:'China', correct: false},
    {text:'Japón', correct: true}
  ],
},

{
  question:'¿Cuántos corazones tienen los pulpos?',
  answers:[
  {text:'2', correct: false},
  {text:'3', correct: true},
  {text:'1', correct: false},
  {text:'Ninguno', correct: false}
],
},
 ]
}
// <i class="fas fa-hourglass-half"></i>
