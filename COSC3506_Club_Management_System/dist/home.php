<?php
session_start();
require_once './database/db_connection.php';

$query = "SELECT club_id, clubName, clubDescription, bannerImage FROM clublist";
$result = mysqli_query($conn, $query);
?>

<?php require_once './Includes/pageHeader.php' ?>
    <style>
      .club-banner {
        background-size: cover;
        background-position: center;
      }
      .club-item {
        flex: 1 1 calc(33.333% - 1rem);
        box-sizing: border-box;
      }
      .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
      }
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }
      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
  <?php require_once './Includes/navBar.php'; ?>
  <div class="px-24">
    <div class="font-roboto font-black text-main-purple text-8xl">
      Home Page
    </div>
    <div class="font-roboto font-black text-main-purple text-4xl mt-4">
      View All Clubs:
    </div>
    <div class="flex flex-wrap gap-4 mt-10 relative">
      <?php while ($row = mysqli_fetch_assoc($result)) { 
        $club_id = $row['club_id'];
        $user_id = $_SESSION['user_id'];
        $check_query = "SELECT * FROM userclub WHERE user_id = ? AND club_id = ?";
        $stmt = $conn->prepare($check_query);
        $stmt->bind_param("ii", $user_id, $club_id);
        $stmt->execute();
        $check_result = $stmt->get_result();
        $is_member = $check_result->num_rows > 0;
        $stmt->close();
      ?>
        <div class="club-item bg-main-blue cursor-pointer rounded-lg h-60 shadow-2xl p-1" style="z-index: 1" onclick="openModal('<?php echo $row['club_id']; ?>', '<?php echo htmlspecialchars($row['clubName']); ?>', '<?php echo htmlspecialchars($row['clubDescription']); ?>', <?php echo $is_member ? 'true' : 'false'; ?>)">
          <div class="h-full w-full p-3 club-banner" style="background-image: url('data:image/jpeg;base64,<?php echo base64_encode($row['bannerImage']); ?>'); z-index: 2;">
            <div class="flex h-full w-full items-center">
              <div class="font-roboto font-black text-white text-6xl text-shadow">
                <?php echo htmlspecialchars($row['clubName']); ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- The Modal -->
  <div id="clubModal" class="modal">
    <div class="w-1/3 px-20 py-5 bg-white shadow-xl rounded-lg"
    style="margin: 15% auto;">
      <span class="close" onclick="closeModal()">&times;</span>
      <div class="flex flex-col gap-10 justify-center">
      <div>
        <div class="font-roboto font-light"> Club Name: </div>
        <div id="modalClubName" class="font-roboto font-black text-5xl"></div>
      </div>
      <div>
        <div class="font-roboto font-light">Club Description:  </div>
        <p id="modalClubDescription" class="font-roboto font-bold text-2xl"></p>
      </div>
      <div class="flex items-center justify-center">
        <a id="joinClubButton" href="#" class="bg-main-blue rounded-lg w-20 text-center text-white font-roboto font-medium"></a>
      </div>
      </div>
    </div>
  </div>

  <script>
    function openModal(clubId, clubName, clubDescription, isMember) {
      document.getElementById('modalClubName').innerText = clubName;
      document.getElementById('modalClubDescription').innerText = clubDescription;
      const joinClubButton = document.getElementById('joinClubButton');
      if (isMember) {
        joinClubButton.innerText = 'View Club';
        joinClubButton.href = './club.php?club_id=' + clubId;
      } else {
        joinClubButton.innerText = 'Join Club';
        joinClubButton.href = './joinClubAction.php?club_id=' + clubId;
      }
      document.getElementById('clubModal').style.display = "block";
    }

    function closeModal() {
      document.getElementById('clubModal').style.display = "none";
    }
  </script>
  <script src="./JS/navbar.js"></script>
</html>




