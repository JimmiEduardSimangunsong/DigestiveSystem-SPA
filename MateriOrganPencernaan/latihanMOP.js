//inisiasi soal dalam quiz
const questions = [
    {
        question: "Lambung memiliki 3 bagian ini kecuali...?",
        optionA: "Bagian atas(kardiak)",
        optionB: "Bagian tengah (fundus)",
        optionC: "Bagian klep (spingter)",
        optionD: "Bagian bawah (pylorus)",
        correctOption: "optionC"
    },

    {
        question: "Enzim yang dihasilkan oleh pankreas yaitu....",
        optionA: "Tripsin, amilase, dan lipase",
        optionB: "Pepsin, tripsin, dan renin",
        optionC: "Tripsin, renin, dan ptialin",
        optionD: "Tripsin, renin, erepsin",
        correctOption: "optionA"
    },

    {
        question: "Zat makanan yang dibutuhkan dalam pembentukan tulang yaitu...?",
        optionA: "Kalsium dan vitamin C",
        optionB: "Serat dan vitamin D",
        optionC: "Kalsium dan vitamin D",
        optionD: "Serat dan zat besi",
        correctOption: "optionC"
    },

    {
        question: "Nama bakteri yang membantu dalam proses yang terjadi di usus besar adalah...",
        optionA: "Bakteri Escherichia",
        optionB: "Bakteri Escherichia coli",
        optionC: "Bakteri probiotik",
        optionD: "Bakteri prebiotik",
        correctOption: "optionB"
    },

    {
        question: "Kadar air dalam sisa makanan diatur oleh...?",
        optionA: "usus halus",
        optionB: "poros usus",
        optionC: "usus besar",
        optionD: "usus dua belas jari",
        correctOption: "optionC"
    },

    {
        question: "Fungsi hati adalah ini kecuali...?",
        optionA: "menghasilkan empedu",
        optionB: "menyimpan cadangan lemak",
        optionC: "menyimpan glikogen",
        optionD: "menyimpan vitamin c",
        correctOption: "optionD"
    },

    {
        question: "Air liur yang dihasilkan oleh kelenjar ludah memiliki fungsi seperti berikut, kecuali...?",
        optionA: "Mencegah mulut kekeringan",
        optionB: "membasahi makanan",
        optionC: "membunuh mikroorganisme",
        optionD: "memberi suasana basah dalam mulut",
        correctOption: "optionD"
    },

    {
        question: "usus halus berada dianatara...?",
        optionA: "lambung dan usus besar",
        optionB: "lambung dan usus kecil",
        optionC: "lambung dan usus buntu",
        optionD: "lambung dan kerongkongan",
        correctOption: "optionA"
    },

    {
        question: "Proses pengeluaran zat sisa metabolisme yang tidak diperlukan disebut...?",
        optionA: "Ekskresi",
        optionB: "Defekasi",
        optionC: "Sekresi",
        optionD: "Respirasi",
        correctOption: "optionA"
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
        question: "Usus halus pada manusia dibagi menjadi tiga bagian utama, kecuali...?",
        optionA: "Duodenum",
        optionB:"Ileum",
        optionC: "Jejunum",
        optionD: "Apendiks",
        correctOption: "optionD"
    },

  
    {
        question: "Urutan sistem pencernaan pada manusia adalah...?",
        optionA: "Mulut – kerongkongan – usus halus – lambung – usu besar – anus",
        optionB: "Mulut – tenggorokan – lambung – usus halus – usus besar – anus",
        optionC: "Mulut – kerongkongan – lambung – usus halus – usus besar – anus",
        optionD: "Mulut – tenggorokan – lambung – usus besar – usus halus – anus",
        correctOption: "optionC"
    },


    {
        question: "Gigi manusia yang berfungsi untuk menghaluskan makanan adalah...?",
        optionA: "Gigi Seri",
        optionB: "Gigi Taring",
        optionC: "Gigi Susu",
        optionD: "Gigi Geraham Depan & Belakang",
        correctOption: "optionD"
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
        question: "Pada saat masa pertumbuhan sebaiknya seorang anak mendapat asupan bahan makanan yang banyak mengandung...?",
        optionA: "Lemak",
        optionB: "Protein",
        optionC: "Mineral",
        optionD: "Karbohidrat",
        correctOption: "optionB"
    },

    {
        question: "Sistem pencernaan yang melakukan gerak peristaltik pertama adalah...?”",
        optionA: "Usus",
        optionB: "Mulut",
        optionC: "Lambung",
        optionD: "Kerongkongan",
        correctOption: "optionD"
    },

    {
        question: " Sumber karbohidrat bisa di dapat dari...?",
        optionA: " kacang tanah, kedelai, dan kacang merah",
        optionB: "mentega, keju, dan susu",
        optionC: "tempe, kecap, tahu",
        optionD: "jagung, padi, dan gandum",
        correctOption: "optionD"
    },

    {
        question: "Organ pencernaan yang bersifat sangat asam, bertugas untuk membunuh bakteri dan mencerna protein adalah...?",
        optionA: "Usus Halus",
        optionB: "Mulut",
        optionC: "Lambung",
        optionD: "Usus Besar",
        correctOption: "optionC"
    },

    {
        question: "selain sebagai penyusun enzim,protein juga memiliki fungsi ...?",
        optionA: "sebagai sumber    energi pokok",
        optionB: "Peninbun lemak ",
        optionC: "memelihara tekanan osmosis darah ",
        optionD: "merusak zat yang bersifat racun ",
        correctOption: "optionD"

    },

    {
        question: "protein pada saluran pencernaan dipecah menjadi senyawa yang dinamakan...?",
        optionA: "kolesterol",
        optionB: "vitamin",
        optionC: "glukosa",
        optionD: "asam amino",
        correctOption: "optionD"
    },

    {
        question: "fungsi hati yang berhubungan dengan fungsi pencernaan makanan yaitu ...?",
        optionA: "menghancurkan eritrosit tua",
        optionB: "menetralkan racun",
        optionC: "menghasilkan darah",
        optionD: "mengasilkan empedu ",
        correctOption: "optionD"
    },

    {
        question: "berikut ini yang tidak termasuk kelenjar pencernaan adalah...?",
        optionA: "hati ",
        optionB: "ludah ",
        optionC: "lambung ",
        optionD: "jantung",
        correctOption: "optionD"
    },

    {
        question: "berikut ini yang termasuk fungsi lambung yang mempunyai fungsi sebagai motoris yaitu ...",
        optionA: "sekresi mukus",
        optionB: "fungsi reservoir",
        optionC: "sintesis dan pengeluaran gastrin",
        optionD: "mencernakan protein oleh pepsin dan HCI",
        correctOption: "optionB"
    },

    {
        question: "Sumber lemak bisa didapat dari...?",
        optionA: " kacang tanah, kedelai, dan kacang merah",
        optionB: "mentega, keju, dan susu",
        optionC: "tempe, kecap, tahu",
        optionD: "jagung, padi, dan gandum",
        correctOption: "optionB"
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
    while (shuffledQuestions.length <= 9) {
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
        if (indexNumber <= 9) {
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
    if (playerScore <= 3) {
        remark = "Bad Grades, Keep Practicing."
        remarkColor = "red"
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "Average Grades, You can do better."
        remarkColor = "orange"
    }
    else if (playerScore >= 7) {
        remark = "Excellent, Keep the good work going."
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

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