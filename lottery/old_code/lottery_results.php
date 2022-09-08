<div id="results">
  <?php
  $db = new PDO("mysql:host=localhost;dbname=lottery_system;charset=utf8","root","");
  $sql = "SELECT * FROM lotteries";
  $sth = $db->prepare($sql);
  $sth->execute();
  $result = $sth->fetchAll();
  foreach($result as $row) {
    ?>

    <div class="lottery">
      <h2><?php echo $row['name'] ?></h2>
      <div class="info">
        <div>Prize: $<?php echo $row['prize'] ?></div>
        <div>Date: <?php echo $row['date'] ?></div>
      </div>
      <?php
      if(is_null($row['win_1'])) {
        ?>
        <div class="row">
          <h3>Lottery has not been drawn yet</h3>
          <a class="waves-effect waves-light btn red" onclick="gen_winner(<?php echo $row['lotto_id'] ?>)">Generate Numbers</a>
        </div>
      </div>
        <?php
      } else {
      ?>
      <h3>Numbers</h3>
      <div class="row">
        <div class="col s1 numbers"><?php echo $row['win_1'] ?></div>
        <div class="col s1 numbers"><?php echo $row['win_2'] ?></div>
        <div class="col s1 numbers"><?php echo $row['win_3'] ?></div>
        <div class="col s1 numbers"><?php echo $row['win_4'] ?></div>
        <div class="col s1 numbers"><?php echo $row['win_5'] ?></div>
        <div class="col s1 numbers"><?php echo $row['win_6'] ?></div>
      </div>
    </div>
    <?php
    }
  }
  ?>
</div>
