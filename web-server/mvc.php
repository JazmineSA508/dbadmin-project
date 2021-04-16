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
        	<li><a href="./mvc.php" class="current">MVCs</a></li>
        	<li><a href="./tnt.php">TNTs</a></li>
        	<li><a href="./tbd.php">TBDs</a></li>
        	<li><a href="./thx.php">Thanks + DB Info</a></li>
    	</ul>
	</nav>
	<main>
	<section>
    <h1>Most Valuable Courses (MVC)</h1>
    <article>
    <p>
      <strong>IS 117:</strong> Taught me about web development. I already had experience with web design from high school when I took a web design class in junior year, so this was my first elective course that I ever took in college. This class took my web design skills to new levels and made a really great looking project that I actually used as a <a href="https://web.njit.edu/~jsa48/FinalProjectSite/finalProjectIndex.html">direct template for this current project</a>, hence, the header tagline <em>Remember the Music</em>. Talk about utilizing your resources!<br><br>
	  <strong>IT 202:</strong> Taught me about the backend aspects of web development. I learned about PHP, JavaScript and a little AJAX as well Though I still don't really know my way around all of them yet, this class gave me the building blocks I needed to get this project up and running!<br><br>
	  <strong>IT 240 & 340:</strong> Taught me about Linux/Unix command line, BASH and Perl scripting, and general system administration. I put these two together because they both equally kickstarted my interest in pursuing a career utilizing these technologies (which I start in August!).<br><br>
	  <strong>IT 610:</strong> Taught me how to use Docker and ultimately make a LAMP stack using it. Before IT610, I'd only used Docker sparingly for my very first summer internship in 2018. I had no idea how to use it and no one really helped me figure it out. Thanks to this course, I got to actually figure out my way around it and now it's my go-to in terms of web development and virtualization!<br><br>
	  <strong>IT 635:</strong> Taught me about database administration. I'd learned about SQL in various undergrad classes, but never got to be as hands-on with it as I was in this class. I now know how to use various different database administration tools that I'd never heard of before, like PostgreSQL, MariaDB and MongoDB. It also allowed me to showcase how much I've really learned since I started at NJIT by making this huge project that I'm so proud of, and that's the most valuable thing a course can do in my eyes!
    </p>
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
		<h1>Grammy Awarded Songs by my Top 10 Artists!</h1>
		<?php
			require_once("autoload.php");
					
			$dbc = mysqli_connect($host, $username, $password, $dbname);
					
			if(! $dbc ) {
				die("Connection to $dbname failed: " . mysqli_connect_error());
			}
					
			$query = mysqli_query($dbc, "SELECT grammy_category,win_artist,win_song,win_year FROM grammy_wins WHERE win_media_type='song' ORDER BY win_song ASC")
				or die (mysqli_error($dbc).$query);
			echo "<ul>";
			while ($row = mysqli_fetch_array($query)) {
				echo "<li><strong>{$row['win_song']}</strong> by {$row['win_artist']} <em>({$row['grammy_category']}, {$row['win_year']})</em></li>";
			}
			echo "</ul>";

			mysqli_close($dbc);
		?>
	</section>
	</main>
	<footer>
		<p>&copy; 2021, J.S.A. Productions, Piscataway, NJ 08854</p>
	</footer>
</body>
</html>