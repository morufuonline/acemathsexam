<!--

$(document).ready(function () {
							
$(".general-fade").hide();

$("input").focus(function(){
$(".success").hide("fold");
});

//////////////////////////////////////////////////////////
$(".only-no").keyup(function(){
var this_val = this.value;
if(isNaN(this_val)){
this.value = this_val.replace(/[^0-9.]/gi, "");
}	
}).change(function(){
var this_val = this.value;
if(isNaN(this_val)){
this.value = this_val.replace(/[^0-9.]/gi, "");
}	
});

//////////////////////////////////////////////////
$(".general-form").submit(function(e){
e.preventDefault();  
var formdata = new FormData(this);
$(".general-fade").show();
var page_url = $(this).attr("action");
var page_result = $(this).attr("id");

$.ajax({
url: page_url,
type: "POST",
data: formdata,
mimeTypes:"multipart/form-data",
contentType: false,
cache: false,
processData: false,
success: function(data){
$("." + page_result).html(data);
$("html, body").animate({scrollTop:0}, "slow");
$(".general-fade").hide();
},error: function(){
alert("Error occured!");
}
});

});

//////////////////////////////////////////////////
$(".general-link").click(function(e){
e.preventDefault();  
$(".general-fade").show();
var page_url = $(this).attr("href") + "gh/1/";

$.get(page_url,function(data){
$(".form-div").html(data);
$("html, body").animate({scrollTop:0}, "slow");
});

});


$(".general-link-conf").click(function(e){
e.preventDefault();  
$(".general-fade").show();
var page_url = $(this).attr("href") + "gh/1/";
var conf_title = $(this).attr("name");
var conf_text = $(this).attr("lang");

swal({
  title: conf_title,
  text: conf_text,
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes",
  closeOnConfirm: true
},
function(isConfirm){
  if (isConfirm) {  
$.get(page_url,function(data){
$(".form-div").html(data);
$("html, body").animate({scrollTop:0}, "slow");
});
  } else {
$(".general-fade").hide();
return false;
  }
});

});

///////////////////////////////////////////////

$("input:checkbox:not(.sel-group)").change(function () {
var checked_class = $(this).attr("class");
var  det_unchecked = $("input:checkbox."+checked_class+":not(:checked)").length;
var  det_unchecked_all = $("input:checkbox:not(:checked)").length;

if(det_unchecked > 0){
$("input:checkbox#"+checked_class).prop("checked", false);
}else if(det_unchecked == 0 && det_unchecked_all == 1){
$("input:checkbox#"+checked_class).prop("checked", true);
}else{
$("input:checkbox#"+checked_class).prop("checked", true);
}
});

$("input.sel-group").change(function(){
var group_id = $(this).attr("id");
$("input:checkbox."+group_id).prop("checked", $(this).prop("checked"));
var  det_unchecked_all = $("input:checkbox:not(:checked)").length;
});

///////////////////////////////////////////////
$(".del-btn").click(function(){
var  det_checked_all = $("input:checkbox:not(.sel-group):checked").length;
if(det_checked_all > 0){
swal({
  title: "Confirmation",
  text: "Are you sure you want to delete " + det_checked_all + " " + conf_text + "(s)?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes",
  closeOnConfirm: true
},
function(isConfirm){
  if (isConfirm) {
$(".sub-del").click();
  } else {
return false;
  }
});
}else{
sweetAlert("Notice", "Atleast one " + conf_text + " must be selected.", "error");
}
});

///////////////////////////////////////////
$("#ufile").change(function(){
$(".img-form").submit();
});
/////////////////////////////////

});

//-->