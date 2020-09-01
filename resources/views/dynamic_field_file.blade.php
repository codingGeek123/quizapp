<html>
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
Options</td>  

</tr>  
@foreach($getData as $getDataResult)  
        <tr border="none">  
            <td>{{$getDataResult['id']}}</td>  
            <td>{{$getDataResult['question_name']}}</td>  
            <td><a  href= <?php echo '/options/view?id='.$getDataResult['id'] ?> class = "add" id = <?php echo $getDataResult['id'] ?> > Add Options </td>
            <td><a  href= <?php echo '/options/view/'.$getDataResult['id'] ?> class = "add" id = <?php echo $getDataResult['id'] ?> > View Options </td>
            
            
</tr>
@endforeach
</thead>  
<tbody>  
</div>

    </body>
    <div class = "add_options">
    </div
</html>
