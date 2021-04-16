<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="author" content="Jazmine Arrington">
	<title>Jaz's SuperNova Homepage</title>
    <link rel="shortcut icon" href="./images/milmil_icon.ico">
	<link rel="stylesheet" href="./styles/normalize.css">
	<link rel="stylesheet" href="./styles/main.css">
	<link rel="stylesheet" href="./styles/slicknav.css">
</head>

<body>
	<header>
		<img src="./images/music.jpg" alt="Music Logo" height="80">
		<h2>Jaz's SuperNova</h2>
		<h3><span class="shadow">Remember the Music</span></h3>
	</header>
	<nav id="nav_menu">
    	<ul>
        	<li><a href="./index.php">Home</a></li>
        	<li><a href="./mvc.php">MVCs</a></li>
        	<li><a href="./tnt.php" class="current">TNTs</a></li>
        	<li><a href="./tbd.php">TBDs</a></li>
        	<li><a href="./thx.php">Thanks + DB Info</a></li>
    	</ul>
	</nav>
	<main>
		<section>
		  <h1>Trials and Tribulations (TNTs)</h1>
		  <article>
       	  <p>While I'm grateful for everything that NJIT has given me, getting the road to these 2 degrees has not come without its trials and tribulations these past 5 years:</p>
		  <ul>
			<li><strong>Freshman Year:</strong> I failed a class for the first time in my life: Physics 1. That was the first big blow to my confidence as a college student. I felt like I didn't belong in this school among all of my talented, driven and highly intelligent peers and questioned if I was really cut out for college in general. However, I did not let my self-doubt stop me. I immediately retook the class the next semester and put in more work, more effort, and studied hard whenever I could and ended the class with a B. My mom always says <em>"You only get out of it what you put into it"</em>, and I realized afterwards that I deserved to fail the class the first time because I didn't put in the effort and instead blamed the professor for my failure instead of taking accountability.</li>
			<li><strong>Sophomore Year:</strong> I did very well in my classes, but had to deal with personal issues on all fronts. Family issues, tensions among all of my friend groups and strains on my relationship all happened at once. I felt like I was suffocating from everything going on, but at the end of the day at least I passed all my classes!</li>
			<li><strong>Junior Year:</strong> I suffered the loss of a very close friend, Kevin Milfort-Sanchez during the very first week of Fall semester classes. He was making an UberEats delivery on his bike and got hit and killed. It blindsided me so much and took a huge toll on my mental health, which in turn took a toll on my academics. I ended up failing my CS 252 (now CS 350)course that semester, but did not let it get me down. Kevin was the most confident and diligent person, let alone student, that I've ever known. I knew that if he was still alive today, he'd say to get my act together because I was better than this. That next semester, I passed all 18 credits worth of classes (including CS 608) with flying colors with all As and Bs. I'm sure he's proud of me, wherever he is.</li>
			<li><strong>Senior Year:</strong> Fall semester was difficult, but doable. The spring semester, however, hit me and everyone else like a truck due to the COVID-19 pandemic. My IT 490 class, as well as the CS 350 course that I was retaking from my junior year failure, got ridiculously difficult from lack of communication. I didn't see any of my friends for over 6 months. My first college graduation got virtualized and my graduation party was cancelled. My mental health took a nosedive. Everything became so monotonous that I started wondering what the point of it all was. And all of that followed by the racial injustice of the summer. I coped with online multiplayer games to be able to see and hang out with my friends, as well as daily scheduled calls with my boyfriend to keep contact with each other. Plus, I was able to work my summer internship completely virtual. In the end, I made it through to see another year, and that's what really matters!</li>
			<li><strong>Graduate Year:</strong> This year, I just feel very sentimental and free. I've taken this year to really reflect on how far I've come in the past 5 years, and have also been the most efficient that I've ever been. This semester alone I fully completed one of my classes (IS 681) before Spring Break, including the final. I also finished my semester project for IT 640 on March 1st, the group project for CS 696 on April 16, and this project before my (personal) deadline of April 23. All of this while working 2 on-campus jobs (humble brag)! I've truly been able to enjoy my final months as an NJIT student planning my graduation party, as well as enjoying time with my friends on campus before we all go our separate ways. I can't wait to see what the future holds as a real-world adult!</li>
		  </ul>
		  </article>
        </section>
        <aside>
			<h2>Song of the Month</h2>
			<h3>January<br><a href="https://www.youtube.com/watch?v=ie-cWWGB4ww">"On It" by Jazmine Sullivan ft. Ari Lennox</a></h3>
			<img src="./images/heauxtales.jpg" alt="Heaux Tales Album Cover" height="100" width="100">
			<h3>February<br><a href="https://www.youtube.com/watch?v=2j3Dj6UmmSI">"Test Me" by Melanie Martinez</a></h3>
			<img src="./images/afterschool.jpg" alt="After School EP Album Cover" height="100" width="100">
			<h3>March<br><a href="https://www.youtube.com/watch?v=BPNczhu4brM">"American Cliche" by FINNEAS</a></h3>
			<img src="./images/americancliche.jpg" alt="American Clichel Single Album Cover" height="100" width="100">
			<h3>April<br><a href="https://www.youtube.com/watch?v=ZZhwUqzeZpY">"The Art of Starting Over" by Demi Lovato</a></h3>
			<img src="./images/taoso.jpg" alt="The Art of Starting Over Album Cover" height="100" width="100">
		</aside>
			<section>
           	  <h1>Top 10 Songs that got me through 2020!</h1>
				<?php
					require_once("autoload.php");
					
					$dbc = mysqli_connect($host, $username, $password, $dbname);
					
					if(! $dbc ) {
						die("Connection to $dbname failed: " . mysqli_connect_error());
					}
					
					$query = "SELECT song_name,artist FROM music_catalog WHERE song_name='Sine From Above';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='911';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='Break My Heart Again';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='Nurse\'s Office';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='Lost My Mind';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='Bullet';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='I THINK';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='Heaven';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='No Time To Die';";
					$query .= "SELECT song_name,artist FROM music_catalog WHERE song_name='Man Of The Year'";
					
					echo "<ol>";
					if ($dbc->multi_query($query)) {
						do {
							if ($result = $dbc->store_result()) {
								while ($row = $result->fetch_row()) {
									echo "<li><strong>{$row[0]}</strong> by {$row[1]}</li>";
								}
								$result->free();
							}
						} while ($dbc->next_result());							
					}
					echo "</ol>";

					mysqli_close($dbc);
				?>
			</section>
	</main>
	<footer>
		<p>&copy; 2021, J.S.A. Productions, Piscataway, NJ 08854</p>
	</footer>
</body>
</html>