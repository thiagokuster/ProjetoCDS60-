<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<div class="sobre">
    <h1>Inovação em Ação: Catalogando o Futuro da SESA</h1>
    <p>
      No coração da Secretaria de Estado da Saúde (SESA), o progresso
      tecnológico e a eficiência operacional estão na vanguarda de nosso
      compromisso com a qualidade do atendimento e a melhoria da saúde da
      população. Em nossa busca contínua por inovação e otimização, estamos
      orgulhosos de apresentar o nosso "Catálogo de Sistemas", uma ferramenta
      que transformará a maneira como gerenciamos e acessamos informações
      vitais.
    </p>
    <br />
    <h2>Premissa</h2>
    <p>
      Este site foi desenvolvido sob a premissa de facilitar a vida de nossos
      profissionais e aprimorar nossa capacidade de prestação de serviços de
      saúde. O Catálogo de Sistemas não é apenas uma lista estática de
      sistemas utilizados pela SESA; é uma plataforma dinâmica que simplifica
      o acesso e a gestão de dados, além de fornecer uma funcionalidade única
      e poderosa: a geração de planilhas Excel a partir dos dados contidos no
      catálogo. Imagine a facilidade de encontrar e explorar informações
      detalhadas sobre todos os sistemas em uso na SESA, desde suas descrições
      e finalidades até seus responsáveis e atualizações mais recentes.
      Com nosso catálogo, você terá acesso imediato a um vasto repositório de
      dados, tudo em um único local, simplificando a tomada de decisões
      informadas e agilizando nossos processos.
    </p>
    <br />
    <h2>Funcionalidades</h2>
    <p>
      Além disso, o nosso Catálogo de Sistemas permite que você edite e
      atualize os dados diretamente na plataforma, garantindo que as
      informações estejam sempre precisas e atualizadas. Não apenas
      proporcionamos a transparência e a acessibilidade de informações, mas
      também capacitamos nossos colaboradores a contribuir ativamente para a
      manutenção desses registros.
    </p>
  </div>
<button class="chatbot-toggler">
  <span class="material-symbols-outlined">mode_comment</span>
  <span class="material-symbols-outlined"></span></button>

  <div class="chatbot">

    <header>
      <h2>Chatbot</h2>
      <span class="material-symbols-outlined"></span></button>
    </header>

    <ul class="chatbox">
      <li class="chat incoming">
        <span class="material-symbols-outlined">smart_toy</span>
        <p>Olá 👋 eu sou Bit. <br><br> Vou ajudar a tirar suas dúvidas sobre o nosso Catálogo de Sistemas.<br><br>
          Escolha uma das opções:
        </p>


      </li>
      <li class="chat incoming">
        <span class="material-symbols-outlined">smart_toy</span>
        <p>1 - Catalogar Sistemas <br><br>
          2 - Consultar Sistemas <br><br>
          3 - Exportar para o Excel <br>
        </p>
      </li>
      <li class="chat outgoing">
       
      </li>
   
     
    </ul>
    <div class="chat-input">
      <textarea placeholder="Digite aqui..." required maxlength="4" oninput="this.value = this.value.replace(/[^0-9]/g, '')"></textarea>
      <span id="send-btn" class="material-symbols-outlined">send</span>
    </div>
  </div>
<script src="script.js" defer></script>
</div>
<style>
.sobre {
  padding: 20px;
  background-color: #fff;
  max-width: 800px;
  margin: 40px auto;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.516);
  text-align: center;
  align-items: center;
}

.sobre h1 {
  font-size: 36px;
  color: palevioletred;
  margin-top: 0;
}

.sobre h2 {
  font-size: 32px;
  color: palevioletred;
  margin-top: 0;
}

.sobre p {
  font-size: 16px;
  line-height: 1.7;
  color: #333;
}


.chatbot-toggler{
  position:fixed;
  right: 200px;
  bottom: 122px;
  height: 50px;
  width: 50px;
  color: #fff;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  outline: none;
  cursor: pointer;
  background: #3498db;
  border-radius: 50%;
  transition: all 0.2s ease;
  
}

.chatbot-toggler:hover{
  background: palevioletred;
}


.chatbot-toggler span{
  position: absolute;
  margin-bottom: 5px;
}
.show-chatbot .chatbot-toggler span:first-child
.chatbot-toggler span:last-child{
  opacity: 0;
}

.show-chatbot .chatbot-toggler span:last-child{
  opacity: 1;
}

.chatbot{
  position: fixed;
  right: 40px;
  bottom: 190px;
  width: 420px;
  transform: scale(0.5);
  opacity: 0;
  pointer-events: none;
  overflow: hidden;
  background: #fff;
  border-radius: 15px;
  transform-origin: bottom right;
  box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
              0 32px 64px -48px  rgba(0, 0, 0, 0.5); 
              transition: all 0.2s ease;
}

.show-chatbot .chatbot{
  transform: scale(1);
  opacity: 1;
  pointer-events: auto;
}


.chatbot header{
  background: #3498db;
  padding: 16px 0;
  text-align: center;
  position: relative;
}

