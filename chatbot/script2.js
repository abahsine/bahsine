document.addEventListener("DOMContentLoaded", function() {
    //recuprer les elements userInput,chatDisplay,sendButton dans des variables//
    const chatDisplay = document.getElementById("chat-display");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");

//ajouter un gestionnaire d'evenement click pour la button d'envoie//
sendButton.addEventListener("click",function(){
    //recuperer la valeur entrée//
    const userMessage = userInput.value
    //aficher le message de user //
    displayMessage(userMessage,'user');
    //renitialiser l'entrée pour une prochaine input
    userInput.value = ""
    // get la réponse (le deux fonctions displayMessage() , getResponse() sont defini dans la suite) //
    getResponse(userMessage)
})
//affichage d'un message// 
function displayMessage(message,sender){
    //creer une nouvelle element div //
    const messageElement = document.createElement("div")
    //attribué la class selon si c un boot ou un user//
    messageElement.classList.add(sender)
    //ajouter  le contenu de l'element //
    if (sender == 'user'){
        //si le message de user 
          messageElement.textContent = "Vous : " + message
        //sinon c'est le bot
    }else {
          messageElement.textContent = "bot    : " + message
    }
  
    //l'integrer comme child de l'element parent chatDsiplay //
    chatDisplay.appendChild(messageElement)
    //mettre un scroll verticale pour l'element chat display//
    chatDisplay.scrollTop = chatDisplay.scrollHeight

}
// fonction get la réponse //
function getResponse(message){
    //generer la reponse est la stocké dans une variable//
    const botResponse = generateResponse(message)
    //ajouter une fonction de time 500ms pour l'affichage , ca nous evite les affichage immediat//
    setTimeout(function() {
        displayMessage(botResponse,'bot')
    },500)
}
//generer une réponse //
function generateResponse(message) {
    //transformer la chaine de caractere  en miniscule et chercher un key words comme exemple Bonjour dans le message user//
    if (message.toLowerCase().includes("bonjour")) {
        //retourner cette réponse 
      return "Bonjour ! Comment puis-je vous aider ?";

    } else if (message.toLowerCase().includes("bonsoir")) {
      return "Bonsoir ! En quoi puis-je vous assister ?";
    } else if (message.toLowerCase().includes("quel est votre nom")) {
        return "Je m'appelle abdelilah bahsine .";
    } else if (message.toLowerCase().includes("quelle est votre passion")) {
      return "je suis passioné par les technologies notamment le developpement web.";
    } else if (message.toLowerCase().includes("quel est votre langage de programmation préféré ")) {
      return " JavaScript , python , php.";
    } else if (message.toLowerCase().includes("quel est votre parcours")) {
      return "Je suis en reconversion professionnelle pour devenir developpeur web , actuellement je travaille comme agent d'inspection.";
    }  else if (message.toLowerCase().includes("quelle sont vos qualitées ")) {
      return "rigoureux ,descipliné et  Ambitieux.";
    } else {
      return "Désolé, je ne comprends pas votre demande.";
    }
  }
});
