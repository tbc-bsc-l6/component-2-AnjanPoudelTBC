<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
form{
    padding: 2rem 1rem 4rem 1rem ;
    background-color: rgb(237, 236, 236);
    border-radius: 4px;
    width: 400px;
}

option{
    padding: 0.25rem 0.5rem;
}

input{
    padding: 0.35rem 0.5rem;
    margin: 0.35rem 0;
    width: 95%;
}
body{
  
  padding: 3rem;
}
a{
  text-decoration: none;
}
.products{
  display: flex;
 
  flex-wrap: wrap;
  gap: 1.5rem;
  width: 100%;
  /* position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%); */
}

.product-card{
  background-color: rgb(237, 236, 236);
  border-radius: 4px;
  padding: 2rem 1rem;
  width: 250px;
  min-height: 200px;
}

.product-type{
  font-weight: 600;
  padding: 1rem 0;
  font-size: 1.25rem;
}
.product-title{
  font-size: 1rem;
  font-weight: 600;

}
.product-desc{
  padding: 0.25rem 0;
}
.product-buttons{
  padding-top: 1rem;
  width: 100%;
  display: flex;
  justify-content: space-between;
  position: relative;
}
.btn{
  
  color: white;
  background-color:#1E1E1E ;
  padding: 0.25rem 0.5rem;
  border-radius: 8px;
  text-transform: uppercase;
  cursor: pointer;

}
.btn-right{
  position: absolute;
  right: 0;
}

    </style>
</head>
<body>
        @yield('content')
</body>
</html>
