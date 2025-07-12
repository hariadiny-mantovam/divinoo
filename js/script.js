
const quizData = [
{
  pergunta: "Qual sua preferência de sabor?",
  respostas: [
  { texto: "Intenso e marcante", perfil: "sommelier" },
  { texto: "Equilibrado e frutado", perfil: "premium" },
  { texto: "Leve e fácil de beber", perfil: "essencial" }
  ]
},
{
  pergunta: "Com que frequência você bebe vinho?",
  respostas: [
  { texto: "Apenas em ocasiões especiais", perfil: "essencial" },
  { texto: "Quase todo fim de semana", perfil: "premium" },
  { texto: "Sempre que posso", perfil: "sommelier" }
  ]
},
{
  pergunta: "Com quem você costuma compartilhar vinho?",
  respostas: [
  { texto: "Com amigos em jantares", perfil: "premium" },
  { texto: "Com familiares em casa", perfil: "essencial" },
  { texto: "Com enófilos que também entendem", perfil: "sommelier" }
]
}
  ];

  let currentQuestion = 0;
  let perfilContagem = { essencial: 0, premium: 0, sommelier: 0 };

  function startQuiz() {
    document.getElementById('quizContainer').style.display = 'block';
    currentQuestion = 0;
    perfilContagem = { essencial: 0, premium: 0, sommelier: 0 };
    mostrarPergunta();
  }

  function mostrarPergunta() {
    const q = quizData[currentQuestion];
    document.getElementById('quizQuestion').innerText = q.pergunta;
    const respostasDiv = document.getElementById('quizAnswers');
    respostasDiv.innerHTML = '';

    q.respostas.forEach(resp => {
      const btn = document.createElement('button');
      btn.className = 'btn btn-outline-light m-2 w-100';
      btn.innerText = resp.texto;
      btn.onclick = function() { selecionarResposta(resp.perfil, btn);};
      respostasDiv.appendChild(btn);
    });
  }

  function selecionarResposta(perfil, btnClicado) {
    perfilContagem[perfil]++;
    document.querySelectorAll('#quizAnswers button').forEach(btn => {btn.classList.remove('selected');
    btn.disabled = true;
  });

  btnClicado.classList.add('selected');
 }

  function nextQuestion() {
    if (currentQuestion < quizData.length - 1) {
      currentQuestion++;
      mostrarPergunta();
    } else {
      mostrarResultado();
    }
  }

  function mostrarResultado() {
    const resultado = Object.entries(perfilContagem).sort((a, b) => b[1] - a[1])[0][0];

    let mensagem = '';
    if (resultado === 'essencial') {
      mensagem = "Seu perfil é Essencial: Você valoriza vinhos acessíveis, leves e fáceis de apreciar!";
    } else if (resultado === 'premium') {
      mensagem = "Seu perfil é Premium: Você busca equilíbrio, experiências e sabores distintos.";
    } else if (resultado === 'sommelier') {
      mensagem = "Seu perfil é Sommelier: Você tem um paladar apurado e aprecia vinhos exclusivos!";
    }

    document.getElementById('quizBox').innerHTML = `
      <h2>Resultado do seu Perfil:</h2>
      <p>${mensagem}</p>
      <a href="planos.html" class="btn btn-danger mt-4">Ver planos recomendados</a>
      <button class="btn btn-outline-light mt-2" onclick="fecharQuiz()">Fechar</button>
    `;
  }

  function fecharQuiz() {
    document.getElementById('quizContainer').style.display = 'none';
  }


  //Seleção única no formulario

  function marcarUm(checkbox){
    var checkboxes = document.getElementsByName('infor');
    for (var i = 0; i < checkboxes.length; i++){
      if (checkboxes[i] !== checkbox){
        checkboxes[i].checked = false;
      }

    }
  }