<h1>Show</h1>
<button class="btn btn-success" id="btn">click me</button>
<?php
$js = <<<JS
    $('#btn').on('click', function() {
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test:'123'},
            type: 'GET',
            success: function(res) {
                console.log(res);  
            },
            error: function(){
                alert('Error');
            }
        }) ; 
    });
JS;

$this -> registerJs($js);
?>