<html>

<head>
  <style>
    /* Style navigation bar */
    .navbar {
      display: inline-block;
      padding: 5px;
      margin: 5px;
      text-decoration: none;
      color: rgb(14, 13, 13);
      border: solid black;
    }

    /* Style navigation bar links */
    /* .navbar a {
        color: #fff;
        text-decoration: none;
        margin-right: 10px;
      } */
    /* Style video player container */
    .video-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 500px;
      margin: 0 auto;
    }

    /* Style video player */
    .video-player {
      width: 95%;
      height: 95%;
    }

    /* Style arrow buttons */
    .arrow-button {
      width: 75px;
      height: 75px;
      border-radius: 50%;
      background-color: #000;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      opacity: 0.5;
      cursor: pointer;
    }

    /* Style video description */
    .video-description {
      background-color: #f0f0f0;
      padding: 20px;
      text-align: center;
      font-size: large;
    }
    body {
        display: flexbox;
        background-image: url("courses.jpg");
        /* background-repeat: no-repeat; */
        background-position: center;
        /* background-size: contain; */
        }
  </style>
</head>

<body>
  <header class="head">
    <div><a class="finance" href="index.php">
            <img src="logo.jpg" width="100px" height="50px" alt="NO LOGO">Finance Kannada

        </a>
        <nav>
            <a class="navbar" href="index.php">Home</a>
            <a class="navbar" href="courses.php">Course</a>
            <a class="navbar" href="index.php">Logout</a>
            <input type="text" name="Search" id="Search" placeholder="Search">
        </nav>
    </div>
</header>
      <br>
      <h2 id="title">Introductory video</h2>
      <div class="video-container">
        <div class="arrow-button" id="previous-button" onclick="previousVideo()">
          <i class="fa fa-arrow-left">Back</i>
        </div>
        <video class="video-player" id="video" controls src="/videos/videoplayback.mp4" type="video/mp4" preload="auto">
          <!-- <source id="video" src="/videos/videoplayback.mp4" type="video/mp4"> -->
          Your browser does not support the video tag.
        </video>
        <div class="arrow-button" id="next-button" onclick="nextVideo()">
          <i class="fa fa-arrow-right">Next</i>
        </div>
      </div>
      <div class="video-description">
        
      </div>
      <script>
        function previousVideo() {
          const set = ["Introductory video", "Starting video"];
          const vid = ["/videos/videoplayback.mp4", "/videos/videoplayback1.mp4"]
          let x = document.getElementById("title").innerHTML;
          let i = 0;
          let pre = document.getElementById("previous-button");
          let nex = document.getElementById("next-button");
          let vdo = document.getElementById("video");
          console.log(x);
          while (set[i] != x) {
            i++;
          }
          if (i == 0) {
            document.getElementById("previous-button").disabled = true;
          } else {
            document.getElementById("title").innerHTML = set[--i];
            document.getElementById("video").src = vid[i];
            console.log(document.getElementById("video").src);
          }
        }
        function nextVideo() {
          const set = ["Introductory video", "Starting video"];
          const vid = ["/videos/videoplayback.mp4", "/videos/videoplayback1.mp4"]
          let x = document.getElementById("title").innerHTML;
          let i = 0;
          let pre = document.getElementById("previous-button");
          let nex = document.getElementById("next-button");
          let vdo = document.getElementById("video");
          console.log(x);
          while (set[i] != x) {
            i++;
          }
          if (i == set.length - 1) {
            document.getElementById("previous-button").disabled = true;
          } else {
            document.getElementById("title").innerHTML = set[++i];
            document.getElementById("video").src = vid[i];
            console.log(document.getElementById("video").src);
          }
        }
      </script>
</body>

</html>