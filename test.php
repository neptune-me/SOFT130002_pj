<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" title="default" href="css/style1.css">
    <script src="js/jq.js"></script>
    <script src="bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
    <script src="js/pagination.js"></script>
</head>
<style>
    .paginationjs{line-height:1.6;font-family:Marmelad,"Lucida Grande",Arial,"Hiragino Sans GB",Georgia,sans-serif;font-size:14px;box-sizing:initial}.paginationjs:after{display:table;content:" ";clear:both}.paginationjs .paginationjs-pages{float:left}.paginationjs .paginationjs-pages ul{float:left;margin:0;padding:0}.paginationjs .paginationjs-go-button,.paginationjs .paginationjs-go-input,.paginationjs .paginationjs-nav{float:left;margin-left:10px;font-size:14px}.paginationjs .paginationjs-pages li{float:left;border:1px solid #aaa;border-right:none;list-style:none}.paginationjs .paginationjs-pages li>a{min-width:30px;height:28px;line-height:28px;display:block;background:#fff;font-size:14px;color:#333;text-decoration:none;text-align:center}.paginationjs .paginationjs-pages li>a:hover{background:#eee}.paginationjs .paginationjs-pages li.active{border:none}.paginationjs .paginationjs-pages li.active>a{height:30px;line-height:30px;background:#aaa;color:#fff}.paginationjs .paginationjs-pages li.disabled>a{opacity:.3}.paginationjs .paginationjs-pages li.disabled>a:hover{background:0 0}.paginationjs .paginationjs-pages li:first-child,.paginationjs .paginationjs-pages li:first-child>a{border-radius:3px 0 0 3px}.paginationjs .paginationjs-pages li:last-child{border-right:1px solid #aaa;border-radius:0 3px 3px 0}.paginationjs .paginationjs-pages li:last-child>a{border-radius:0 3px 3px 0}.paginationjs .paginationjs-go-input>input[type=text]{width:30px;height:28px;background:#fff;border-radius:3px;border:1px solid #aaa;padding:0;font-size:14px;text-align:center;vertical-align:baseline;outline:0;box-shadow:none;box-sizing:initial}.paginationjs .paginationjs-go-button>input[type=button]{min-width:40px;height:30px;line-height:28px;background:#fff;border-radius:3px;border:1px solid #aaa;text-align:center;padding:0 8px;font-size:14px;vertical-align:baseline;outline:0;box-shadow:none;color:#333;cursor:pointer;vertical-align:middle\9}.paginationjs.paginationjs-theme-blue .paginationjs-go-input>input[type=text],.paginationjs.paginationjs-theme-blue .paginationjs-pages li{border-color:#289de9}.paginationjs .paginationjs-go-button>input[type=button]:hover{background-color:#f8f8f8}.paginationjs .paginationjs-nav{height:30px;line-height:30px}.paginationjs .paginationjs-go-button,.paginationjs .paginationjs-go-input{margin-left:5px\9}.paginationjs.paginationjs-small{font-size:12px}.paginationjs.paginationjs-small .paginationjs-pages li>a{min-width:26px;height:24px;line-height:24px;font-size:12px}.paginationjs.paginationjs-small .paginationjs-pages li.active>a{height:26px;line-height:26px}.paginationjs.paginationjs-small .paginationjs-go-input{font-size:12px}.paginationjs.paginationjs-small .paginationjs-go-input>input[type=text]{width:26px;height:24px;font-size:12px}.paginationjs.paginationjs-small .paginationjs-go-button{font-size:12px}.paginationjs.paginationjs-small .paginationjs-go-button>input[type=button]{min-width:30px;height:26px;line-height:24px;padding:0 6px;font-size:12px}.paginationjs.paginationjs-small .paginationjs-nav{height:26px;line-height:26px;font-size:12px}.paginationjs.paginationjs-big{font-size:16px}.paginationjs.paginationjs-big .paginationjs-pages li>a{min-width:36px;height:34px;line-height:34px;font-size:16px}.paginationjs.paginationjs-big .paginationjs-pages li.active>a{height:36px;line-height:36px}.paginationjs.paginationjs-big .paginationjs-go-input{font-size:16px}.paginationjs.paginationjs-big .paginationjs-go-input>input[type=text]{width:36px;height:34px;font-size:16px}.paginationjs.paginationjs-big .paginationjs-go-button{font-size:16px}.paginationjs.paginationjs-big .paginationjs-go-button>input[type=button]{min-width:50px;height:36px;line-height:34px;padding:0 12px;font-size:16px}.paginationjs.paginationjs-big .paginationjs-nav{height:36px;line-height:36px;font-size:16px}.paginationjs.paginationjs-theme-blue .paginationjs-pages li>a{color:#289de9}.paginationjs.paginationjs-theme-blue .paginationjs-pages li>a:hover{background:#e9f4fc}.paginationjs.paginationjs-theme-blue .paginationjs-pages li.active>a{background:#289de9;color:#fff}.paginationjs.paginationjs-theme-blue .paginationjs-pages li.disabled>a:hover{background:0 0}.paginationjs.paginationjs-theme-blue .paginationjs-go-button>input[type=button]{background:#289de9;border-color:#289de9;color:#fff}.paginationjs.paginationjs-theme-green .paginationjs-go-input>input[type=text],.paginationjs.paginationjs-theme-green .paginationjs-pages li{border-color:#449d44}.paginationjs.paginationjs-theme-blue .paginationjs-go-button>input[type=button]:hover{background-color:#3ca5ea}.paginationjs.paginationjs-theme-green .paginationjs-pages li>a{color:#449d44}.paginationjs.paginationjs-theme-green .paginationjs-pages li>a:hover{background:#ebf4eb}.paginationjs.paginationjs-theme-green .paginationjs-pages li.active>a{background:#449d44;color:#fff}.paginationjs.paginationjs-theme-green .paginationjs-pages li.disabled>a:hover{background:0 0}.paginationjs.paginationjs-theme-green .paginationjs-go-button>input[type=button]{background:#449d44;border-color:#449d44;color:#fff}.paginationjs.paginationjs-theme-yellow .paginationjs-go-input>input[type=text],.paginationjs.paginationjs-theme-yellow .paginationjs-pages li{border-color:#ec971f}.paginationjs.paginationjs-theme-green .paginationjs-go-button>input[type=button]:hover{background-color:#55a555}.paginationjs.paginationjs-theme-yellow .paginationjs-pages li>a{color:#ec971f}.paginationjs.paginationjs-theme-yellow .paginationjs-pages li>a:hover{background:#fdf5e9}.paginationjs.paginationjs-theme-yellow .paginationjs-pages li.active>a{background:#ec971f;color:#fff}.paginationjs.paginationjs-theme-yellow .paginationjs-pages li.disabled>a:hover{background:0 0}.paginationjs.paginationjs-theme-yellow .paginationjs-go-button>input[type=button]{background:#ec971f;border-color:#ec971f;color:#fff}.paginationjs.paginationjs-theme-red .paginationjs-go-input>input[type=text],.paginationjs.paginationjs-theme-red .paginationjs-pages li{border-color:#c9302c}.paginationjs.paginationjs-theme-yellow .paginationjs-go-button>input[type=button]:hover{background-color:#eea135}.paginationjs.paginationjs-theme-red .paginationjs-pages li>a{color:#c9302c}.paginationjs.paginationjs-theme-red .paginationjs-pages li>a:hover{background:#faeaea}.paginationjs.paginationjs-theme-red .paginationjs-pages li.active>a{background:#c9302c;color:#fff}.paginationjs.paginationjs-theme-red .paginationjs-pages li.disabled>a:hover{background:0 0}.paginationjs.paginationjs-theme-red .paginationjs-go-button>input[type=button]{background:#c9302c;border-color:#c9302c;color:#fff}.paginationjs.paginationjs-theme-red .paginationjs-go-button>input[type=button]:hover{background-color:#ce4541}.paginationjs .paginationjs-pages li.paginationjs-next{border-right:1px solid #aaa\9}.paginationjs .paginationjs-go-input>input[type=text]{line-height:28px\9;vertical-align:middle\9}.paginationjs.paginationjs-big .paginationjs-pages li>a{line-height:36px\9}.paginationjs.paginationjs-big .paginationjs-go-input>input[type=text]{height:36px\9;line-height:36px\9}

    ul, li {
            list-style: none;
        }

        #wrapper {
            width: 900px;
            margin: 20px auto;
        }

        .data-container {
            margin-top: 20px;
        }

        .data-container ul {
            padding: 0;
            margin: 0;
        }

        .data-container li {
            margin-bottom: 5px;
            padding: 5px 10px;
            background: #eee;
            color: #666;
        }
