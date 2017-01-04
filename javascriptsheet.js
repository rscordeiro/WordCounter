var textToFind = document.getElementById(wordInput);
var whereToFind = document.getElementById(textInput);
				  
function findWord() {
  var searchWord = /textToFind/g;
  var countWord = whereToFind.match(searchWord).length;
  return countWord;
}

document.getElementById(answer).innerHTML = "Your word has occured " + countWord + "time(s)!";