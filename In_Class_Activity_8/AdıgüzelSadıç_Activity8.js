var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	
};

function displayResults()
{
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}
	
	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score is "+average + "<br \> "
}

function displayResults() {
    var average = 0;
    var highestScore = Math.max(...scores);
    for (var i = 0; i < scores.length; i++) {
        average = (average * i + scores[i]) / (i + 1);
    }


    document.getElementById("results").innerHTML = "<h2>Results</h2><p>Average score is " + average + "</p><p>Highest score is " + highestScore + "</p>";
}

function displayScores() {
    var table = document.getElementById("scores_table");
    table.innerHTML = "<tr><th>Name</th><th>Score</th></tr>";

    for (var i = 0; i < names.length; i++) {
        var row = table.insertRow();
        var nameCell = row.insertCell(0);
        var scoreCell = row.insertCell(1);

        nameCell.innerHTML = names[i];
        scoreCell.innerHTML = scores[i];
    }
}

function addScore() {
    var name = document.getElementById("name").value;
    var score = parseInt(document.getElementById("score").value);


    if (name === "" || isNaN(score) || score < 0 || score > 100) {
        alert("You must enter a name and a valid score");
        return;
    }

    names.push(name);
    scores.push(score);


    document.getElementById("name").focus();
}

window.onload = function () {
    $("display_results").onclick = displayResults;
    $("display_scores").onclick = displayScores;
    $("add").onclick = addScore;
};