</style>

<body>

    <div class="site_width">
            <div class="products row"><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=374"><img class="productImage card-img-top littletop" style="height:200px" src="img/374.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=374">St. Sebastian</a></h5><p class="productArtist card-text aline">Artist:<span>Andrea Mantegna</span></p><p class="productDesc card-text">&lt;em&gt;St. Sebastian&lt;/em&gt; is the subject of three paintings by the Italian Early Renaissance master Andrea Mantegna. The Paduan artist lived in a period of frequent plagues; Sebastian was considered protector against the plague as having been shot through by arrows, and it was thought that plague spread abroad through the air.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>900</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>260</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=386"><img class="productImage card-img-top littletop" style="height:200px" src="img/386.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=386">Annunciation</a></h5><p class="productArtist card-text aline">Artist:<span>Leonardo da Vinci</span></p><p class="productDesc card-text">This is a painting of the traditional subject of the &lt;em&gt;Annunciation&lt;/em&gt;, by the Italian Renaissance artists Leonardo da Vinci and Andrea del Verrocchio, dating from circa 1472�1475[1] and housed in the Uffizi Gallery of Florence, Italy. The angel holds a Madonna lily, a symbol of Mary's virginity and of the city of Florence. It is supposed that Leonardo originally copied the wings from those of a bird in flight, but they have since been lengthened by a later artist.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>550</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>257</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=424"><img class="productImage card-img-top littletop" style="height:200px" src="img/424.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=424">The Milkmaid</a></h5><p class="productArtist card-text aline">Artist:<span>Jan Vermeer</span></p><p class="productDesc card-text">&lt;em&gt;The Milkmaid&lt;/em&gt; is an oil-on-canvas painting of a "milkmaid", in fact a domestic kitchen maid, by the Dutch artist Johannes Vermeer. It is now in the Rijksmuseum in Amsterdam, Netherlands, which regards it as "unquestionably one of the museum's finest attractions". The painting is strikingly illusionistic, conveying not just details but a sense of the weight of the woman and the table. "The light, though bright, doesn't wash out the rough texture of the bread crusts or flatten the volumes of the maid's thick waist and rounded shoulders", wrote Karen Rosenberg, an art critic for The New York Times. Yet with half of the woman's face in shadow, it is "impossible to tell whether her downcast eyes and pursed lips express wistfulness or concentration," she wrote.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>450</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>257</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=62"><img class="productImage card-img-top littletop" style="height:200px" src="img/62.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=62">Sidewalk Caf� at Night</a></h5><p class="productArtist card-text aline">Artist:<span>Vincent Van Gogh</span></p><p class="productDesc card-text">&lt;em&gt;Caf� Terrace at Night&lt;/em&gt;, also known as The Cafe Terrace on the Place du Forum, is an coloured oil painting on an industrially primed canvas of size 25 (Toile de 25 figure) in Arles, France, mid September 1888. The painting is not signed, but described and mentioned by the artist in his letters on various occasions�and, as well, there is a large pen drawing of the composition which originates from the artist�s estate.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>250</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>251</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=167"><img class="productImage card-img-top littletop" style="height:200px" src="img/167.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=167">Bath</a></h5><p class="productArtist card-text aline">Artist:<span>Mary Cassatt</span></p><p class="productDesc card-text">&lt;em&gt;The Child's Bath&lt;/em&gt; (or The Bath) is an 1893 oil painting by American artist Mary Cassatt. The subject matter and the overhead perspective were inspired by Japanese woodblocks. It shows dignity in motherhood and has a style similar to that of Degas.
