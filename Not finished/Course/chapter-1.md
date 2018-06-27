#### What is CSS
CSS is a cascade styles language. Each style can be written inline at HTML page It's a bad practice and outline 
(in a separated file with *.css extension)

#### Class vs ID
Class and ID have a similar logic. If you want to add some custom styles -> you can add an attribute 
class or id into your HTML tag and later, in css file by using this name add some styles.
So, what is the difference?

One class name can be added a lot of times on your page.
Id attribute is unique. YOu can use different id names, but classes can be assigned to a different elements on page. 
You can assign same class to a different HTML tag too.

for example: you create a tag with class `blue-background` and in this class you can add this css rule.
```
.blue-background {
  background: blue;
}
```

So you create a few divs with some content inside.
right now this divs have white background by default.
When you add a class attribute -> this change their behaviour.

Let's add some another classes:
```
.square {
  height: 100px;
  width:  100px;
}
```

When we create div with this class it looks like a square block.
Let's add a second element with class attribute square.

Then I'll show you an example or using ids and implement cascade styling.

```
#red-square {
  height: 200px;
  width:  200px;
}
```

When we add class square it looks this [pic]
When we also add id attribute as red-square - it looks like it get rules from id. 
It's because an id have a higher priority in styling.
Let's add class 
```
.blue {
  color: blue;
}
```

and let's add `color:red` to id style rules.

```
#red-square {
  height: 200px;
  width:  200px;
  color:  red;
}
```

#### Divs

We touched HTML code in previous lesson. But today we'll talk more about divs.

Div is a block element. Usually you can use divs for wrap every element in the HTML page.
But lates HTML5 specification add a lot of new tags, that  decreasing number of divs inside the project.

Before you can have
```
<div class="header"></div>
<div class="main"></div>
<div class="footer"></div>
```

now
```
<nav></nav>
<main> or <section>
<footer></footer>
```

Div is a powerful thing, but we'll touch only basics things.
Let's name 
```
<div class="main"></div>
.main {
  width: 100%;
}

<div class="sidebar"></div>
.sidebar {
  width: 25%;
}

<div class="content"></div>
.content {
  width: 75%;
}
```
