//inisiasi soal dalam quiz
const questions = [
    {
        question: "Keuntungan mengkonsumsi makanan berserat adalah...?",
        optionA: "Lewatnya makanan jadi cepat",
        optionB: "menghasilkan banyak kalori",
        optionC: "cocok untuk penderita ulkus",
        optionD: "feses lebih keras",
        correctOption: "optionA"
    },

    {
        question: "Mineral yang berfungsi membantu pembekuan darah dan pembentukan matriks tulang adalah....",
        optionA: "Besi",
        optionB: "Kalsium",
        optionC: "Magnesium",
        optionD: "Yodiom",
        correctOption: "optionB"
    },

    {
        question: "Bahan makanan yang sejak dimulut telah dicernakan secara kimia adalah...?",
        optionA: "Vitamin",
        optionB: "Lemak",
        optionC: "Protein",
        optionD: "Karbohidrat",
        correctOption: "optionD"
    },

    {
        question: "Makanan yang seimbang adalah makanan yang mengandung...?",
        optionA: "Vitamin, Minerat, glukosa, lemak, air, dan makanan kasar",
        optionB: "karbohidrat, mineral, karbohidrat, makanan tanpa lemak, protein, air",
        optionC: "Karbohidrat, Lemak, protein, vitamin, mineral, serat nabati dan air",
        optionD: "sodium klorida, susu, vitamin, karbohidrat, lemak, protein dan makanan kasar",
        correctOption: "optionC"
    },

    {
        question: "Zat makanan yang menghasilkan energi tertinggi untuk satuan berat yang sama adalah...?",
        optionA: "Lemak",
        optionB: "vitamin",
        optionC: "protein",
        optionD: "serat kesar",
        correctOption: "optionA"
    },

    {
        question: "Tidak semua zat-zat yang terdapat dalam bahan makanan akan mengalami pencernaan. Zat berikut apabila terdapat dalam bahan makanan tidak akan mengalami pencernaan adalah...?",
        optionA: "Amilum",
        optionB: "Lemak",
        optionC: "protein",
        optionD: "karbohidrat",
        correctOption: "optionB"
    },

    {
        question: "Fungsi protein adalah...?",
        optionA: "Sebagai sumber energi dan untuk pertumbuhan serta perbaikan sel-sel tubuh",
        optionB: "Sebagai sumber energi dan untuk menjadi pelindung alat-alat tubuh",
        optionC: "Sebagai pembentuk enzim dan untuk menjaga suhu tubuh",
        optionD: "untuk menjadi pelindung alat-alat tubuh dan untuk menjaga suhu tubuh",
        correctOption: "optionA"
    }

]



    $('#latihan').ready(function(){
        NextQuestion(0)
    })



let shuffledQuestions = [] //empty array to hold shuffled selected questions

function handleQuestions() { 
    //function to shuffle and push 10 questions to shuffledQuestions array
    while (shuffledQuestions.length <= 4) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1
let playerScore = 0  
let wrongAttempt = 0 
let indexNumber = 0



// function for displaying next question in the array to dom
function NextQuestion(index) {
    console.log("question dipanggil")
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
    const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
    const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            //get's correct's radio input with correct answer
            correctOption = option.labels[0].id
        }
    })
   
    //checking to make sure a radio input has been checked or an option being chosen
    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    //checking if checked radio button is same as answer
    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            document.getElementById(wrongLabelId).style.backgroundColor = "red"
            document.getElementById(correctOption).style.backgroundColor = "green"
            wrongAttempt++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



//called when the next button is called
function handleNextQuestion() {
    checkForAnswer()
    unCheckRadioButtons()
    //delays next question displaying for a second
    setTimeout(() => {
        if (indexNumber <= 4) {
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()
        }
        resetOptionBackground()
    }, 1000);
}

//sets options background back to null after display the right/wrong colors
function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore <= 2) {
        remark = "Bad Grades, Keep Practicing."
        remarkColor = "red"
    }
    else if (playerScore >= 3 && playerScore < 4) {
        remark = "Average Grades, You can do better."
        remarkColor = "orange"
    }
    else if (playerScore >= 5) {
        remark = "Excellent, Keep the good work going."
        remarkColor = "green"
    }
    const playerGrade = (playerScore ) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

//closes score modal and resets game
function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

function quiteLatihan(){
    window.location.reload(); 

}

//function to close warning modal
function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}