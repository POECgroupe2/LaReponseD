/* Afficher les boutons des questions */
const buttons = document.querySelector("#buttons");
window.addEventListener("load", async function(e) {
    for (let i=1; i<=5; i++) {
        let bouton = document.createElement("button");
        bouton.className = "eachButton";
        bouton.id = "button" + i;
        bouton.innerHTML = "Question " + i;
        bouton.onclick = async function() {
            await getBlock(i)
        }
        buttons.appendChild(bouton)
    }
})

/* Fonction appelée au clic d'un bouton de question */
async function getBlock(nb) {
    /* Faire apparaître la question et ses réponses */
    document.querySelector("#question" + nb).style.display = "block";

    /* Actionner le compteur */ /* TROUVER COMMENT EMPECHER LE REDEMARRAGE... */
    await startCountDown(seconds, element, nb)
}

/* Mettre en place le compteur */
let seconds = 20;
let element = document.querySelector('#count-down-timer');
let countInterval;
async function startCountDown(seconds, element, nb) {
    element.textContent = seconds + " secondes";
    let sec = 0;
    countInterval = setInterval(async function() {
        sec = parseInt(seconds);
        element.textContent = sec + " secondes";
        seconds--;
        if (seconds < 0) {
            answers.push("none");
            await endQuestion(nb);
        }
    }, 1000)
}

/* Récupérer la réponse choisie */
let answers = []; // Tableau des réponses du joueur.
async function getAnswer(eachAnswer, i) {
    answers.push(eachAnswer.innerText);
    await endQuestion(i)
}

for (let i=1; i<=5; i++) { //Numéro de question
    for (let j=1; j<=4; j++) { //Numéro de réponse
        let eachAnswer = document.querySelector("#rep" + i + "-" + j);
        eachAnswer.addEventListener("click", event => getAnswer(event.target, i))
    }
}

/* Fonction appelée par le compteur et getAnswer() */
async function endQuestion(nb) {
    /* Arrêter le compteur */
    clearInterval(countInterval);
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
                const gameOver = document.querySelector("#result");
                /* Faire apparaître le bloc final */
                gameOver.style.display = "inline-block";
                console.log(answers);
            }
        }
    }
    if (answers.length == 5) await sendUserAnswers()
}

/* Fonction d'envoi des réponses */
async function sendUserAnswers() {
    let data = {
        "user_answers": answers
    };

    let response = await fetch("http://127.0.0.1:8000", {
        method: "POST",
        body: JSON.stringify(data)
    })

    if (response.ok) {
        let json = await data;
        console.log(json)
    } else {
        console.log("Mauvaise réponse du réseau");
    }
}