The Art Institute of Chicago acquired the piece in 1910. It has since become one of the most popular pieces in the museum.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>225</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>250</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=442"><img class="productImage card-img-top littletop" style="height:200px" src="img/442.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=442">Arnolfini Portrait</a></h5><p class="productArtist card-text aline">Artist:<span>Jan van Eyck</span></p><p class="productDesc card-text">&lt;em&gt;The Arnolfini Portrait&lt;/em&gt; is an oil painting on oak panel dated 1434 by the Early Netherlandish painter Jan van Eyck. The painting is a small full-length double portrait, which is believed to represent the Italian merchant Giovanni di Nicolao Arnolfini and possibly his wife, presumably in their home in the Flemish city of Bruges. It is considered one of the more original and complex paintings in Western art because of the iconography, the unusual geometric orthogonal perspective, the use of the mirror to reflect the space, and that the portrait is considered unique by some art historians as the record of a marriage contract in the form of a painting.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>900</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>247</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=350"><img class="productImage card-img-top littletop" style="height:200px" src="img/350.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=350">The Night Caf�</a></h5><p class="productArtist card-text aline">Artist:<span>Vincent Van Gogh</span></p><p class="productDesc card-text">&lt;em&gt;The Night Caf�&lt;/em&gt; (original French title: &lt;em&gt;Le Caf� de nuit&lt;/em&gt;) is an oil painting created in Arles in September 1888, by Vincent van Gogh. Its title is inscribed lower right beneath the signature.
The interior depicted is the Caf� de la Gare, 30 Place Lamartine, run by Joseph-Michel and his wife Marie Ginoux, who in November 1888 posed for Van Gogh's and Gauguin's Arl�sienne; a bit later, Joseph Ginoux evidently posed for both artists, too.

