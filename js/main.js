$(document).ready(function(){
    cat();
   function cat(){
       $.ajax({
           url:"action.php",
           method:"POST",
           data:{category:1},
           success: function(data){
                $("#get_category").html(data);
           }
       });
   };
   brand();
   function brand(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{brand:1},
            success: function(data){
                $("#get_brand").html(data);
            }
        });
    };
    products();
   function products(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{products:1},
            success: function(data){
                $("#get_products").html(data);
            }
        });
    };
});