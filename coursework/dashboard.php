<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gaming Dashboard</title>

  <style>
    body {
  margin: 0;
  font-family: 'Arial', sans-serif;
}

.dashboard-container {
  display: flex;
}

.sidebar {
  width: 250px;
  background-color: #1a1a1a;
  color: #fff;
  padding: 20px;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}

.sidebar h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar li {
  margin-bottom: 10px;
}

.sidebar a {
  text-decoration: none;
  color: #fff;
  font-size: 18px;
}

.content {
  flex: 1;
  padding: 20px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.header h2 {
  font-size: 24px;
}

.button {
  background-color: #3498db;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.main-content {
  background-color: #2c3e50;
  color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.dark-mode {
  background-color: #121212;
  color: #fff;
}
img{
    width:20px;
} 

 .player-profile {
 display: flex;
 align-items: center;
 margin-bottom: 20px;
 }

 .player-profile img {
 width: 50px;
 height: 50px;
 border-radius: 50%;
 margin-right: 10px;
 }

.team-profile {
 display: flex;
 align-items: center;
 margin-bottom: 20px;
 }

.team-profile img {
 width: 50px;
 height: 50px;
 border-radius: 50%;
 margin-right: 10px;
 }

  </style>
</head>
<body>

<div class="dashboard-container">
  <div class="sidebar">
    <h1>Gaming Dashboard</h1>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Games</a></li>
      <li><a href="#">Friends</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </div>

  <div class="content">
    <div class="header">
      <h2>Welcome, Player!</h2>
      <button onclick="toggleDarkMode()">
    <img src="assets/images/night-mode.png" alt="">
    
    </button>
    </div>

    <div class="main-content">
      <p>This is your gaming dashboard content.</p>
    </div>

 <div class="player-profile">
 <img src="../coursework/assets/images/team-member-4.png" alt="Player">
 <h2>MDMAX</h2>
 </div>

 <div class="team-profile">
 <img src="../coursework/assets/images/team-member-5.png" alt="Team Member">
 <h2>Team-APEX</h2>
 </div>
  </div>
  
</div>


<script>

function toggleDarkMode() {
  const body = document.body;
  body.classList.toggle('dark-mode');
}

</script>
</body>
</html>
