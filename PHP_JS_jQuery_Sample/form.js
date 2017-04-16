$(function () {
  $('input[name=name]').on("blur",function() {
    // テキストボックス
    var str = "";
    str = $('#name').val();
    $("#str").text(str);
  })
});