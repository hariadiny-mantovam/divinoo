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
    perfilContagem = { essencial: 0, premium: 0, sommelier: 0 }; // Reiniciar contagem
    mostrarPergunta();
  }

  function mostrarPergunta() {
    const perguntaAtual = quizData[currentQuestion];
    document.getElementById('quizQuestion').innerText = perguntaAtual.pergunta;
    const answersDiv = document.getElementById('quizAnswers');
    answersDiv.innerHTML = '';
    perguntaAtual.respostas.forEach((resposta, index) => {
      const button = document.createElement('button');
      button.innerText = resposta.texto;
      button.classList.add('btn', 'btn-outline-danger', 'mb-2', 'w-100');
      button.onclick = () => selecionarResposta(resposta.perfil, button);
      answersDiv.appendChild(button);
    });
  }

  function selecionarResposta(perfilSelecionado, button) {
    perfilContagem[perfilSelecionado]++;
    // Remover a classe 'selected' de outros botões e adicionar ao atual
    const buttons = document.querySelectorAll('#quizAnswers .btn');
    buttons.forEach(btn => btn.classList.remove('selected')); // Remove de todos antes de adicionar ao clicado
    buttons.forEach(btn => btn.disabled = true); // Desabilita todos os botões após a seleção para evitar múltiplas seleções
    button.classList.add('selected');
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
      <a href="${baseURL}#planos" class="btn btn-danger mt-4">Ver planos recomendados</a>
      <button class="btn btn-outline-light mt-2" onclick="fecharQuiz()">Fechar</button>
    `;
  }

  function fecharQuiz() {
    document.getElementById('quizContainer').style.display = 'none';
  }


  //Seleção única no formulario (mantenha como está)
  function marcarUm(checkbox) {
    var checkboxes = document.getElementsByName(checkbox.name);
    checkboxes.forEach(function(currentCheckbox) {
        if (currentCheckbox !== checkbox) {
            currentCheckbox.checked = false;
        }
    });
}


