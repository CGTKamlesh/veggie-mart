$(document).ready(function(){
   $(".add-to-fridge").click(function(){
    var price=$(this).data('price');
    var icon=$(this).data('icon');
    var name=$(this).data('name');
    var abbr=$(this).data('abbr');
    var element=$(this);
    
    var quantity=$("#"+abbr+"-quantity").val();
    var option=$("#"+abbr+"-option").val();
    
    $.ajax({
           url: 'add_to_fridge.php',
           type: "POST",
           data: {'price': price,'icon':icon,'name':name,'abbr':abbr,'quantity':quantity,'option':option},
           success: function(result) {
                var response=JSON.parse(result);
                if(response['success']){
                    var total_cart=response['total_cart'];
                    $(".cartcount").text(total_cart);
                    $(element).text('Added to Fridge');
                }
                else{
                    alert(response['message']);
                }
           }
      });
    
   });
});