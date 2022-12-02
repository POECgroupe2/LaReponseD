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

    /* Actionner le compteur */
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
            console.log("Pas de réponse !")
        }
    }, 1000)
}

/* Récupérer la réponse choisie */
let i; //Nombre de questions
for (i=1; i<=5; i++) {
    let j; //Nombre de réponses par question
    for (j=1; j<=4; j++) {
        let eachAnswer = document.querySelector("#rep" + i + "-" + j);
        function getAnswer() {
            console.log(eachAnswer.value);
            endQuestion(i)
        }
        eachAnswer.addEventListener("click", getAnswer)
    }
}

/* Fonction appelée par le compteur et getAnswer() */
function endQuestion(nb) {
    /* Arrêter le compteur */
    clearInterval(countInterval);
    element.textContent = "20 secondes";

    /* SOUCI EN LIGNES 65-67 QUI BLOQUE LA SUITE */
    let quest = document.querySelector("#question" + nb);
    console.log(quest); //Affiche "null" alors qu'il existe bien...
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
                gameOver.innerHTML = "La partie est finie !"
            }
        }
    }
}