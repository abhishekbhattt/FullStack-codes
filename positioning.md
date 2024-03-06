**Positioning in html using two different div one is rectangle and other is circle**

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #circle {
            background-color: red;
            position: relative;
            top: 25%;
            left: 35%;
            height: 100px;
            width: 100px;
            border-radius: 50%;
          }

        #rect {
            background-color: blue;
            height: 200px;
            width: 300px;
            position: absolute;
            top: 25%;
            left: 48%;

        }
    </style>
</head>

<body>
    <div class="container" id="rect">
        <div class="container" id="circle">

        </div>
    </div>
</body>

</html>
```
