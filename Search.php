<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/header.inc.php';
$pdo = connect();
?>
<script src="js/sort.js"></script>
<body>
    <div class="site_width">
        <div class="refinements">
            <form class="refinements_form" method="post">
                <section class="fieldset">
                    <header>Relevance</header>
                    <div class="refinements_radiobutton">
                        <input type="radio" name="ref" value="rhtl" checked="checked" />
                        <label class for="relevance">High to Low</label>
                    </div>
                    <div class="refinements_radiobutton">
                        <input type="radio" name="ref" value="rlth" />
                        <label class for="newest">Low to High</label>
                    </div>
                </section>
            
                <section class="fieldset">
                    <header>Price</header>
                    <div class="refinements_radiobutton">
                        <input type="radio" name="ref" value="phtl" />
                        <label class for="trelevance">High to Low</label>
                    </div>
                    <div class="refinements_radiobutton">
                        <input type="radio" name="ref" value="plth" />
                        <label class for="newest">Low to High</label>
                    </div>
                </section>
                
            </form>
        </div>

        <div class="search-result">
            <div class="result-header">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- <div class="records">Showing: <b>1-20</b> of <b>200</b> result</div> -->
                        <!-- <div class="records">Showing <?php echo $sum; ?> results</div> -->
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="result-actions">
                            <form action="Search.php" method="post">
                                <div class="result-sorting">
                                    <span>Sort By:</span>
                                    
                                    <select class="form-control border-0" id="exampleOption" name="sort" onchange="reload()">
                                        <option value="rel">Relevance</option>
                                        <option value="pri">Price</option>
                                    </select>
                                    <script>
                                        function reload() {
                                            var value = document.getElementById("exampleOption").value;
                                            //Ajax for calling php function
                                            // $.post('index.php', { sort: value }, function(data){
                                            //     alert('ajax completed. Response:  '+data);
                                            //     })
                                            alert(value);
                                            window.location.herf = "Search.php?sort=pri";
                                        }
                                    </script>
                                </div> -->
                            <!-- </form> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>   
            <div class="products">
            </div>
            <!-- <div class="pagination">
                <ul class="pagination">
                    <li class="Prev disable"><a href="#">«</a></li>
                    <!-- <li class="page active"><a href="#">1</a></li>
                    <li class="page"><a href="#">2</a></li>
                    <li class="page"><a href="#">3</a></li>
                    <li class="page"><a href="#">4</a></li>
                    <li class="page"><a href="#">5</a></li>
                    <li ><a href="#">6</a></li>
                    <li><a href="#">7</a></li> -->
                    <li class="Next"><a href="#">»</a></li>
                </ul>
            </div> -->
    </div>

</body>
</html>