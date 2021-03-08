function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>"; 
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
	var score = JSON.stringify(quiz.score);
     
          window.localStorage.setItem('quizscore', score);
};

// create questions
var questions = [
    new Question("Which one is a Country?", ["California", "Pittsburgh","Ontario", "China"], "China"),
    new Question("Which currency is used in the US and airports around the world?", ["INR", "GBP", "USD", "PKR"], "USD"),
    new Question("There are ____ many cities in the United Kingdom.", ["1", "6","2", "69"], "69"),
    new Question("Which language is used in India?", ["Hindi", "Tamil", "Kannada", "All"], "All"),
    new Question("My game ____.", ["Sucks", "Pathetic", "Simple", "All"], "Pathetic")
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();





