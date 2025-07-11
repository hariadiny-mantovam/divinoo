let respostas = [];

    function abrirQuiz() {
      document.getElementById("quizContainer").style.display = "block";
      document.getElementById("resultado").innerText = "";
      respostas = [];
    }

    function responder(tipo) {
      respostas.push(tipo);
      if (respostas.length === 2) {
        const perfil = analisarPerfil(respostas);
        document.getElementById("resultado").innerText = "Seu perfil é: " + perfil;
      }
    }

    function analisarPerfil(respostas) {
      const contagem = { clássico: 0, descontraído: 0, aventura: 0 };
      respostas.forEach(r => contagem[r]++);
      const perfil = Object.entries(contagem).sort((a, b) => b[1] - a[1])[0][0];

      switch (perfil) {
        case 'clássico': return "Clássico Elegante 🍷 – Vinhos encorpados e refinados combinam com você.";
        case 'descontraído': return "Descontraído 🌞 – Vinhos leves e frutados são a sua cara.";
        case 'aventura': return "Aventureiro 🔥 – Rótulos exóticos e ousados são seu estilo!";
        default: return "Indefinido.";
      }
    }

    function fecharQuiz() {
      document.getElementById("quizContainer").style.display = "none";
    }