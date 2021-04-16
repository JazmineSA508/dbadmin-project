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
        	<li><a href="./tbd.php">TBDs</a></li>
        	<li><a href="./thx.php" class="current">Thanks + DB Info</a></li>
    	</ul>
	</nav>
	<main>
	<section>
    <h1>Thanks For Looking At My Site!</h1>
    <article>
    <p>Thank you so much for allowing me to make this project and share my NJIT experiences with you, I really appreciate it! As you can probably tell, I had a LOT of fun putting this project together. Sure, the PHP connection process was a pain, but at the end of the day I really made something I can look back on and be very proud of.</p><br>
	<p>As you probably noticed, on every webpage of this site, I have pulled a list of data from my database using a pre-made query in my PHP code. I was going to make a page to input your own SQL queries, but it proved to be a bit outside of my scope. Plus, I've already done SO MUCH with this project so I'd like to stop while I'm ahead! But, I sure hope you enjoyed my SuperNova as much as I enjoyed making it. Good luck out there and don't forget to always <strong><u><em>Remember the Music</em></u></strong></p>
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
		<h1>Roll Credits! (Database Info)</h1>
	<ul>
		<li><strong>artists</strong><ul>
			<li>name varchar(100) PRIMARY KEY</li>
			<li>genre varchar(100)</li>
			<li>record_label varchar(100) DEFAULT NULL</li></ul>
		</li>
		<li><strong>valid_media_type</strong><ul>
			<li>mtype varchar(5) PRIMARY KEY</li></ul>
		</li>
		<li><strong>music_catalog</strong><ul>
			<li>artist varchar(100)</li>
			<li>id int(4) UNIQUE</li>
			<li>media_type varchar(5) DEFAULT NULL</li>
			<li>song_name varchar(100) DEFAULT ''</li>
			<li>collab boolean DEFAULT NULL</li>
			<li>collab_artists varchar(255) DEFAULT NULL</li>
			<li>album_name varchar(100) DEFAULT ''</li>
			<li>release_year varchar(4) DEFAULT NULL</li>
			<li><strong>PRIMARY KEY:</strong> (id, artist, song_name, album_name)</li>
			<li><strong>FOREIGN KEYS:</strong><ul>
				<li>artist REFERENCES artists(name)</li>
				<li>media_type REFERENCES valid_media_type(mtype)</li></ul>
			</li></ul>
		</li>
		<li><strong>grammy_wins</strong><ul>
			<li>media_id int(4) DEFAULT NULL</li>
			<li>grammy_category varchar(255)</li>
			<li>win_artists varchar(100)</li>
			<li>win_song varchar(100) DEFAULT NULL</li>
			<li>win_album varchar(100) DEFAULT NULL</li>
			<li>win_media_type varchar(100) DEFAULT NULL</li>
			<li>win_year varchar(4)</li>
			<li><strong>PRIMARY KEY:</strong>(win_artist, grammy_category, win_year)</li>
			<li><strong>FOREIGN KEYS:</strong><ul>
				<li>(media_id, win_artist, win_song, win_album) REFERENCES music_catalog(id, artist, song_name, album_name)</li>
				<li>win_media_type REFERENCES valid_media_type(mtype)</li></ul>
			</li></ul>
		</li>
		<li><strong>riaa_certifications</strong><ul>
			<li>media_id int(4) PRIMARY KEY</li>
			<li>riaa_cert varchar(100) DEFAULT NULL</li>
			<li><strong>FOREIGN KEY:</strong>media_id REFERENCES music_catalog(id)</li></ul>
		</li>
	</ul>
		</section>
	</main>
	<footer>
		<p>&copy; 2021, J.S.A. Productions, Piscataway, NJ 08854</p>
	</footer>
</body>
</html>