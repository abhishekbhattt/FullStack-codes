# Using Ajax in HTML

Ajax (Asynchronous JavaScript and XML) is a technique used in web development to create asynchronous web applications. It allows you to update parts of a web page without reloading the entire page. Here's how you can use Ajax in HTML:

1. **Include jQuery Library**: First, include the jQuery library in your HTML file. jQuery simplifies Ajax calls and makes it easier to work with JavaScript in general.
   
   ```html
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            position: absolute;
            top: 20%;
            left: 30%;
            height: 70%;
            width: 30%;
            background-color: rgb(178, 178, 230);
        }

        #photo1 {
            height: 120px;
            width: 120px;
            position: relative;
            left: 35%;
            top: 5%;
        }

        .formcontainer {
            position: relative;
            top: 80px;
        }

        label {
            font-size: large;
            display: block;

            margin: 20px;
        }

        .btn {
            height: 35px;
            width: 85px;
            border-radius: 17px;
            background-color: rgb(48, 48, 241);
            font-size: 15px;
            margin: 18px;
            color: white;
        }

        .btn:hover {
            background-color: blue;
            transition: 1s;

        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <div id="photo">
            <img id="photo1" src="https://cdn1.iconfinder.com/data/icons/mix-color-3/502/Untitled-7-512.png"
                alt="user_image">
        </div>
        <div class="formcontainer">

            <form onsubmit="" class="formclass">
                <label for="name">First name :<input type="text" class="ip" id="firstname"> </label>
                <label for="name">Last name : <input type="text" class="ip" id="lastname"></label>

            </form>
            <input type="button" value="Submit" class="btn" onclick="x()"></input>
            <input type="reset" value="Clear" class="btn"></input>
        </div>
    </div>

    <script>
        function x() {
            $.ajax({
                type: "GET",
                url: "https://reqres.in/api/users/2",
                success: function (res) {
                    $('#firstname').val(res.data.first_name);
                    $('#lastname').val(res.data.last_name);
                    $('#photo').html("<img src=" + res.data.avatar + ">");

                },
                error: function () {
                    alert("Agax call failed");
                }
            });
        }
    </script>
</body>

</html>```html
