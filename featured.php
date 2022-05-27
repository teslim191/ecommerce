<section class='container'>
  <div class='row'>


<?php
include "connection/dbase.php";
$result_per_page = 4;
$sql = "SELECT * FROM product WHERE product_type='featured'";
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$result_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
}
else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page - 1)* $result_per_page;

$previous =$page - 1;
$next = $page + 1;

$sql = "SELECT * FROM product WHERE product_type='featured' LIMIT " . $this_page_first_result . ',' . $result_per_page;
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result); 

if ($result) {
  while ($arr = mysqli_fetch_array($result)) {
    $p_id = $arr['id'];
    $p_name = $arr['product_name'];
    $p_image = $arr['product_image'];
    $p_desc = $arr['product_desc'];
    $p_price = $arr['product_price'];

    echo "
      
        <div class='col-lg-3 col-md-6 mb-4'>
          <div id='con'  class='card h-100' style='width: ;'>
            <div class='container-fluid pt-2'>
              
              <img src='product_image/$p_image' class='card-img-top' alt='...' max-height: 50%>
            </div>
            <div class='card-body'>
              <p class='card-text'> <b>$p_name</b></p>
              <p class='card-text'> <b>₦"; echo number_format($p_price,2); echo "</b></p> 
              <p class='card-text'>"; echo substr($p_desc, 0, 4)."..."; echo "</p>
              <br>
              <a href='productdetails.php?id=$p_id' style='background-color:#003399 ; color: snow;' class='btn'>More Info</a>
            </div>
          </div>
        </div>
      
    ";
  }
} 

?>
</div>
</section>

<!-- pagination -->
<center>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label='Page navigation example'>
                    <ul class='pagination justify-content-center'>
                        <li>
                            <a href="index.php?page=<?=$previous; ?>">
                            <span>&laquo;previous</span>
                            </a>
                        </li>
                    <?php for ($page=1; $page <= $number_of_pages; $page++): ?>
                        <li class='page-item'><a class="page-link" href="index.php?page=<?=$page; ?>"><?= $page; ?></a></li>
                    <?php endfor;     ?>
                        <li>
                            <a href="index.php?page=<?=$next; ?>">
                            <span>next &raquo;</span>
                            </a>
                        </li> 
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</center>