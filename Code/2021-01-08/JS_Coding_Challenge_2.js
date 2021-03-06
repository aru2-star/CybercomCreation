<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		console.log("JS Coding Challenge 2")
		John_score1 = [89, 120, 103];
		Mike_score1 = [116, 94, 123];
		Marry_score1 = [97, 134, 105];
 
 		John_score2 = [50, 150, 100];
 		Mike_score2 = [100, 120, 119];
 		Marry_score2 = [99, 80, 120];

		function average_score(score) {
    		var i,total = 0;
    		for(i = 0; i < score.length; i++) {
        		total += score[i];
    		}
    		var avg_score = (total/score.length);
    		return avg_score;
		}
 
 		var winner;
		var John_avg_score1 = average_score(John_score1);
		var Mike_avg_score1 = average_score(Mike_score1);
		var Marry_avg_score1 = average_score(Marry_score1);

		var John_avg_score2 = average_score(John_score2);
		var Mike_avg_score2 = average_score(Mike_score2);
		var Marry_avg_score2 = average_score(Marry_score2);
 
		function results(John_avg_score, Mike_avg_score, Marry_avg_score){
			if(John_avg_score > Mike_avg_score && John_avg_score > Marry_avg_score) {
    			return winner = "John";
			} else if (Mike_avg_score > John_avg_score && Mike_avg_score > Marry_avg_score) {
    			return winner = "Mike";
			} else if (Marry_avg_score > John_avg_score && Marry_avg_score > Mike_avg_score) {
    			return winner = "Marry";
			} else {
    			return winner = "Match Tied";
			}
		}
 
		console.log("John's Team score : " + John_avg_score1);
		console.log("Mike's Team score : " + Mike_avg_score1);
		console.log("Marry's Team score : " + Marry_avg_score1);
 
		console.log("Winner of the match: " + results(John_avg_score1, Mike_avg_score1, Marry_avg_score1));

		console.log("John's Team score : " + John_avg_score2);
		console.log("Mike's Team score : " + Mike_avg_score2);
		console.log("Marry's Team score : " + Marry_avg_score2);

		console.log("Winner of the match: " + results(John_avg_score2, Mike_avg_score2, Marry_avg_score2));
	</script>
</body>
</html>