In one of his letters he describes this painting:
�I have tried to express the terrible passions of humanity by means of red and green. The room is blood red and dark yellow with a green billiard table in the middle; there are four lemon-yellow lamps with a glow of orange and green. Everywhere there is a clash and contrast of the most alien reds and greens, in the figures of little sleeping hooligans, in the empty dreary room, in violet and blue. The blood-red and the yellow-green of the billiard table, for instance, contrast with the soft tender Louis XV green of the counter, on which there is a rose nosegay. The white clothes of the landlord, watchful in a corner of that furnace, turn lemon-yellow, or pale luminous green."</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>300</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>238</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=406"><img class="productImage card-img-top littletop" style="height:200px" src="img/406.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=406">A Man with a Quilted Sleeve</a></h5><p class="productArtist card-text aline">Artist:<span>Titian</span></p><p class="productDesc card-text">This portrait was eloquently described by Giorgio Vasari in his 1568 biography of Titian. He identified the man as a member of the Barbarigo, an aristocratic Venetian family. The most likely candidate is Gerolamo, who was 30 years old in 1509. He had numerous political and literary contacts and would have helped the young Titian on his path to success.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>500</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>237</div></div></div><div class="productUnit col-md-3 card"><a href="PictureDetail.php?id=18"><img class="productImage card-img-top littletop" style="height:200px" src="img/18.jpg"></a><div class="productInfo card-body"><h5 class="card-title littletop"><a class="productLink aline" href="PictureDetail.php?id=18">Portrait of Dora Maar</a></h5><p class="productArtist card-text aline">Artist:<span>Pablo Picasso</span></p><p class="productDesc card-text">The canvas was one of many portraits of Dora Maar painted by Pablo Picasso over their nearly decade-long relationship. Picasso fell in love with the 29-year old Maar at the age of 55 and soon began living with her.</p></div><div class="productOther"><div class="productPrice"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>355</div><div class="productView"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>234</div></div></div></div>
            <div id="pagination-container"><div class="paginationjs"><div class="paginationjs-pages"><ul><li class="paginationjs-prev J-paginationjs-previous" data-num="14" title="Previous page"><a href="">«</a></li><li class="paginationjs-page paginationjs-first J-paginationjs-page" data-num="1"><a href="">1</a></li><li class="paginationjs-ellipsis disabled"><a>...</a></li><li class="paginationjs-page J-paginationjs-page" data-num="13"><a href="">13</a></li><li class="paginationjs-page J-paginationjs-page" data-num="14"><a href="">14</a></li><li class="paginationjs-page J-paginationjs-page active" data-num="15"><a>15</a></li><li class="paginationjs-page J-paginationjs-page" data-num="16"><a href="">16</a></li><li class="paginationjs-page J-paginationjs-page" data-num="17"><a href="">17</a></li><li class="paginationjs-page J-paginationjs-page" data-num="18"><a href="">18</a></li><li class="paginationjs-next J-paginationjs-next" data-num="16" title="Next page"><a href="">»</a></li></ul></div><div class="paginationjs-nav J-paginationjs-nav">15 / 18</div></div></div>  
            <!-- <div class="pagination" id="Pagination">
                <ul class="pagination">
                    <li class="Prev disable"><a href="#">«</a></li>
                    <li class="Next"><a href="#">»</a></li>
                </ul>
            </div> -->
    </div>


