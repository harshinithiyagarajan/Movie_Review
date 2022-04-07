<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    ?>
}
<!DOCTYPE html>
<html>

<head>
	<title>Movie Review</title>	
	<!-- linking the stylesheet(CSS) -->
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
    <h2>Welcome !! to MovieReview</h2> 
	<div class="segen">
        <div class="search">
            <form id="form">
                <!-- input tag -->
                <input id="searchbar" onkeyup="search_movies()"
                name="search" id="sea" placeholder="Search Movies..">
                <button>Search</button>
            </form>
        </div> 
        <div class="genre">
            <label for="gen">Genre</label>
            <select name="gen" id="genres">
                <option value="Select">Select</option>
                <option value="romantic">Romantic</option>
                <option value="sports">Sports</option>
                <option value="comedy">Comedy</option>
            </select>
            <input type="button" onclick="myfunction">
                <script>
                    function myfunction() {
                var obj = document.getElementById("genres");
                document.write(obj.options[obj.selectedIndex].text);
                }
                </script>
            </div> 
           
        </div>
    <div  id="movie">
        <h3>Movies</h3>
        <div>
            <ol id='list'></ol>
            <a href="movie1.html">1<img src="C:\xampp\htdocs\movie_review\images\movie1.jpg" alt="movie1"></a>
                <a href="movie2.html">2<img src="C:\xampp\htdocs\movie_review\images\movie2.jpg" alt="movie2"></a>
                <a href="movie3.html">3<img src="C:\xampp\htdocs\movie_review\images\movie3.jpg" alt="movie3"></a>
                <a href="movie4.html">4<img src="C:\xampp\htdocs\movie_review\images\movie4.jpg" alt="movie4"></a>
                <a href="movie5.html">5<img src="C:\xampp\htdocs\movie_review\images\movie5.jpg" alt="movie5"></a>
                <a href="movie6.html">6<img src="C:\xampp\htdocs\movie_review\images\movie6.jpg" alt="movie6"></a>
                <a href="movie7.html">7<img src="C:\xampp\htdocs\movie_review\images\movie7.jpg" alt="movie7"></a>
                <a href="movie8.html">8<img src="C:\xampp\htdocs\movie_review\images\movie8.jpg" alt="movie8"></a>
                <a href="movie9.html">9<img src="C:\xampp\htdocs\movie_review\images\movie9.jpg" alt="movie9"></a>
        </ol>
        </div>
    </div>  
	
	<script src="./movies.js"></script>
</body>
<style>
#searchbar{
	margin-left: 15%;
	padding:15px;
	border-radius: 10px;
}

input[type=text] {
	width: 30%;
	-webkit-transition: width 0.15s ease-in-out;
	transition: width 0.15s ease-in-out;
}

#list{
	font-size: 1.5em;
	margin-left: 90px;
}

</style>
<script>
// JavaScript code
function search_movies() {
	let input = document.getElementById('searchbar').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('movies');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="list-item";				
		}
	}
}
</script>
</html>


<?php
}
else{
    header("Location: index.php");
    exit();
}