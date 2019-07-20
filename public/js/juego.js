window.onload= function(){
  const startButton = document.getElementById('start-btn')
  const nextButton = document.getElementById('next-btn')
  const questionContainer = document.querySelector('.questionContainer')
  const questionElement = document.getElementById('question')
  const answerButtons = document.getElementById('answer-buttons')

  let shuffleQuestions, currentQuestionIndex

  startButton.addEventListener('click', startGame)
  nextButton.addEventListener('click', ()=>{
    currentQuestionIndex++
    nextQuestion()
  })
  function startGame(){
    console.log('started')
    startButton.classList.add('hide')
    shuffleQuestions = questions.sort(() => Math.random() - .5)
    currentQuestionIndex = 0
    questionContainer.classList.remove('hide')
    nextQuestion()

  }

  function nextQuestion(){
    resetState()
    showQuestion(shuffleQuestions[currentQuestionIndex])

  }

  function showQuestion(question){
    questionElement.innerText = question.question
    question.answers.forEach(answer=>{
      const button = document.createElement('button')
      button.innerText= answer.text
      button.classList.add('button')
      if (answer.correct) {
        button.dataset.correct = answer.correct
      }
       button.addEventListener('click', selectAnswer)
      answerButtons.appendChild(button)

    })
  }
  function resetState(){
    clearStatusClass(document.querySelector('.game'))
    nextButton.classList.add('hide')
    while(answerButtons.firstChild){
      answerButtons.removeChild
      (answerButtons.firstChild)
    }
  }
  function selectAnswer(e){
    const selectedButton = e.target
    const correct = selectedButton.dataset.correct
    setStatusClass(document.querySelector('.game'), correct)
    Array.from(answerButtons.children).forEach(button => {
      setStatusClass(button, button.dataset.correct)
    })
    if (shuffleQuestions.length >currentQuestionIndex + 1) {
        nextButton.classList.remove('hide')
    }else{
      startButton.innerText = 'Restart'
      startButton.classList.remove('hide')
    }

  }

  function setStatusClass(element, correct){
    clearStatusClass(element)
      if(correct){
        element.classList.add('correct')
      }else{
        element.classList.add('wrong')
      }
    }
  function clearStatusClass(element){
    element.classList.remove('correct')
    element.classList.remove('wrong')
  }
  //Matriz de preguntas respuestas
  const questions=[
    {
      question: '¿En que año nació Messi?',
      answers:[
        {text:'1980', correct: false},
        {text:'1987', correct: true},
        {text:'1989', correct: false},
        {text:'1985', correct: false}
      ],

    },
    {
      question: '¿Cuantos años tiene Messi?',
      answers:[
        {text:'30', correct: false},
        {text:'32', correct: true},
        {text:'40', correct: false},
        {text:'31', correct: false}
      ],

    },
  ]

}
