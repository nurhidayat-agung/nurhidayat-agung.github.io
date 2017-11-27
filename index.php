<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

        <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon-32x32.png">
		<title>CAT Presentasion</title>

		<meta name="description" content="cat presentasiion">
		<meta name="author_reveal" content="Hakim El Hattab">
        <meta name="author_content" content="Agung Nur Hidayat">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../library/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css" id="theme">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

        <link rel="stylesheet" type="text/css" href="../library/css/font-awesome.min.css">

<!--        custom css-->
        <link rel="stylesheet" href="css/custom.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

<!--        bootstrap -->
<!--        <script src="../library/js/jquery-2.1.1.min.js"></script>-->
<!--        <script src="../library/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body class="container-full">

		<div class="reveal container-full">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides container-full">
                <section>
                    <section class="col-md-12">
                        <div class="col-md-12 container-full">
                            <p id="judul">Pengembangan Tool Computerized Adaptive Testing</p>
                            <p id="judul">Dengan Algoritma k-Means untuk Clustering soal</p>
                            <p id="judul">dan Pemilihan Butir Test dengan Fuzzy Logic</p>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <img src="../assets/profile.png">
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <p id="identitas">Agung Nur Hidayat</p>
                                    <p id="identitas">14.11.7659</p>
                                    <p id="identitas">Android & .Net Programer</p>
                                </div>
                                <a href="https://github.com/nurhidayat-agung">
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/agung-nur-hidayat-183989119/">
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100013344675602">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p id="judul">S1 Informatika</p>
                            <p id="judul">Universitas AMIKOM Yogyakata</p>
                        </div>

                    </section>

                    <section id="transitions">
                        <h2>Transition Styles</h2>
                        <p>
                            You can select from different transitions, like: <br>
                            <a href="?transition=none#/transitions">None</a> -
                            <a href="?transition=fade#/transitions">Fade</a> -
                            <a href="?transition=slide#/transitions">Slide</a> -
                            <a href="?transition=convex#/transitions">Convex</a> -
                            <a href="?transition=concave#/transitions">Concave</a> -
                            <a href="?transition=zoom#/transitions">Zoom</a>
                        </p>
                    </section>

                    <section id="themes">
                        <h2>Themes</h2>
                        <p>
                            reveal.js comes with a few themes built in: <br>
                            <!-- Hacks to swap themes after the page has loaded. Not flexible and only intended for the reveal.js demo deck. -->
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/black.css'); return false;">Black (default)</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/white.css'); return false;">White</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/league.css'); return false;">League</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/sky.css'); return false;">Sky</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/beige.css'); return false;">Beige</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/simple.css'); return false;">Simple</a> <br>
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/serif.css'); return false;">Serif</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/blood.css'); return false;">Blood</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/night.css'); return false;">Night</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/moon.css'); return false;">Moon</a> -
                            <a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/solarized.css'); return false;">Solarized</a>
                        </p>
                    </section>

                </section>

				<!-- Example of nested vertical slides -->
				<section>
                    <section>
                        <h2 id="headerSubBab">Computerized Adaptive Testing</h2>
                        <p id="contentSubBab">adalah sebuah model pengujian terkomputerisasi dimana pemilihan butir soalnya menyesuaikan tingkat kemampuan peserta tes.</p>
                    </section>
					<section>
						<h2 id="headerSubBab">Kenapa Harus Adaptif ?</h2>
                        <ul>
                            <li id="contentSubBab">Validitas Penilaian</li>
                            <li id="contentSubBab">Objektifitas Penilaian</li>
                            <li id="contentSubBab">Akurasi dan efektifitas Penilaian</li>
                        </ul>
					</section>
					<section>
						<h2 id="headerSubBab">Konsep Pengujian dalam Islam</h2>
						<p id="contentSubBab">bentuknya = 2 : 155 - 157</p>
						<p id="contentSubBab">metodenya = 2 : 286</p>
						<p id="contentSubBab">tujuanya = 67 : 2</p>
					</section>
				</section>

                <section>
                    <h2 id="headerSubBab">masalah ?</h2>
                    <p id="contentSubBab">model pengujian yang bisa menyajikan soal sesuai dengan tingkat kemampuan siswa ?</p>
                    <p id="contentSubBab">(tingkat kemampuan siswa tidak pasti atau relatif)</p>
                </section>

                <section>
                    <h2 id="headerSubBab">Teori Responsi Butir</h2>
                    <p id="contentSubBab">Tingkat kemampuan siswa terlihat dari peluang terjawab benar sebuah butir soal dimana peluang tersebut ditentukan oleh karakteristik butir soal</p>
                    <p id="contentSubBab">(karakteristik butir soal : tingkat kesulitan dan daya pembeda soal)</p>
                </section>

                <section>
                    <section>
                        <h2 id="headerSubBab">Tingkat Kesulitan Soal</h2>
                        <p id="contentSubBab">adalah suatu nilai yang menyatakan indek kesulitan butir soal. Berkisar 0 - 1, semakin mendekati 0 berati soal semakin sulit untuk di kerjakan dan dibutuhkan tingkat kemampuan siswa yang tinggi untuk bisa menjawab dengan benar</p>
                        <p id="contentSubBab">nilai indek tingkat kesulitan berbanding terbalik dengan kemampuan siswa</p>
                    </section>
                    <section>
                        <h2 id="headerSubBab">Tingkat Kesulitan Soal</h2>
                        <div class="col-md-12">
                            <img src="img/rumusSulit.PNG">
                        </div>
                    </section>
                </section>

                <section>
                    <section>
                        <h2 id="headerSubBab">Daya Pembeda</h2>
                        <p id="contentSubBab">adalah suatu nilai yang menyatakan tingkat kemampuan sebuah butir soal untuk membedakan antara siswa yang memiliki kemampuan rendah dengan siswa yang memiliki kemampuan tinggi</p>
                        <p id="contentSubBab">nilai indek daya pembeda sebanding dengan kemampuan siswa</p>
                    </section>
                    <section>
                        <h2 id="headerSubBab">Daya Pembeda</h2>
                        <div class="col-md-12">
                            <img src="img/rumusDayaPembeda.PNG">
                        </div>
                    </section>
                </section>

                <section>
                    <section>
                        <h2 id="headerSubBab">Kenapa Logika Fuzzy ?</h2>
                        <p id="contentSubBab">Logika Fuzzy algoritma matematika untuk menangani informasi yang tidak pasti, ambigu, dan perkiraan, yang dipengaruhi oleh beberapa bilangan variabel input berdasarkan set aturan yang digunakan</p>
                    </section>
                    <section>
                        <h2 id="headerSubBab">Set rule saat menjawab benar</h2>
                        <ul>
                            <li id="contentSubBab">Jika indeks kesulitan soal (b) turun atau daya beda (α) naik, maka tingkat kemampuan siswa (θ) naik.</li>
                            <li id="contentSubBab">Jika indeks kesulitan soal (b) turun atau daya beda (α) turun, maka tingkat kemampuan siswa(θ) naik.</li>
                            <li id="contentSubBab">Jika indes kesulitan soal (b) naik atau daya beda (α) naik, maka tingkat kemampuan siswa (θ) naik.</li>
                            <li id="contentSubBab">Jika indeks kesulitan soal (b) naik dan daya beda (α) turun, maka tingkat kemampuan siswa (θ) turun.</li>
                        </ul>
                    </section>
                    <section>
                        <h2 id="headerSubBab">Set rule saat menjawab salah</h2>
                        <ul>
                            <li id="contentSubBab">Jika indeks kesulitan soal (b) turun atau daya beda (α) naik, maka tingkat kemampuan siswa (θ) turun.</li>
                            <li id="contentSubBab">Jika indeks kesulitan soal (b) turun atau daya beda (α) turun, maka tingkat kemampuan siswa(θ) turun.</li>
                            <li id="contentSubBab">Jika indes kesulitan soal (b) naik atau daya beda (α) naik, maka tingkat kemampuan siswa (θ) turun.</li>
                            <li id="contentSubBab">Jika indeks kesulitan soal (b) naik dan daya beda (α) turun, maka tingkat kemampuan siswa (θ) naik.</li>
                        </ul>
                    </section>
                </section>

                <section>
                    <section>
                        <h2 id="headerSubBab">Kenapa memngunakan algoritma pengklusteran data mining?</h2>
                        <ul>
                            <li id="contentSubBab">scalability</li>
                            <li id="contentSubBab">fleksibel</li>
                        </ul>
                    </section>
                    <section>
                        <h2 id="headerSubBab">k-Means ?</h2>
                        <p id="contentSubBab">algoritma untuk mengelompokan data sesuai dengan kemiripan variabel inputnya berdasarkan kedekatan dengan centroid</p>
                    </section>
                    <section>
                        <h2 id="headerSubBab">perhitungan jarak centroid</h2>
                        <div class="col-md-12">
                            <img src="img/jarakCentroid.PNG">
                        </div>
                    </section>
                </section>

                <section>
                    <section>
                        <h2 id="headerSubBab">Pengujian Metode</h2>
                        <p id="contentSubBab">Uji coba dilakukan dengan membandingkan kemiripan urutan antara metode klasik dan metode adaptif dengan acuan metode klasik yang menyajikan seluruh soal</p>
                    </section>
                    <section>
                        <h2 id="headerSubBab">Pengujian Metode</h2>
                        <ol>
                            <li id="contentSubBab">Uji tes klasik 40 butir soal</li>
                            <li id="contentSubBab">Uji tes klasik 10 butir soal</li>
                            <li id="contentSubBab">Uji tes adaptif dengan 7 butir soal</li>
                        </ol>
                    </section>
                    <section>
                        <h2 id="headerSubBab">Tingkat Kemiripan Urutan</h2>
                        <img src="img/akurasi.PNG">
                    </section>
                    <section>
                        <h2 id="headerSubBab">Hasil</h2>
                        <img src="img/hasilAkrasi.PNG">
                    </section>
                </section>



				<section>
					<h2>Kesimpulan</h2>
					<blockquote >
                        <p id="contentSubBab">Tool computerized adaptive test ini mampu : </p>
                        <ul>
                            <li id="contentSubBab">membangun bank soal.</li>
                            <li id="contentSubBab">melakukan perhitungan kalibrasi butir soal.</li>
                            <li id="contentSubBab">melakukan pengklusteran butir soal.</li>
                        </ul>
                        <p id="contentSubBab">Pengujian adaptif memiliki akurasi lebih baik sebesar 29.09 % dengan metode klasik dengan perbandingan soal 7 : 10 dengan acuan 40 butir soal.</p>
					</blockquote>
				</section>

				<section style="text-align: left;">
					<h1>Terima kasih</h1>
					<p>
						- <a href="http://localhost/e_selo_cat/admin/">Demo Lokal</a> <br>
						- <a href="https://nurhidayat-agung.com/e_selo_cat/admin/">Demo online</a> <br>
						- <a href="https://e-selo.id/admin/">Demo On Our Client</a> <br>
						- <a href="https://github.com/nurhidayat-agung?tab=repositories">Source code &amp; documentation</a> <br>
						- <a href="http://ojs.amikom.ac.id/index.php/semnasteknomedia/article/view/1716">publication on OJS AMIKOM</a>
					</p>
				</section>

                <section>
                    <h2>Need Code ?</h2>
                    <pre><code class="hljs" data-trim contenteditable>
function linkify( selector ) {
  if( supports3DTransforms ) {

    var nodes = document.querySelectorAll( selector );

    for( var i = 0, len = nodes.length; i &lt; len; i++ ) {
      var node = nodes[i];

      if( !node.className ) {
        node.className += ' roll';
      }
    }
  }
}
					</code></pre>
                    <p>Code syntax highlighting courtesy of <a href="http://softwaremaniacs.org/soft/highlight/en/description/">highlight.js</a>.</p>
                </section>

			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>

			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
</html>