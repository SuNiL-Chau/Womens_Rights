<?php

include 'connect.php';

// 1st
$sql1h = "SELECT topic FROM rights WHERE sr=1";
$sql1b = "SELECT texts FROM rights WHERE sr=1";
$result1h = mysqli_query($conn, $sql1h);
$result1b = mysqli_query($conn, $sql1b);

if (mysqli_num_rows($result1h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1h)) {
      $h1 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result1b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1b)) {
      $h1b = $row["texts"];
    }
} else {
    echo "0 results";
}

// 2nd
$sql2h = "SELECT topic FROM rights WHERE sr=2";
$sql2b = "SELECT texts FROM rights WHERE sr=2";
$result2h = mysqli_query($conn, $sql2h);
$result2b = mysqli_query($conn, $sql2b);

if (mysqli_num_rows($result2h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2h)) {
      $h2 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result2b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2b)) {
      $h2b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 3rd
$sql3h = "SELECT topic FROM rights WHERE sr=3";
$sql3b = "SELECT texts FROM rights WHERE sr=3";
$result3h = mysqli_query($conn, $sql3h);
$result3b = mysqli_query($conn, $sql3b);

if (mysqli_num_rows($result3h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result3h)) {
      $h3 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result3b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result3b)) {
      $h3b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 4th
$sql4h = "SELECT topic FROM rights WHERE sr=4";
$sql4b = "SELECT texts FROM rights WHERE sr=4";
$result4h = mysqli_query($conn, $sql4h);
$result4b = mysqli_query($conn, $sql4b);

if (mysqli_num_rows($result4h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result4h)) {
      $h4 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result4b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result4b)) {
      $h4b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 5th
$sql5h = "SELECT topic FROM rights WHERE sr=5";
$sql5b = "SELECT texts FROM rights WHERE sr=5";
$result5h = mysqli_query($conn, $sql5h);
$result5b = mysqli_query($conn, $sql5b);

if (mysqli_num_rows($result5h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result5h)) {
      $h5 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result5b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result5b)) {
      $h5b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 6th
$sql6h = "SELECT topic FROM rights WHERE sr=6";
$sql6b = "SELECT texts FROM rights WHERE sr=6";
$result6h = mysqli_query($conn, $sql6h);
$result6b = mysqli_query($conn, $sql6b);

if (mysqli_num_rows($result6h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result6h)) {
      $h6 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result6b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result6b)) {
      $h6b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 7th
$sql7h = "SELECT topic FROM rights WHERE sr=7";
$sql7b = "SELECT texts FROM rights WHERE sr=7";
$result7h = mysqli_query($conn, $sql7h);
$result7b = mysqli_query($conn, $sql7b);

if (mysqli_num_rows($result7h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result7h)) {
      $h7 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result7b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result7b)) {
      $h7b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 8th
$sql8h = "SELECT topic FROM rights WHERE sr=8";
$sql8b = "SELECT texts FROM rights WHERE sr=8";
$result8h = mysqli_query($conn, $sql8h);
$result8b = mysqli_query($conn, $sql8b);

if (mysqli_num_rows($result8h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result8h)) {
      $h8 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result8b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result8b)) {
      $h8b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 9th
$sql9h = "SELECT topic FROM rights WHERE sr=9";
$sql9b = "SELECT texts FROM rights WHERE sr=9";
$result9h = mysqli_query($conn, $sql9h);
$result9b = mysqli_query($conn, $sql9b);

if (mysqli_num_rows($result9h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result9h)) {
      $h9 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result9b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result9b)) {
      $h9b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 10th
$sql10h = "SELECT topic FROM rights WHERE sr=10";
$sql10b = "SELECT texts FROM rights WHERE sr=10";
$result10h = mysqli_query($conn, $sql10h);
$result10b = mysqli_query($conn, $sql10b);

if (mysqli_num_rows($result10h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result10h)) {
      $h10 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result10b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result10b)) {
      $h10b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 11th
$sql11h = "SELECT topic FROM rights WHERE sr=11";
$sql11b = "SELECT texts FROM rights WHERE sr=11";
$result11h = mysqli_query($conn, $sql11h);
$result11b = mysqli_query($conn, $sql11b);

if (mysqli_num_rows($result11h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result11h)) {
      $h11 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result11b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result11b)) {
      $h11b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 12th
$sql12h = "SELECT topic FROM rights WHERE sr=12";
$sql12b = "SELECT texts FROM rights WHERE sr=12";
$result12h = mysqli_query($conn, $sql12h);
$result12b = mysqli_query($conn, $sql12b);

if (mysqli_num_rows($result12h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result12h)) {
      $h12 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result12b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result12b)) {
      $h12b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 13th
$sql13h = "SELECT topic FROM rights WHERE sr=13";
$sql13b = "SELECT texts FROM rights WHERE sr=13";
$result13h = mysqli_query($conn, $sql13h);
$result13b = mysqli_query($conn, $sql13b);

if (mysqli_num_rows($result13h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result13h)) {
      $h13 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result13b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result13b)) {
      $h13b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 14th
$sql14h = "SELECT topic FROM rights WHERE sr=14";
$sql14b = "SELECT texts FROM rights WHERE sr=14";
$result14h = mysqli_query($conn, $sql14h);
$result14b = mysqli_query($conn, $sql14b);

if (mysqli_num_rows($result14h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result14h)) {
      $h14 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result14b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result14b)) {
      $h14b = $row["texts"];
    }
} else {
    echo "0 results";
}


// 15th
$sql15h = "SELECT topic FROM rights WHERE sr=15";
$sql15b = "SELECT texts FROM rights WHERE sr=15";
$result15h = mysqli_query($conn, $sql15h);
$result15b = mysqli_query($conn, $sql15b);

if (mysqli_num_rows($result15h) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result15h)) {
      $h15 = $row["topic"];
    }
} else {
    echo "0 results";
}
  
if (mysqli_num_rows($result15b) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result15b)) {
      $h15b = $row["texts"];
    }
} else {
    echo "0 results";
}



mysqli_close($conn);
?>