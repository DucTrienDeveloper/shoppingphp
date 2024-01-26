<?php
?>
<script>
    const url = 'fetch.php'
    fetch(url).then(function(response){
        return response.json();
    }).then(function(posts){
        console.log(posts);
    })
    const api = 'test.php'
    fetch(api).then(function(res){
        return res.json();
    }).then(function(post){
        console.log(post);
    })
</script>