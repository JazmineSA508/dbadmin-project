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
        	<li><a href="./index.php" class="current">Home</a></li>
        	<li><a href="./mvc.php">MVCs</a></li>
        	<li><a href="./tnt.php">TNTs</a></li>
        	<li><a href="./tbd.php">TBDa</a></li>
        	<li><a href="./diy.php">DIY SQL Statements</a></li>
    	</ul>
	</nav>
	<main>
		<section>
			<h1>What is Jaz's SuperNova?</h1>
			<p>Jaz's SuperNova, run by J.S.A. Productions, is the founder's final and most hands-on project that she ever completed as a student at her institution (New Jersey Institute of Technology). What is a SuperNova, you ask? <em>According to NASA:<strong>A SuperNova is the largest explosion that takes place in space at the end of a star's life.</strong></em>	hence, her "SuperNova". This project is for IT 635 (Database Adminsitration) and pulls from the founder's PostgreSQL database, named music_collection, which contains the names, discographies, RIAA certifications and Grammy Wins of her Top 10 favorite artists (currently). Each web page will contain a (probably sappy) excerpt written by the founder and a list/table of data pulled from the music_collection database that corresponds to the excerpt.</p>
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
				<h1>A Word From Our Founder</h1>
			    <img src="./images/profilepic2.jpg" alt="Our Founder, Jazmine S. Arrington">
				<p>Being a student at NJIT for the past 5 years has been the most transformative era of my life. From the moment that I first walked on the campus grounds to now, almost obtaining my master's degree in IT Administration and Security in the next few weeks, I knew that this school would bring out the best in me. NJIT not only taught me skills to be a master in the career I grew to love, but also how to learn efficiently. I took my mistakes in stride and used my failures and downfalls to make myself a better student and person. I've met some of the closest friends I've ever had, done so many things I never thought I'd be able to achieve, and learned SO MUCH from every class I took. This project culminates everything I loved and learned in both my undergraduate and graduate curricula. It utilizes all of my favorite topics from the classes that transformed me the most and left me more determined to continue learning: IS 117, IT 202, IT 340, IT 610, IT 640 and, finally, IT 635. This project is a culmination of who I am, what I love and what I've learned along the way to becoming an IT professional. I put everything I had into this project to make it as good as possible so I can remember my final project as a student fondly. I hope you enjoy Jaz's SuperNova!</p>
			</section>
			<section class=center>
				<h1>Founder's (Current) Top 10 Artists</h1>
				<?php
					$host = 'database:3306';
					$dbname = 'music_collection';
					$username = 'music_lover';
					$password = 'ilovemusic';
					
					$dbc = mysqli_connect($host, $username, $password, $dbname);
					
					if(! $dbc ) {
						die("Connection to $dbname failed: " . mysqli_connect_error());
					}
					
					$query = mysqli_query($dbc, "SELECT * FROM artists")
						or die (mysqli_error($dbc).$query);
					echo "<ol class='center'>";
					while ($row = mysqli_fetch_array($query)) {
						echo "<li>{$row['name']} ({$row['genre']})</li>";
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