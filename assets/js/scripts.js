/* Afficher les boutons des questions */
const buttons = document.querySelector("#buttons");
window.addEventListener("load", function(e) {
    for (let i=1; i<=5; i++) {
        let bouton = document.createElement("button");
        bouton.className = "eachButton";
        bouton.id = "button" + i;
        bouton.innerHTML = "Question " + i;
        bouton.onclick = function() {
            getBlock(i)
        }
        buttons.appendChild(bouton)
    }
})

/* Fonction appelée au clic d'un bouton de question */
function getBlock(nb) {
    /* Faire apparaître la question et ses réponses */
    document.querySelector("#question" + nb).style.display = "block";

    /* Actionner le compteur */ /* TROUVER COMMENT EMPECHER LE REDEMARRAGE... */
    startCountDown(seconds, element, nb)
}

/* Mettre en place le compteur */
let seconds = 20;
let element = document.querySelector('#count-down-timer');
let countInterval;
function startCountDown(seconds, element, nb) {
    element.textContent = seconds + " secondes";
    let sec = 0;
    countInterval = setInterval(function() {
        sec = parseInt(seconds);
        element.textContent = sec + " secondes";
        seconds--;
        if (seconds < 0) {
            endQuestion(nb);
            console.log("Pas de réponse !");
            answers.push("none");
            console.log(answers)
        }
    }, 1000)
}

/* Récupérer la réponse choisie */
let answers = []; // Tableau des réponses du joueur.
function getAnswer(eachAnswer, i) {
    console.log(eachAnswer.innerText);
    answers.push(eachAnswer.innerText);
    console.log(answers);
    endQuestion(i)
}

for (let i=1; i<=5; i++) { //Numéro de question
    for (let j=1; j<=4; j++) { //Numéro de réponse
        let eachAnswer = document.querySelector("#rep" + i + "-" + j);
        eachAnswer.addEventListener("click", event => getAnswer(event.target, i))
    }
}

/* Fonction appelée par le compteur et getAnswer() */
function endQuestion(nb) {
    /* Arrêter le compteur */
    clearInterval(countInterval);
    //console.log(countInterval);
    element.textContent = "20 secondes";

    let quest = document.querySelector("#question" + nb);
    /* Faire disparaître la question et ses réponses */
    quest.style.display = "none";

    /* Faire disparaître le bouton de la question terminée et afficher le bouton suivant */
    for (let i=1; i<=5; i++) {
        if (i === nb) {
            document.querySelector("#button" + i).style.display = "none";
            if ((i+1) <= 5) {
                document.querySelector("#button" + (i+1)).style.display = "block"
            } else { /* Si c'est le dernier bouton */
                console.log("Fini !");
                const gameOver = document.querySelector("#result");
                /* Faire apparaître le bloc final */
                gameOver.style.display = "inline-block";
                console.log(answers);
                console.log(JSON.stringify(answers))
                //requestData();
                //requestDataAsync()
                sendUserAnswers()
            }
        }
    }
}

/* Fonction de test d'appel AJAX synchrone */
function requestData() {
    // On crée une instance de l'objet.
    let appel = new XMLHttpRequest();
    // On spécifie le mode de transmission des données, l'URL et le mode de transmission de la requête
    // (false pour synchrone, true pour asynchrone).
    appel.open("GET", location.href, false);
    // On exécute la requête.
    appel.send(null);
    // On affiche une alerte quand la requête est terminée.
    if (appel.readyState == 4) alert(appel.response)
    // Les différentes valeurs de "readyState" sont : 0 (uninitialized), 1 (loading), 2 (loaded),
    // 3 (interactive) et 4 (complete).
    // alert(appel.response) redonne tout le code de la page HTML.
}

/* Fonction de test d'appel AJAX asynchrone */
function requestDataAsync() {
    // On crée une instance de l'objet.
    let appel = new XMLHttpRequest();
    // On spécifie le mode de transmission des données, l'URL et le mode de transmission de la requête.
    appel.open("GET", location.href, true);
    // On utilise l'asynchrone pour afficher une alerte quand la requête est terminée.
    appel.onreadystatechange = function() {
        if (appel.readyState == 4) alert(appel.responseText)
    }
    // On exécute la requête.
    appel.send(null);
}

/* Fonction d'envoi des réponses avec AJAX */
async function sendUserAnswers() {
    /*let userAnswers = new XMLHttpRequest();
    //userAnswers = answers;
    //console.log("Réponses choisies : " + userAnswers);
    userAnswers.open("POST", "user_answers.php", true);
    userAnswers.onreadystatechange = function() {
        if (userAnswers.readyState == 4) alert(userAnswers.responseText)
    }
    // La ligne ci-dessous est requise pour le mode "POST".
    userAnswers.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    userAnswers.send(answers);*/

    /*let response = await fetch('http://127.0.0.1:8000/build/app.js');
    if (response.ok) {
        let json = await response.json();
        console.log(json)
    } else {
            alert('HTTP-Error : ' + response.status)
    }*/

    /*fetch('http://127.0.0.1:8000/build/app.js')
        .then(response => response.json())*/
    
    let data = {
        test: answers,
    };
    
    /*let headers: {
       "Content-Type": "application/json"
      }*/

    console.log(answers) // Bien lu

    let response = await fetch("http://127.0.0.1:8000", { // PROBLEME
        method: "POST",
        headers: "application/json",
        body: JSON.stringify(data)
    });

    console.log(response)

}