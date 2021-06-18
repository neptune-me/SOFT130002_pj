$(document).ready(function () {
  var arr = Array.from(Array(100), (v, k) => k);
  $sort_way = $("input[name=ref]").val();
  pagination($sort_way);
  $("input[name=ref]").click(function () {
    $sort_way = $(this).val();
    pagination($sort_way);
  });

  // html += "</ul>";
});
function GetQueryString(name) {
  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
  var r = window.location.search.substr(1).match(reg);
  if (r != null) return unescape(r[2]);
  return null;
}
function pagination($sort_way) {
  $("#pagination-container").pagination({
    // dataSource: 'php/search.php',
    dataSource: function (done) {
      $.ajax({
        data: { keyword: GetQueryString("keyword"), sort: $sort_way },
        type: "GET",
        url: "php/search.php",
        success: function (response) {
          //   console.log(JSON.parse(response));
          done(JSON.parse(response));
        },
      });
    },

    pageSize: 9,
    showPageNumbers: true,
    showPrevious: true,
    showNext: true,
    showNavigator: true,
    showFirstOnEllipsisShow: true,
    showLastOnEllipsisShow: true,
    callback: function (data, pagination) {
      // template method of yourself
      var html = template(data);
      $(".products").html(html);
    },
  });
}
function template(data) {
  var html = "";
  // var html = "<ul>";
  // console.log(JSON.parse(data));
  $.each(data, function (index, item) {
    item = JSON.parse(item);
    html +=
      '<div class="productUnit col-md-3 card">' +
      '<a href="PictureDetail.php?id=' +
      item.artworkID +
      '">' +
      '<img class="productImage card-img-top littletop" style="height:200px" src="img/' +
      item.artworkID +
      '.jpg">' +
      "</a>" +
      '<div class="productInfo card-body">' +
      '<h5 class="card-title littletop">' +
      '<a class="productLink aline" href="PictureDetail.php?id=' +
      item.artworkID +
      '">' +
      item.title +
      "</a>" +
      "</h5>" +
      '<p class="productArtist card-text aline">Artist:<span>' +
      item.artist +
      "</span></p>" +
      // +     '<br>'
      '<p class="productDesc card-text">' +
      item.description +
      "</p>" +
      // +     '<div class="productView">'
      // +     '<span class="glyphicon glyphicon-fire" aria-hidden="true">' + item.view
      // +     '</div>'
      "</div>" +
      '<div class="productOther">' +
      '<div class="productPrice">' +
      '<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>' +
      item.price +
      "</div>" +
      '<div class="productView">' +
      '<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>' +
      item.view +
      "</div>" +
      "</div>" +
      "</div>" +
      "</div>";
  });
  return html;
}
