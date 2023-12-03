<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-frontend.css">
    <title>Online quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>

    <div class="start_btn"><button>Start Quiz</button></div>

   
    <div class="info_box">
        <div class="info-title"><span>Rules for the quiz

        </span></div>
        <div class="info-list">
            <div class="info">1. Once you select your answer, it can't be undone.</div>
            <div class="info">2. You will have only 15 seconds per each question.</div>
            <div class="info">3. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

   
    <div class="quiz_box">
        <header>
            <div class="title">Online quiz</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
            </div>
            <div class="option_list">
            </div>
        </section>

        <footer>
            <div class="total_que">
               
            </div>
            <button class="next_btn">Next Question</button>
        </footer>
    </div>

   
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
         
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>
    <a href="logout.php" class="btn btn-warning logout-button">Logout</a>
    
    <script src="question.js"></script>

    <script src="script.js"></script>

</body>
</html>
