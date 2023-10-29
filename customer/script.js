let user = {
    "username": "Mike",
    "password": "Mike567",
    "gender": "male",
    "email": "mike@mail.com"
 }
 let params = {
    "method": "POST",
    "headers": {
       "Content-Type": "application/json; charset=utf-8"
    },
    "body": JSON.stringify(user)
 }
  
 fetch("test.php", params).then(function(response){
    return response.text();
 }).then(function(data){
    console.log(data);
 })