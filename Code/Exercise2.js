<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		console.log("JS Coding Challenge 2")
		John_score = [89, 120, 103];
		Mike_score = [116, 94, 123];
		Marry_score = [97, 134, 105];
 
		function average_score(score) {
    		var i,total = 0;
    		for(i = 0; i < score.length; i++) {
        		total += score[i];
    		}
    		var avg_score = (total/score.length);
    		return avg_score;
		}
 
 		var winner;
		var John_avg_score = average_score(John_score);
		var Mike_avg_score = average_score(Mike_score);
		var Marry_avg_score = average_score(Marry_score);
 
		if(John_avg_score > Mike_avg_score && John_avg_score > Marry_avg_score) {
    		winner = "John";
		} else if (Mike_avg_score > John_avg_score && Mike_avg_score > Marry_avg_score) {
    		winner = "Mike";
		} else if (Marry_avg_score > John_avg_score && Marry_avg_score > Mike_avg_score) {
    		winner = "Marry";
		} else {
    		winner = "Match Tied";
		}
 
		console.log("John's Team score : " + John_avg_score);
		console.log("Mike's Team score : " + Mike_avg_score);
		console.log("Marry's Team score : " + Marry_avg_score);
 
		console.log("Winner of the match: " + winner);
	</script>
</body>
</html>
