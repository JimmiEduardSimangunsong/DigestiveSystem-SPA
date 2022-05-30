//inisiasi soal dalam quiz
const questions = [
    {
        question: "Organ pencernaan yang bersifat sangat asam, bertugas untuk membunuh bakteri dan mencerna protein adalah ...?",
        optionA: "Usus Halus",
        optionB: "Mulut",
        optionC: "Lambung",
        optionD: "Usus Besar",
        correctOption: "optionC",
    },

    {
        question: "Sebutkan penyebab terjadinya gannguan pencernaan obesitas ...",
        optionA: "Kandungan lemak berlebihan",
        optionB: "Kandungan vitamin A tercukupi",
        optionC: "Kandungan zat besi berlebihan",
        optionD: "Kurangnya asupan vitamin e",
        correctOption: "optionA"
    },

    {
        question: " Satria mengalami gangguan pada lambung (Magh) karena sering mengkonsumsi makanan yang terlalu pedas dan asam, sehingga dapat meningkatkan asam lambung. Cara yang dilakukan agar terhindar dari penyakit tersebut adalah...?",
        optionA: "Merokok",
        optionB: ". Makan makanan yang mengandung asam",
        optionC: " Makan teratur, tidak mengkonsumsi makanan pedas dan asam",
        optionD: "Meminum minuman keras seperti alkoholi",
        correctOption: "optionC"
    },

    {
        question: "Hal apa saja yang kita lakukan untuk menjaga kesehatan organ pencernaan ...",
        optionA: "Makan-makanan cepat saji, minum-minuman bersoda",
        optionB: "Kurang istirahat, makan tidak teratur",
        optionC: "Mencuci tangan sebelum makan, makan teratur 3 kali sehari",
        optionD: "Kurang minum air putih, makan tidak teratur",
        correctOption: "optionC"
    },


    {
        question: "Di bawah ini adalah gangguan dan penyakit pada sisem pencernaan beserta penjelasannya yang tepat, kecuali...?",
        optionA: "Diare (susah buang air besar)",
        optionB: "Tonsilitis (pembengkakan amandel)",
        optionC: "Diare (susah buang air besar)",
        optionD: "Apendisitis (radang usus buntu)",
        correctOption: "optionB"
    },


    {
        question: "Seseorang mengalami gangguan pencernaan makanan dengan gejala sukar buang air besar. Gangguan ini disebabkan...?",
        optionA: "Kurang makanan yang berserat",
        optionB: "Keracunan makanan",
        optionC: "Kekurangan vitamin C",
        optionD: "Infeksi kuman",
        correctOption: "optionA"
    },


    {
        question: " Berikut ini yang tidak termasuk fungsi protein adalah....?",
        optionA: "Berperan dalam proses metabolisme tubuh",
        optionB: "Menghasilkan kalori dan energi",
        optionC: "Membantu proses metabolisme dalam tubuh",
        optionD: "Sebagai unsur pembangun jaringan yang rusak",
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
    else if (playerScore >= 2 && playerScore < 4) {
        remark = "Average Grades, You can do better."
        remarkColor = "orange"
    }
    else if (playerScore >= 5) {
        remark = "Excellent, Keep the good work going."
        remarkColor = "green"
    }
    const playerGrade = (playerScore ) * 20

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