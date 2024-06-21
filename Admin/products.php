<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <form class="upl">
        <div class="frm">
            <label for="">ID:</label>
            <input type="text" name="txt_id" id="txt-id">
            <label for="">Name:</label>
            <input type="text" name="txt_name" id="txt-namse">
            <label for="">Model:</label>
            <input type="text" name="txt_model" id="txt-model">
            <button class="btnPost">Post</button>
        </div>
    </form>
</body>

<script>
    $(document).ready(function(){
        $(".btnPost").on("click", function(){
            alert("Sokrong, I Love You.");
            var eThis = $(this);
            var frm = eThis.closest('form.upl');
            var frm_data = new FormData(frm[0]);
            $.ajax({
                url:'save.php',
                type:'POST',
                data:frm_data,
                contentType:false,
                cache:false,
                processData:false,
                dataType:"json",
                beforeSend:function(){
                        //work before success    
                },
                success:function(data){   
                        //work after success 
                    console.log("Sokrong, I Love You. Succesfull");
                }				
            }); 

            //alert("Sokrong, I Love You.")
            
        }); 

    });
</script>

</html>