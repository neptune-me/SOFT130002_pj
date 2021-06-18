<?php 
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/header.inc.php';
$pdo = connect();
?>
<!-- <script src="js/sort.js"></script> -->
<script src="js/search.js"></script>
<script src="js/pagination.js"></script>
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
            <!-- <div class="result-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="records">Showing: <b>1-20</b> of <b>200</b> result</div>
                        <div class="records">Showing <span class="sum"></span> results</div>
                    </div>
                    
                </div>
            </div>    -->
            <div class="products row">
            </div>
            <div id="pagination-container"></div>  
            <!-- <div class="pagination" id="Pagination">
                <ul class="pagination">
                    <li class="Prev disable"><a href="#">«</a></li>
                    <li class="Next"><a href="#">»</a></li>
                </ul>
            </div> -->
    </div>

</body>
</html>