.chatbot header h2{
  color: #fff;
  font-size: 1.4rem;
}

.chatbot header span{
  position: absolute;
  right: 20px;
  top: 50%;
  color: #fff;
  cursor: pointer;
  display: none;
  transform: translateY(-50%);
}

.chatbot .chatbox{
  height: 500px;
  overflow-y: auto;
  padding: 30px 20px 70px;
}

.chatbot .chat{
  display: flex;
}

.chatbox .incoming span{
 height: 32px;
 width: 32px;
 color: #fff;
 align-self: flex-end;
 background-color: #3498db;
 text-align: center;
 line-height: 32px;
 border-radius: 4px;
 margin: 0 10px 30px 0;
}

.material-symbols-outlined{
  margin-bottom: 30px;
}

.chatbox .outgoing{
  margin: 0px 0;
  justify-content: flex-end;
}

.chatbox .chat p {
  color: #fff;
  max-width: 75%;
  font-size: 0.95rem;
  margin-bottom: 20px;
  padding: 12px 16px;
  border-radius: 10px 10px 0 10px;
background: #3498db;
}

.chatbox .incoming p{
  color: #000;
  background: #f2f2f2;
  border-radius: 10px 10px 10px 0;
  margin: 0 0 30px;
}

.chatbot .chat-input{
  position: absolute;
  bottom: 0;
  width: 100%;
  display: flex;
  gap: 5px;
  background: #fff;
  padding: 5px 20px;
  border-top: 1px solid #ccc;
}

.chat-input textarea{
  height: 55px;
  width: 80%;
  border: none;
  outline: none;
  font-size: 0.95rem;
  resize: none;
  padding: 16px 15px 16px 0;
}

.chat-input span{
  align-self: flex-end;
  height: 55px; 
  line-height: 55px;
  color: #3498db;
  font-size: 1.35rem;
  cursor: pointer;
  visibility: hidden;
}

.chat-input textarea:valid ~ span{
  visibility: visible ;
}

@media(max-width:490px){
  .chatbot{
    right: 0;
    bottom: 0px;
    width: 100%;
    height: 100%;
    border-radius: 0;
  }
  .chatbot .chatbox {
    height: 90%;
  }
  .chatbox header span{
    display: block;
  }
}
</style>
<script>

const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");
const chatbotToggler = document.querySelector(".chatbot-toggler")
let userMessage;
const createChatLi = (message, className) => {
  const chatLi = document.createElement("li");
  chatLi.classList.add("chat", className);
  if (className === "incoming") {
    chatLi.innerHTML = `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
  } else {
    chatLi.innerHTML = `<p>${message}</p>`;
  }
  return chatLi;
}
const generateThinkingMessage = () => {
  const thinkingLi = createChatLi("Pensando...", "incoming");
  chatbox.appendChild(thinkingLi);
  chatbox.scrollTo(0, chatbox.scrollHeight);
  return thinkingLi;
}
const handleChat = () => {
  userMessage = chatInput.value.trim();
  if (!userMessage) return;
  chatbox.appendChild(createChatLi(userMessage, "outgoing"));
  chatbox.scrollTo(0, chatbox.scrollHeight);
  const thinkingLi = generateThinkingMessage();
  setTimeout(() => {
    const botResponse = getBotResponse(userMessage);
    thinkingLi.innerHTML = `<span class="material-symbols-outlined">smart_toy</span><p>${botResponse}</p>`;
    chatbox.scrollTo(0, chatbox.scrollHeight);
  }, 1200);

  chatInput.value = "";
}
const getBotResponse = (userMessage) => {
  switch (userMessage) {
    case "0":
      return "1 - Catalogar Sistemas <br><br> 2 - Consultar Sistemas <br><br>  3 - Exportar para o Excel <br>"
    case "1":
      return "Você escolheu Catalogar Sistemas:<br><br>4 - Para saber como adicionar um novo sistema ao catálogo. <br><br>0 - Para retornar as opções iniciais.<br>";
    case "2":
      return "Você escolheu Consultar Sistemas.<br><br><br><br>";
    case "3":
      return "Você escolheu Exportar para o Excel.<br><br><br>";
      case "4":
        return "Sistema em atualização..."
        case "5":
        return "Sistema em atualização..."
        case "6":
        return "Sistema em atualização..."
        case "7":
        return "Sistema em atualização..."
        case "8":
        return "Sistema em atualização..."
        case "9":
        return "Sistema em atualização..."
        case "10":
        return "Sistema em atualização..."
        case "11":
          return "Sistema em atualizaçasdasdasdasdasfasfasfas<br>fasfasfs<br>afasfasfasfasfasfasfasfasf<br>asfasfasfasfasfasfasão..."
    default:
      return "Desculpe, não entendi. Por favor, escolha uma das opções citadas." ;
  }
  
}
sendChatBtn.addEventListener("click", handleChat);
chatbotToggler.addEventListener("click", () =>document.body.classList.toggle("show-chatbot"));
chatInput.addEventListener("keydown", (event) => {
  if (event.key === "Enter" && !event.shiftKey) {
    event.preventDefault();
    handleChat();
  }
});

</script>