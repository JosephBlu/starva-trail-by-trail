<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Strava Trail-by-Trail DDP</title>
	</head>
	<!-- Persona, Use Case, Interaction Flow, and Conceptual Model-->
	<body>
		<header>
			<h1>Strava Trail-by-Trail DDP</h1>
		</header>
		<main>
			<!-- Name, Age, Occupation,Technology, Needs, Goals-->
			<h2>Persona</h2>
				<ul>
					<li><strong>Name:</strong> Morrissey, Steve</li>
					<li><strong>Age:</strong> 27 years-old</li>
					<li><strong>Occupation:</strong> Works in Bloomingdale's men's fashionable department in Palo Alto, Calif.</li>
					<li><strong>Technology:</strong> Uses Iphone 7.</li>
					<li><strong>Needs:</strong> Steve's biggest hobby is competing in single-day and time-trial bicycle races. So he needs to keep track of distance and routes he rides. And, he is also appearance and health conscious, so working in in Palo Alto, he is able to to ride his bicycle to and from work.</li>
					<li><strong>Goals:</strong> He lives in a large cyclists community, so he wants to see other routes where other cyclists have rode on or discovered.</li>
				</ul>

			<h2>Use Case</h2>
				<p>Steve Morrissey is about to leave home on his 10 speed Trek. He logs into his Strava account and reaches his profile. He presses the "Record". The app shows a map with the location of where he is currently at. Morrissey now presses the "Start" button ad now he can begin his bike ride.</p>
			<p>While he is riding his bike, he decides to take a short break at a local coffee shop. the phone recognizes that he is not moving in his regular pace and now stops recording his progress. after 12 min, before he begins his bike ride, looks at his phone and taps the "Continue" button. the phone now begins to record his progress by GPS.</p>
			<p>He reaches his destination and on his phone taps the "Finish" button. a screen comes up and shows the path he rode, how many miles he did, the time it took from start to finish, and how many stops he made.</p>

			<h2>Interaction Flow</h2>
			<!-- jordan test -->
			<ol>
				<li>Open app</li>
				<li>At main menu, taps "Start"</li>


			<!-- end test -->


				<li>live feed map screen comes up.</li>
				<li>Taps "Start" and begins to ride</li>
				<li>Taps "Continue" button after break.</li>
				<li>Taps "Finish" button after reaching destination.</li>
				<li>Looks at progress on screen than presses "Save"</li>
				<li>Data saves into app along with map trail.</li>
			</ol>
			<h2>Conceptual Model</h2>
			<ul>
				<li><strong>Profile</strong></li>
					<ol>profileId (primary key)</ol>
					<ol>profileEmail</ol>
					<ol>profileName</ol>

				<li><strong>Trail</strong></li>
					<ol>trailId (primary key)</ol>
					<ol>trailProfileId (foreign key)</ol>
					<ol>trailStart</ol>
					<ol>trailEnd</ol>

				<li><strong>Segment</strong></li>
					<ol>segmentId (primary key)</ol>
					<ol>segmentProfileId (foreign Key)</ol>
					<ol>segmentStart</ol>
					<ol>segmentEnd</ol>

				<li><strong>Trail Segment</strong></li>
					<ol>trailId (foreign Key)</ol>
					<ol>segmentId (foreign Key)</ol>

			</ul>
			<h2><strong>Relationship</strong></h2>
				<ul>
					<li>profile 1-to-n trail</li>
					<li>trail 1-to-n segment</li>
					<li>profile 1-to-m trail segment </li>
				</ul>


		</main>
	</body>
</html>

