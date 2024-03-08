# Box Model 📦

The box model in HTML and CSS describes the layout of elements on a webpage. Each element is treated as a rectangular box consisting of four main parts:

1. **Content**: This is the actual content of the element, such as text, images, or other HTML elements. 📝

2. **Padding**: Padding is the space between the content and the border of the element. It's used to create space around the content within the element. 🧸

3. **Border**: The border surrounds the padding and content of the element. It helps to visually separate the element from its surroundings. 🖼️

4. **Margin**: Margin is the space outside the border of the element, which helps to create space between elements on the page. 🌟

Here's an example of how the box model works:

**Box Model image**

<img src="https://tse3.mm.bing.net/th?id=OIP.7B0P3I5N0ozeAFZYllQeXgHaFL&pid=Api&P=0&h=180"/>

<i>for getting the above image you have to inspect the box</i>

```html<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Box Model Example</title>
  <style>
    .box {
      width: 200px;
      height: 100px;
      padding: 20px;
      border: 2px solid black;
      margin: 10px;
    }
  </style>
</head>
<body>
  <div class="box">
    This is the content of the box.
  </div>
</body>
</html>

```