</div></div></body>
<div id="data-container" class="container">
    <div class="products row">

    </div>
</div>
        <!-- <div class="card" style="width: 18rem;">
  <img src="img/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
<!-- <div class="productUnit col-md-3 card">'
    <a href="PictureDetail.php?id='+ item.artworkID +'">'
        <img class="productImage card-img-top littletop" style="height:200px" src="img/'+ item.artworkID+ '.jpg">'
    </a>'

    <div class="productInfo card-body">'
    <h5 class="card-title littletop">'
        <a class="productLink" href="PictureDetail.php?id='+item.artworkID+ '">'
            +         item.title
        </a>'
    </h5>'
                
     <p class="productArtist card-text">Artist:<span>' + item.artist + '</span>'
          
    <p class="productDesc card-text">'+ item.description + '</p>'

    '<div class="productView">'
            // +     '<span class="glyphicon glyphicon-fire" aria-hidden="true">' + item.view
            // +     '</div>'
            + '</div>'
            +  '<div class="productOther">'
            +    '<div class="productPrice">'
            +      '<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>'+item.price +
            +    '</div>'
            +     '<div class="productView">'
            +     '<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>' + item.view
            +     '</div>'
            +  '</div>'
            +'</div>'
            </div>; -->
<div id="pagination-container"></div>  
</body>
<script>
    var arr = Array.from(Array(100), (v,k) =>k);
    $('#pagination-container').pagination({
    // dataSource: 'php/search.php',
    dataSource: function(done) {
    $.ajax({
        type: 'GET',
        url: 'php/search.php',
        success: function(response) {
            
            done(JSON.parse(response));
        }
    });
    },

    pageSize: 9,
    
    showPageNumbers: true,
    showPrevious: true,
    showNext: true,
    showNavigator: true,
    showFirstOnEllipsisShow: true,
    showLastOnEllipsisShow: true,
    callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        $('.products').html(html);
    }
    
})
function template(data) {
    var html = '';
    // var html = '<ul>';
    // console.log(JSON.parse(data));
    $.each(data, function(index, item){
        item = JSON.parse(item);
        //console.log(item1);
        // html += '<li><img src="../img/'+ item.artworkID +'.jpg"></a></li>';

        html += '<div class="productUnit col-md-3 card">'
            + '<a href="PictureDetail.php?id='+ item.artworkID +'">'
            + '<img class="productImage card-img-top littletop" style="height:200px" src="img/'+ item.artworkID+ '.jpg">'
            + '</a>'

            + '<div class="productInfo card-body">'
            + '<h5 class="card-title littletop">'
            +     '<a class="productLink" href="PictureDetail.php?id='+item.artworkID+ '">'
            +         item.title
            +     '</a>'
            + '</h5>'
                
            +     '<p class="productArtist card-text">Artist:<span>' + item.artist + '</span></p>'
            // +     '<br>'
            +     '<p class="productDesc card-text">'+ item.description + '</p>'

            // +     '<div class="productView">'
            // +     '<span class="glyphicon glyphicon-fire" aria-hidden="true">' + item.view
            // +     '</div>'
            + '</div>'
            +  '<div class="productOther">'
            +    '<div class="productPrice">'
            +      '<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>'+item.price
            +    '</div>'
            +     '<div class="productView">'
            +     '<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>' + item.view
            +     '</div>'
            +  '</div>'
            +'</div>'
            +'</div>';
    });
    // html += '</ul>';
    return html;
}
</script>
</html>