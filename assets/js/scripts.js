/* Récupérer le nom de la partie. */
/*const gameName = document.querySelector("#name");
const gameNameValidate = document.querySelector("#game_name_validate");
gameNameValidate.addEventListener("click", event => getGameName(event.target))

function getGameName() {
    console.log(gameName.value)
    return gameName.value
}*/

/* Récupérer les id de questions */
/*let questionsIds = [];
function getQuestionsIds(eachQuestion) {
    questionsIds = [];
    let questionId = eachQuestion.dataset.id;
    questionsIds.push(questionId);
    console.log(questionsIds);
}*/

/* Afficher les boutons des questions. */
const buttons = document.querySelector("#buttons");
window.addEventListener("load", async function(e) {
    for (let i=1; i<=15; i++) {
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

/* Fonction appelée au clic d'un bouton de question. */
async function getBlock(nb) {
    /* Si le bloc n'est pas visible (donc si le bouton n'a pas déjà été cliqué). */
    if (document.querySelector("#question" + nb).style.display !== "block") {
        /* Faire apparaître la question et ses réponses. */
        document.querySelector("#question" + nb).style.display = "block";

        /* Actionner le compteur. */
        await startCountDown(seconds, element, nb)
    }
    /* Sinon, on ne fait rien et le compteur n'est pas relancé. */
}

/* Mettre en place le compteur. */
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
            answerAndStatute = ["0", ""];
            console.log(answerAndStatute);
            await endQuestion(nb);
        }
    }, 1000)
}

/* Récupérer la réponse choisie. */
let answerAndStatute = []; // Tableau de l'id et du statut de la réponse du joueur.
//let userScore = eachAnswer.dataset.score;
let score = 0;
async function getAnswer(eachAnswer, i) {
    answerAndStatute = [];
    var answerId = eachAnswer.dataset.answerId;
    var answerIsGood = eachAnswer.dataset.answerIsGood;
    //var userScore = eachAnswer.dataset.score;
    answerAndStatute.push(answerId, answerIsGood);
    console.log(answerAndStatute);
    if (answerIsGood == "1") {
        //userScore = userScore + 1;
        //userScore++;
        score++
    }
    console.log(score);
    await endQuestion(i)
}

for (let i=1; i<=15; i++) { // Numéro de question.
    for (let j=1; j<=4; j++) { // Numéro de réponse.
        let eachAnswer = document.querySelector("#rep" + i + "-" + j);
        eachAnswer.addEventListener("click", event => getAnswer(event.target, i))
    }
}

/* Fonction appelée par le compteur et getAnswer(). */
async function endQuestion(nb) {
    /* Arrêter le compteur. */
    clearInterval(countInterval);
    element.textContent = "20 secondes";

    let quest = document.querySelector("#question" + nb);
    /* Faire disparaître la question et ses réponses. */
    quest.style.display = "none";

    /* Envoyer la réponse du joueur pour le calcul final du score. */
    await sendUserAnswers()

    /* Faire disparaître le bouton de la question terminée et afficher le bouton suivant. */
    for (let i=1; i<=15; i++) {
        if (i === nb) {
            document.querySelector("#button" + i).style.display = "none";
            if ((i+1) <= 15) {
                document.querySelector("#button" + (i+1)).style.display = "block"
            }
            else { /* Si c'est le dernier bouton. */
                const gameOver = document.querySelector("#result");
                getScore();
                /* Faire apparaître le bloc final. */
                gameOver.style.display = "inline-block"
            }
        }
    }
}

/* Fonction d'envoi des réponses. */
async function sendUserAnswers() {
    let data = {
        "user_answer_and_statute": answerAndStatute
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

/* Fonction d'affichage du score */
function getScore() {
    console.log("Score final : " + score)
    return score
}

/* Données à récupérer plus tard pour la BDD.
{
    "name": 'nom de jeu',
    "questions": [ID des questions contenu dans le game séparés par une virgule],
    "users": [ id de l'utilisateur ]
}
*/