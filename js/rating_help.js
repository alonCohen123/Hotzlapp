$(document).on('mouseenter', '.rating', function(){
var index = $(this).data("index");
var business_id = $(this).data('business_id');
remove_background(business_id);
for(var count = 1; count<=index; count++)
{
 $('#'+business_id+'-'+count).css('color', '#ffcc00');
}
});

function remove_background(business_id)
{
for(var count = 1; count <= 5; count++)
{
 $('#'+business_id+'-'+count).css('color', '#ccc');
}
}

$(document).on('mouseleave', '.rating', function(){
var index = $(this).data("index");
var business_id = $(this).data('business_id');
var rating = $(this).data("rating");
remove_background(business_id);
//alert(rating);
for(var count = 1; count<=rating; count++)
{
 $('#'+business_id+'-'+count).css('color', '#ffcc00');
}
});

$(document).on('click', '.rating', function(){
 var index = $(this).data("index");
 var business_id = $(this).data('business_id');
 //alert(business_id+" "+index);
 $.ajax({
  url:"../includes/rating.inc.php",
  method:"POST",
  data:{index:index, business_id:business_id},
  success:function(data)
  {
   if(data == 'done')
   {
    load_comment();
    alert("You have rate "+index +" out of 5");
   }
   else
   {
    alert(data);
   }
  }
 });
});
