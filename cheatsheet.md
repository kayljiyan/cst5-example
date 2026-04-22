# HTML & CSS Fundamentals Cheat Sheet

## 1. Core HTML Tags

### Basic Structure

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Title</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- Content goes here -->
  </body>
</html>
```

### Common Tags

#### Text & Content

```html
<h1>Heading</h1>
<p>Paragraph</p>
<strong>Bold</strong>
<em>Italic</em>
```

#### Links & Images

```html
<a href="https://example.com">Visit Site</a>
<img src="image.jpg" alt="Description" />
```

#### Lists

```html
<ul>
  <li>Item 1</li>
</ul>

<ol>
  <li>Item 1</li>
</ol>
```

#### Forms (Important for PHP)

```html
<form action="login.php" method="POST">
  <input type="text" name="username" />
  <input type="password" name="password" />
  <button type="submit">Login</button>
</form>
```

#### Tables (For Dashboard)

```html
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
  </tr>
  <tr>
    <td>John</td>
    <td>john@email.com</td>
  </tr>
</table>
```

---

## 2. External CSS Styling

### Linking CSS

```html
<link rel="stylesheet" href="styles.css" />
```

### Basic CSS Syntax

```css
selector {
  property: value;
}
```

### Examples

```css
body {
  font-family: Arial;
  background-color: #f4f4f4;
}

h1 {
  color: blue;
}
```

### Class & ID

```css
.card {
  border: 1px solid #ccc;
}

#main {
  padding: 20px;
}
```

---

## 3. CSS Best Practices

- Use external CSS (avoid inline styles)
- Use meaningful class names (`.login-container`, `.btn-primary`)
- Keep styles reusable
- Group related styles together
- Avoid overly specific selectors

Example:

```css
.btn {
  padding: 10px;
}

.btn-primary {
  background: blue;
  color: white;
}
```

---

## 4. HTML Layout Best Practices

### Use Semantic Tags

```html
<header></header>
<nav></nav>
<main></main>
<section></section>
<footer></footer>
```

### Avoid Using Tables for Layout

Use tables ONLY for data display.

### Use Divs for Layout

```html
<div class="container">
  <div class="sidebar"></div>
  <div class="content"></div>
</div>
```

### Basic Layout with CSS

```css
.container {
  display: flex;
}

.sidebar {
  width: 25%;
}

.content {
  width: 75%;
}
```

---

## 5. Simple Login Page Example

### HTML

```html
<div class="login-container">
  <form action="login.php" method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="Password" />
    <button type="submit">Login</button>
  </form>
</div>
```

### CSS

```css
.login-container {
  width: 300px;
  margin: 100px auto;
  padding: 20px;
  border: 1px solid #ccc;
}

input {
  width: 100%;
  margin-bottom: 10px;
}
```

---

## 6. Simple Dashboard Using Tables

### HTML

```html
<h2>Dashboard</h2>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Name</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Alice</td>
  </tr>
</table>
```

### CSS Improvement

```css
table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  padding: 10px;
  border: 1px solid #ddd;
}
```

---

## 7. Key Reminders for Students

- HTML = Structure (what you see)
- CSS = Design (how it looks)
- PHP = Logic (how it works)

### Simple Analogy

HTML is the skeleton, CSS is the clothes, PHP is the brain.

---

## 8. Minimal Workflow

1. Create HTML file
2. Link CSS file
3. Add structure (HTML)
4. Style with CSS
5. Connect to PHP for functionality

---

This cheat sheet is meant to give you JUST ENOUGH to start building simple PHP-powered web applications.
