var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	// Sayfa yüklendiğinde imleci Name alanına odakla
	$("name").focus();
};

function displayResults()
{
	var average = 0;
	var highestScore = 0;
	var highestScoreIndex = 0;
	var sum = 0;
	
	// Ortalama puan hesaplama ve en yüksek puanı bulma
	for(var i = 0; i < scores.length; i++) {
		sum += scores[i];
		
		// En yüksek puanı ve kime ait olduğunu bulma
		if (scores[i] > highestScore) {
			highestScore = scores[i];
			highestScoreIndex = i;
		}
	}
	
	average = sum / scores.length;
	
	// Sonuçları results div'ine ekleme
	var html = "<h2>Results</h2>" +
			 "<p>Average score = " + average.toFixed(2) + "</p>" +
			 "<p>High score = " + names[highestScoreIndex] + " with a score of " + highestScore + "</p>";
	
	$("results").innerHTML = html;
}

function displayScores() {
	// Tablo başlığını ve içeriğini oluşturma
	var html = "<tr><th>Name</th><th>Score</th></tr>";
	
	// Her isim ve puanı tabloya ekle
	for (var i = 0; i < names.length; i++) {
		html += "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
	}
	
	// Tabloyu güncelle
	$("scores_table").innerHTML = html;
}

function addScore() {
	// Girişleri al
	var name = $("name").value;
	var score = parseInt($("score").value);
	
	// Veri doğrulama
	if (name === "" || isNaN(score) || score < 0 || score > 100) {
		alert("You must enter a name and a valid score");
		return;
	}
	
	// Dizilere ekle
	names.push(name);
	scores.push(score);
	
	// Giriş alanlarını temizle
	$("name").value = "";
	$("score").value = "";
	
	// İmleci tekrar Name alanına odakla
	$("name").focus();
}


