<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle Content</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    #container {
     
      text-align: center;
      background-color: #fff;
      padding: 50px;
      border-radius: 7px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #content-box {
      border: 1px solid #ccc;
      padding: 15px;
      margin-top: 20px;
      border-radius: 4px;
      font-size: 18px;
      position: relative;
    }
   
    button {
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    #timer {
    font-size: 24px;
    }
    }
    button:hover,
    button:active {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

<div id="container">
   <div id="timer"></div>
  <div id="content-box"></div>
  <br>
  <button onclick="toggleContent()">Licence Key</button>
</div>

<script>
  let contentBox = document.getElementById('content-box');
  let toggleFlag = false;
  let timer;
  
  function toggleContent() {
  toggleFlag = !toggleFlag;
  contentBox.textContent = toggleFlag ? 'aciky9gogttyujjnoo0hffnitg0' : 'z9h9hvdebki7gjigg4gkrfjiy6';
  
  // Start or reset the timer when toggling content
  clearInterval(timer);
  startTimer(5 * 60); // 5 minutes in seconds
  }
  
  function startTimer(durationInSeconds) {
  let timerDisplay = document.getElementById('timer');
  let duration = durationInSeconds;
  
  timer = setInterval(function () {
  let minutes = Math.floor(duration / 60);
  let seconds = duration % 60;
  
  timerDisplay.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
  
  if (--duration < 0) {
  clearInterval(timer);
  timerDisplay.textContent = 'Time is up!';
  }
  }, 1000);
  }


</script>
<script type="text/javascript">

let contentBox = document.getElementById('content-box');
  let toggleFlag = false;

  function toggleContent() {
    toggleFlag = !toggleFlag;
    contentBox.textContent = toggleFlag ? 'nak' : 'hh' : 'kkkk';
  }
</script>

</body>
</html>
