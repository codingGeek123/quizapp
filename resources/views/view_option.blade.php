<html>
<script src="/lib/jquery.min.js"></script>
<script src="/lib/jquery.plugin.js"></script>
<script>
 $(document).ready(function() { 
            $(".right").click(function() { 
                alert("hii");
            }); 
        }); 


</script>

    <body>
    <div class = "data">
        <h3>View Questions</h3>
<table border="1px" id = "data">  
<thead>  
<tr>  
<td>  
ID </td>  
<td>  
Question Name </td>  
<td>  
Question Id </td>  
<td>  
Marks</td>  
<td>  
Option Name</td>  
<td>  
Right answer</td> 

</tr>  
@foreach($getData as $getDataResult)  
        <tr border="none">  
            <td>{{$getDataResult['id']}}</td>  
            <td>{{$getDataResult['question_name']}}</td>  
            <td>{{$getDataResult['question_id']}}</td>  
            <td>{{$getDataResult['marks']}}</td>  
            <td>{{$getDataResult['options_name']}}</td>
            <td class ="right"><input type = "checkbox"  id=<?php  echo $getDataResult['id']; ?> name = "is_right_answer" class = "right"></td>              


</tr>
@endforeach
</thead>  
<tbody>  
</div>

    </body>
 

</html>
<script>

$(document).ready(function(){
   alert("hi");
 });


</script>

