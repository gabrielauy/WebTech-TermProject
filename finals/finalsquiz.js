
function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var question4 = document.quiz.question4.value;
	var question5 = document.quiz.question5.value;
	var question6 = document.quiz.question6.value;
	var question7 = document.quiz.question7.value;
	var question8 = document.quiz.question8.value;
	var question9 = document.quiz.question9.value;
	var question10 = document.quiz.question10.value;
	var question11 = document.quiz.question11.value;
	var question12 = document.quiz.question12.value;
	var question13 = document.quiz.question13.value;
	var question14 = document.quiz.question14.value;
	var question15 = document.quiz.question15.value;


	var correct = 0;


	if (question1 == "jsp") {
		correct++;
}
	if (question2 == "1") {
		correct++;
}	
	if (question3 == "1") {
		correct++;
}

	if (question4 == "1") {
		correct++;
}

	if (question5 == "1") {
		correct++;
}

	if (question6 == "2") {
		correct++;
}

	if (question7 == "2") {
		correct++;
}
	if (question8 == "2") {
		correct++;
}
	if (question9 == "2") {
		correct++;
}


	if (question10 == "2") {
		correct++;

}	
if (question11 == "3") {
		correct++;

}	
if (question12 == "3") {
		correct++;

}	
if (question13 == "3") {
		correct++;

}	
if (question14 == "3") {
		correct++;

}	
if (question15 == "2") {
		correct++;
}
	
	var messages = ["Great job!", "That's just okay", "You really need to do better"];
	var score;

	if (correct == 0) {
		score = 2;
	}

	if (correct > 0 && correct < 15) {
		score = 1;
	}

	if (correct == 15) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";
	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";

	}
	
