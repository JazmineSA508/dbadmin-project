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
        	<li><a href="./tnt.php">TNTs</a></li>
        	<li><a href="./tbd.php" class="current">TBDs</a></li>
        	<li><a href="./diy.php">DIY SQL Statements</a></li>
    	</ul>
	</nav>
	<main>
		<section>
			<h1>So...What's Next? (TBDs)</h1>
			<ul>
				<li><strong>Academics:</strong> I am DONE with school for the forseeable future! My parents put me in school really early (2 years old), and I'm turning 23 this year. I think 20+ years of schooling is MORE than enough, especially since I'll have my B.S. in Information Technology and M.S. in IT Administration and Security. Maybe further down the line I'll consider pursuing a PhD, but for now I can't wait to experience life outside of school!</li>
				<li><strong>Work:</strong> I received a job offer back in November to work as an Infrastructure Engineer and will be starting in August! I'm really excited to start working. I've worked 3 internships during my time here at NJIT that each gave me priceless knowledge and experience to help me not only continue my studies, but also to narrow down what I want to do in my career, what my strengths and weaknesses are on the job, and how to properly work in a corporate IT environment. Even though the job is currently set to start virtually, I can't wait to begin my first adult job!</li>
				<li><strong>Life:</strong> All my life I've always had a plan and when things didn't go as expected, I was quick to adapt and change to keep myself on the path I wanted to be on. But now, I've accomplished everything I set out to do. I got the job doing what I wanted, I have a stable relationship going on 5-years strong and I'm finishing my Master's degree only a year after receiving my Bachelor's degree. So, for now, I'm honestly just feeling it out as I go. Until I hit a roadblock or have some other goals to achieve, I'm just going to take life one day at a time and try to live life to the fullest. I'm excited to see what the universe has in store for me!
			</ul>
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
				<h1>Platinum Certified Albums by my Top 10 Artists!</h1>
            	<?php
					require_once("autoload.php");
					
					$dbc = mysqli_connect($host, $username, $password, $dbname);
					
					if(! $dbc ) {
						die("Connection to $dbname failed: " . mysqli_connect_error());
					}
					
					$query = mysqli_query($dbc, "SELECT music_catalog.album_name,music_catalog.artist,riaa_certifications.riaa_cert FROM music_catalog INNER JOIN riaa_certifications ON music_catalog.id=riaa_certifications.media_id WHERE media_type='album' && NOT riaa_cert='Gold' ORDER BY album_name ASC")
						or die (mysqli_error($dbc).$query);
					echo "<ul>";
					while ($row = mysqli_fetch_array($query)) {
						echo "<li><strong>{$row['album_name']}</strong> by {$row['artist']} <em>({$row['riaa_cert']})</em></li>";
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